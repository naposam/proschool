
<?php
// require 'config/db.php';
if(isset($_GET['del'])){
 	$del=$_GET['del'];
 mysqli_query($conn,"DELETE FROM reg_usertb WHERE user_id='$del'");

 echo "<div class='alert alert-success'>Success! Data deleted sucessfully.</div>";

 echo "<script>document.location='student_list.php'</script>";
	
 }
 


?>