<?php include('includes/banner.php'); ?>
<?php require 'config/db.php';?>
<?php include('controllers/session.php'); ?>
<?php $get_id = $_SESSION['id']; ?>
<head>
	<style type="text/css">
		.jumbotron{
			margin-top: 50px;
		}
	</style>
</head>
    <body>
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
						<div class="jumbotron">
						<div class="alert alert-success"><center>WELCOME &nbsp;
                     <?php echo $row['fname']." ".$row['mname']. " ".$row['lname']." You are ".$row['age']." Years old";  ?> </center>
                     <p> <a href="view_detaills.php" class="btn btn-info"><i class = "fa fa-eye"></i> View Detail</a>||<a href="user_update.php" class="btn btn-success"><i class = "fa fa-pencil"></i> Edit</a>||<a href="change_pass.php" class="btn btn-danger"><i class="fa fa-spinner "> Change Password</i></a></p>
						</div>
					</div>
						<div class="span6">
						<!-- Name: <strong><?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?></strong><hr>
						Gender: <strong><?php echo $row['gender']; ?></strong><hr>
						Date Of Birth: <strong><?php echo $row['dob']; ?></strong><hr>
						Age: <strong><?php echo $row['age']; ?></strong><hr>
						HOME TOWN: <strong><?php echo $row['home_town']; ?></strong><hr> -->
					   <!--   EMAIL: <strong><?php echo $row['email']; ?></strong><hr> -->
						</div>
						<br><br>
					</div>
						<!-- <div class="span5">
						
						Email Address: <strong><?php echo $row['email_address']; ?></strong><hr>
						
						Residential Address: <strong><?php echo $row['residential_address']; ?></strong><hr>
					     Region: <strong><?php echo $region; ?></strong><hr>
					     Office title: <strong><?php echo $row['office_title']; ?></strong><hr>
					     Office Level: <strong><?php echo $row['office_level']; ?></strong><hr>
					     Date Join: <strong><?php echo $row['date_joined']; ?></strong><hr>
					     Date Initiated: <strong><?php echo $row['date_initiated']; ?></strong><hr>
						</div>
                <div class="span12"> -->
	                 <hr>
			<!-- 			<div class="alert alert-success">OTHER DETAILS</div>
	        <table cellpadding="0" cellspacing="0" border="0" class="table" id="">
		     <thead>
		     <tr>
					<th>DIOCESE</th>
					<th>DEANERY</th>
					<th>PARISH</th>
					<th>UNIT</th>
					<th>SECTION</th>
					<th class="empty"></th>
		</tr>
		</thead>
		<tbody>

		<tr>
		<td><?php echo $row['diocese_name']; ?></td> 
		<td><?php echo $row['deanery_name']; ?></td> 
		<td><?php echo $row['parish_name']; ?></td> 
		<td><?php echo $row['unit_name']; ?></td> 
		<td><?php echo $section; ?></td> 
		</tr>
   
	
		</tbody>
	</table> -->

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