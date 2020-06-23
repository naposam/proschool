<?php require 'config/db.php';?>
<?php include('controllers/session.php'); ?>
<?php $get_id = $_SESSION['id']; ?>
<?php
						//$query = mysqli_query($mysqli,"select *, year(curDate()) -year(DOB) as age from crusaders where id = '$get_id'")or die(mysqli_error($mysqli));
	$query=mysqli_query($conn,"SELECT * FROM admin where user_id ='$get_id'") or die(mysqli_error($conn));
	$row = mysqli_fetch_array($query);
     $user_id = $row['user_id'];
						?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assert/bootstrap-table.css">
	<link rel="stylesheet" type="text/css" href="assert/datepicker.css">
	<link rel="stylesheet" type="text/css" href="assert/datepicker3.css">
	<link rel="stylesheet" type="text/css" href="assert/style.css">
	<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<style type="text/css">
	.title{
	font-weight: bold !important;
    color:lightblue!important;
    box-shadow: 2px 2px 5px 6px;
	}
	
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Welcome Admin &nbsp;<span class="title"><?php echo $row['fname']." ".$row['lname'];  ?><span></a>
			</div>
				<div class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
   <!--  <li><a href="Print_class.php" >Print Class List</a></li>
      <li><a href="reg_user.php" >Add Records</a></li>
       <li><a href="exams_Sheet.php" >Exams</a></li> -->
      <li><a href="student_list.php" >List of Students</a></li>
      <!-- <li><a href="index.php">Logout</a></li> -->
      <li><a href="admin.php">Admin</a></li>
      <li><a href="chart.php">Statistics</a></li>
      <!-- <li><a href="chart.php">Chart</a></li> -->
      <li><a href="controllers/logout.php">Log Out</a></li>
     <!--  <li><a href="list_punished_student.php">Dossier</a></li> -->
    </ul>
    </div>			
		</div><!-- /.container-fluid -->
		
	</nav>	
			</div>
		</div>
	</div>


</body>
</html>