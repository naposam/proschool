<?php include('includes/banner.php'); ?>
<?php require 'config/db.php';?>
<?php include('controllers/session.php'); ?>
<?php $get_id = $_SESSION['id']; ?>
<head>
	<style type="text/css">
		.jumbotron{
			margin-top: 50px;
		}
		.center_div{
    margin: 0 auto;
    width:30% /* value of your choice which suits your alignment */
}
.color{
	color:#000000;
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
						<div class="alert alert-success"><center>WELCOME &nbsp;
                     <?php echo $row['fname']." ".$row['mname']. " ".$row['lname'];  ?> </center>
                     <p> <a href="" class="btn btn-info"><i class = "fa fa-eye"></i> View Detail</a>||<a href="user_update.php" class="btn btn-success"><i class = "fa fa-pencil"></i> Edit</a>||<a href="change_pass.php" class="btn btn-danger"><i class="fa fa-spinner "> Change Password</i></a></p>
						</div>
					<!-- </div> -->
					<div class="alert alert-success color">
					<div class="row">					
					 <div class="col-md-6 col-md-offset-8">
                        	<img src="uploads/<?php echo $row["picture"]?>"  height="120px" width="120px">
                        </div>
                    </div>
                    
						<div class="container center_div">
                       <div class="row">
					<div class="col-md-6">
						First Name: <strong><?php echo $row['fname']; ?></strong><hr>
					</div>
					<div class="col-md-6">
						Middle Name: <strong><?php echo $row['mname']; ?></strong><hr>
					</div>
					<div class="col-md-6">
						Last Name: <strong><?php echo $row['lname']; ?></strong><hr>
					</div>
					<div class="col-md-6">
						Gender: <strong><?php echo $row['gender']; ?></strong><hr>
					</div>
					<div class="col-md-6">
						Date Of Birth: <strong><?php echo $row['dob']; ?></strong><hr>
					</div>
                        <div class="col-md-6">
						Age: <strong><?php echo $row['age']; ?></strong><hr>
					</div>
					<div class="col-md-6">
						HOME TOWN: <strong><?php echo $row['home_town']; ?></strong><hr>
					</div>
					<div class="col-md-6">
						School: <strong><?php echo $row['school']; ?></strong><hr>
					</div>
					<div class="col-md-6">
					Educational Level: <strong><?php echo $row['level_education']; ?></strong><hr>
					</div>
					<div class="col-md-6">
					Username: <strong><?php echo $row['username']; ?></strong><hr>
					</div>
					
				</div>
				<div class="col-md-10">
					Date of Regitration: <strong><?php echo $row['reg_date']; ?></strong><hr>
					</div>
					   
						</div>
					</div>
						<br><br>
					</div>
						
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