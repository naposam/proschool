<?php
  require 'config/db.php';
if(isset($_GET['id'])){
 	$del=$_GET['id'];
 	mysqli_query($conn,"DELETE FROM admin WHERE user_id='$del'");
 echo "<div class='alert alert-success'>Success! Data deleted sucessfully.</div>";

 echo "<script>document.location='newUser.php'</script>";
	
 }
 


?>