<?php include('includes/banner.php'); ?>
<?php require 'config/db.php';?>
<?php include('controllers/session.php'); ?>
<?php $get_id = $_SESSION['id']; ?>

<head>
	
	<style type="text/css">
		.jumbotron{
			margin-top: 50px;
		}
		label{
			color:#ffffff;
			text-transform: uppercase;
		}
	</style>
</head>
    <body style="background: url(images/bgf.jpg);">
		<?php include('navbar.php'); ?>

        <div class="container-fluid">
            <div class="row-fluid">
				
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-right">
										<!-- <a href="crusader.php"><i class="icon-arrow-left icon-large"></i> Back</a> -->
								</div>
                            </div>
                            <div class="block-content collapse in">
                            <div class="card-body">
												<?php
						//$query = mysqli_query($mysqli,"select *, year(curDate()) -year(DOB) as age from crusaders where id = '$get_id'")or die(mysqli_error($mysqli));
						$query=mysqli_query($conn,"SELECT *,year(curDate())-year(DOB) as age FROM  reg_usertb where user_id ='$get_id'") or die(mysqli_error($conn));
						$row = mysqli_fetch_array($query);
						$user_id = $row['user_id'];
						?>
						<!-- <div class="jumbotron"> -->
							<br><br>
						<div class="alert alert-success"><center>WELCOME &nbsp;
                     <?php echo $row['fname']." ".$row['mname']. " ".$row['lname'];  ?> </center>
                     <p> <a href="view_detaills.php" class="btn btn-info"><i class = "fa fa-eye"></i> View Detail</a>||<a href="view_detaills.php" class="btn btn-success"><i class = "fa fa-pencil"></i> Edit</a>||<a href="change_pass.php" class="btn btn-danger"><i class="fa fa-spinner "> Change Password</i></a></p>
						</div>
					<!-- </div> -->
						<div class="container" style="margin-top:30px;">
							<div class="row">
							<?php
                         if(isset($_POST['update'])){
                              $fname=$_POST['fname'];
                              $mname=$_POST['mname'];
                              $lname=$_POST['lname'];
                              $home_town=$_POST['home_town'];
                              $school=$_POST['school'];
                              $level_education=$_POST['level_education'];
                              $username=$_POST['username'];
                              if(!empty($fname) && !empty($mname) && !empty($lname) && !empty($home_town) && !empty($level_education) && !empty($username)){
                              mysqli_query($conn,"update reg_usertb set fname='$fname',mname='$mname',lname='$lname',level_education='$level_education',home_town='$home_town',school='$school',username='$username' where user_id='$get_id'");
                             echo"<center>
                             <div class='alert alert-success'>Rcords Updated Successfully
                                  <button class='close' data-dismiss='alert'>&times;</button>
                             </div></center>"; 
                              }
                         }

							?>
							<form class="form-row" method="post">
						<div class="form-row-log">
							
							<div class="form-group col-md-4">
								<label for='fname'>First Name</label>
								<input type="text" name="fname" placeholder="" id="fname" class="form-control" value="<?php echo $row['fname']?>">
							</div>
						</div>
						<div class="form-row-log">
							<div class="form-group col-md-4">
								<label for='mname'>Middle Name</label>
								<input type="text" name="mname" placeholder="" id="mname" class="form-control" value="<?php echo $row['mname']?>">
							</div>
						</div>
						<div class="form-row-log">
							<div class="form-group col-md-4">
								<label for='lname'>Last Name</label>
								<input type="text" name="lname" placeholder="" id="lname" class="form-control" value="<?php echo $row['lname']?>">
							</div>
						</div>
						<div class="form-row-log">
							<div class="form-group col-md-4">
								<label for='dob'>Date of Birth</label>
								<input type="text" name="dob" placeholder="" id="dob" class="form-control" value="<?php echo $row['dob']?>" readonly>
							</div>
						</div>
						<div class="form-row-log">
							<div class="form-group col-md-4">
								<label for='gender'>Gender</label>
								<input type="text" name="gender" placeholder="" id="gender" class="form-control" value="<?php echo $row['gender']?>" readonly>
							</div>
						</div>
						<div class="form-row-log">
							<div class="form-group col-md-4">
								<label for='home_town'>Home Town</label>
								<input type="text" name="home_town" placeholder="" id="home_town" class="form-control" value="<?php echo $row['home_town']?>">
							</div>
						</div>
						<div class="form-row-log">
							<div class="form-group col-md-4">
								<label for='school'>School</label>
								<input type="text" name="school" placeholder="" id="school" class="form-control" value="<?php echo $row['school']?>">
							</div>
						</div>
						<div class="form-row-log">
							<div class="form-group col-md-4">
								<label for='level_education'>Level Of Education</label>
								<input type="text" name="level_education" placeholder="" id="level_education" class="form-control" value="<?php echo $row['level_education']?>">
							</div>
						</div>
						<div class="form-row-log">
							<div class="form-group col-md-4">
                               <label for='username'>Username</label>
								<input type="text" name="username" placeholder="" id="username" class="form-control" value="<?php echo $row['username']?>">
							</div>
						</div>
						
						</div>
						<br><br>
					
							<div class="form-group col-md-8 ml-0 col-md-offset-2">
								<button type="submit" name="update" class="btn btn-primary form-control"><i class="fa fa-user"> Update</i></button>
							</div>
						</div>
					</div>
					</form>
						 <div class="span5">
						
						
						</div>
                <div class="span12"> 
	<hr>
			

</div>
							

                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include ('footer.php'); ?>	
        
		
    </body>	
</html>