<?php
   require 'config/db.php';
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$pass=$_POST['password'];
 
 $security_key_check_command = "SELECT * FROM admin WHERE email = '$email' limit 1";
      $execute_check_command =mysqli_query($conn,$security_key_check_command);
    $counter=mysqli_num_rows($execute_check_command); 
       if($counter==0){
        $date=date("Y-m-d");
 mysqli_query($conn,"INSERT INTO admin(fname,lname,email,password,reg_date) VALUES('$fname','$lname','$email','$pass','$date')");

}elseif($counter>0){
        echo "<script>alert('Sorry,Your email is already registered with different User');
        
        </script>";
      }
?>