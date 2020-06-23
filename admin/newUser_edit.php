<?php
// include 'head.php';
include 'admin.php';

?>

<?php
// require 'config/db.php';
if(isset($_GET['edit_id'])){
	$edit_id=$_GET['edit_id'];

	$fetch="SELECT * FROM admin where user_id='$edit_id'";
	 $result=mysqli_query($conn,$fetch);

	 $row=mysqli_fetch_array($result);

	 if(isset($_REQUEST['update'])){
	 	$pass=$_REQUEST['pass_con'];
	 	$pass1=$_REQUEST['pass_cng'];
	 	if(!empty($pass) && !empty($pass1)){
	 		if($pass==$pass1){

          mysqli_query($conn,"UPDATE admin SET password='$pass' WHERE user_id='$edit_id' ");
   echo"<script>alert('Update successfull!');
	  document.location='newUser.php'</script>"; 
       
	 		}else{
	 			echo"<script>
                     alert('Passwords do not much');
	 			</script>";
	 		}
	 	}else{
	 		echo'Enter your new password to change';
	 	}
	 }

	}
	 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body >
	<br><br><br>
	<div class="container" style="position: absolute; margin-left: 10em;">

		<div class="row">
			<form class="form-horizontal" action="" method="POST">
				<div class="form-group" style="margin-left: 80px;">
                   <label class="col-lg-2 control-label"></label>
                   <div class="col-lg-4">
                 <input type="hidden" class="form-control" name="id"
                     readonly="" value="<?php if(isset($edit_id)){echo $row["user_id"];}?>">
                    </div>
                </div>
 		 <div class="form-group" style="margin-left: 80px;">
 			<label class="col-lg-2 control-label"></label>
 			<div class="col-lg-4">
 				<input type="email" class="form-control" name="email" value="<?php if(isset($edit_id)){echo $row["email"];}?>" readonly="" >
 			</div>
 			</div>
 			<div class="form-group" style="margin-left: 80px;">
 			<label class="col-lg-2 control-label"></label>
 			<div class="col-lg-4">
 				<input type="password" class="form-control" name="pass_con" placeholder="Enter new password ">
 			</div>
 		</div>
 		<div class="form-group" style="margin-left: 80px;">
 			<label class="col-lg-2 control-label"></label>
 			<div class="col-lg-4">
 				<input type="password" class="form-control" name="pass_cng" placeholder="Enter confirm password ">
 			</div>
 		</div>
 			<div class="form-group" style="margin-left: 400px;">
 			<div class="col-lg-4">
 			<button name="update" class="btn btn-info">Update</button>
 		</div>
 		</div>
 	</form>
 		
			
		</div>
</div>

</body>
</html>