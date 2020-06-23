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
									
								</div>
                            </div>
                            <div class="block-content collapse in">
                            <div class="card-body">
												<?php
						
						$query=mysqli_query($conn,"SELECT *,year(curDate())-year(DOB) as age FROM  reg_usertb where user_id ='$get_id'") or die(mysqli_error($conn));
						$row = mysqli_fetch_array($query);
						$user_id = $row['user_id'];
						?>
						<!-- <div class="jumbotron"> -->
						<div class="alert alert-success"><center>WELCOME &nbsp;
                     <?php echo $row['fname']." ".$row['mname']. " ".$row['lname'];  ?> </center>
                     <p> <a href="view_detaills.php" class="btn btn-info"><i class = "fa fa-eye"></i> View Detail</a>||<a href="user_update.php" class="btn btn-success"><i class = "fa fa-pencil"></i> Edit</a>||<a href="change_pass.php" class="btn btn-danger"><i class="fa fa-spinner "> Change Password</i></a></p>
						</div>
					<!-- </div> -->

						<div class="container">
							<div class="row col-md-offset-4">
							<?php
                     if(isset($_POST['change-pass'])){
                  $username=mysqli_real_escape_string($conn,$_POST['username']);
                  $password=mysqli_real_escape_string($conn,$_POST['password']);
                  $confirmpassword=$_POST['confirm-pass'];
              if(!empty($password)){
              if(($password!==$confirmpassword)){
              echo "<center><div class='alert alert-danger col-md-8'>
              <h4 class='alert-heading'>Warning!</h4>
                        <p class='mb-0'>  Password Do Not Much</p>
                    <button class='close' data-dismiss='alert'>&times;</button>
              </div></center>";
              }else{
              $emailCheck="SELECT * FROM `reg_usertb` WHERE username='$username' ";
              $result=mysqli_query($conn,$emailCheck)or die(mysqli_error($conn));
              $usercount=mysqli_num_rows($result);
             
              if($usercount>0) {
              
              $update="update `reg_usertb` set `password`='$password' where `username`='$username'";
              if(mysqli_query($conn,$update)){
               echo "<center><div class='alert alert-success col-md-8'>
                         Password Successfully Updated!
                    <button class='close' data-dismiss='alert'>&times;</button>
              </div></center>";
              }else{
                 	echo "<center><div class='alert alert-warning'>
                 	<h4 class='alert-heading'>Warning!</h4>
                <p class='mb-0'>Something really is not right!</p></div></center>";

   }


               }else{
                 
               }
               }
           }else{echo "<Enter your new password";}
               }

							?>
							<form class="form-row" method="post">
						
						<!-- change password-->
						<div class="col-sm-6 napo">
							<div class="form-group col-md-10 ">
								<label for='school'>UserName</label>
								<input type="text" name="username" placeholder="" id="school" class="form-control " value="<?php echo $row['username']?>" readonly>
							
						</div>
						
							<div class="form-group col-md-10">
								<label for='password'>Password</label>
								<input type="password" name="password" placeholder="Enter Password" id="password" class="form-control" required="">
							
						    </div>
						
							<div class="form-group col-md-10 ">
                               <label for='confirm-pass'>Confirm Password</label>
								<input type="password" name="confirm-pass" placeholder="Confirm Password" id="confirm-pass" class="form-control" required="">
							
						</div>
					</div>
						
						
						<br><br>
					
							<div class="form-group col-md-8 col-md-offset-2">
								<button type="submit" name="change-pass" class="btn btn-primary "><i class="fa fa-lock "> Change Password</i></button>
							</div>
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