<?php
error_reporting(1);
session_start();
require 'config/db.php';
$errors=array();
$username="";
$email="";
// $fname="";
$lname="";
$dob="";
$gender="";
$hometown="";
//registering the user
if(isset($_POST['submit'])){
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $hometown=$_POST['hometown'];
    $school=$_POST['school'];
     $level_edu=$_POST['level_edu'];
      $username=$_POST['username'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirm-pass'];
    $target='uploads/'.$_FILES['image']['name'];
	  $image=$_FILES['image']['name'];
    // $target="uploads/".basename($_FILES['image']['name']);
if(empty($fname)) {
	$errors['fname']="First Name required";
}
if(empty($lname)) {
	$errors['lname']="Last Name required";
}
if(empty($dob)) {
	$errors['dob']="Your date of birth is required";
}
if(empty($gender)) {
	$errors['gender']="Your gender is required";
}
if(empty($hometown)) {
	$errors['hometown']="Your hometown is required";
}
if(empty($username)) {
	$errors['username']="Username required";
}
// if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
// $errors['email']="Your $email email address is in invalid";	
// }
// if(empty($email)) {
// 	$errors['email']="Email required";
// }
if(empty($password)){
	$errors['password']="Password required";
}
if(($password!==$confirmpassword)){
	$errors['password']="The two password do not match";
}

$emailQuery="SELECT * FROM reg_usertb WHERE username=? limit 1";
$stmt=$conn->prepare($emailQuery);
$stmt->bind_param('s', $username);
$stmt->execute();
$result=$stmt->get_result();
$usercount=$result->num_rows;
$stmt->close();
if ($usercount>0) {
	$errors['username']="username already exists";
}
if(count($errors)===0){
	 // $image=$_FILES['image']['name'];
	 if(move_uploaded_file($_FILES['image']['tmp_name'],$target )){ 
    $date=date("Y-m-d");
	mysqli_query($conn,"insert into reg_usertb(fname,mname,lname,gender,dob,home_town,school,level_education,picture,password,username,reg_date)VALUES('$fname','$mname','$lname','$gender','$dob','$hometown','$school','$level_edu','$image','$password','$username','$date')");
   // if(mysqli_query($conn,$sql)){
          header('location: login.php');
      }else{ echo '<script>
     alert("Unable to insert Records ");
     document.location= reg_user.php;
      </script>';  }  


   }
   else{
   	$errors['db_error']="Database error:failed to register";

   }

}



//login the userin

if(isset($_POST['login-btn'])){
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
  

if(empty($username)) {
	$errors['username']="Username required";
}

if(empty($password)){
	$errors['password']="Password required";
}
if(count($errors)===0) {

$sql="SELECT * FROM reg_usertb where username='$username' and password='$password' limit 1";
 $result = mysqli_query($conn,$sql)or die(mysqli_error());
		$row = mysqli_fetch_array($result);
		$num_row = mysqli_num_rows($result);
if($num_row>0){
$_SESSION['id']=$row['user_id'];
 header('location: profile.php');
}
$sq="SELECT * FROM admin where email='$username' and password='$password' limit 1";
 $dataSet = mysqli_query($conn,$sq)or die(mysqli_error());
    $row1 = mysqli_fetch_array($dataSet);
    $rowCount = mysqli_num_rows($dataSet);
if($rowCount>0){
$_SESSION['id']=$row1['user_id'];
 header('location: admin.php');
} 

}else
{

}
}
 ///changing userpassword

if(isset($_POST['change-pass'])){
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $confirmpassword=$_POST['confirm-pass'];

if(empty($username)) {
	$errors['username']="username required";
}

if(empty($password)){
	$errors['password']="Password required";
}
if(($password!==$confirmpassword)){
	$errors['password']="The two password do not match";
}
$emailCheck="SELECT * FROM `reg_usertb` WHERE `username`='$username' ";
$result=mysqli_query($conn,$emailCheck)or die(mysqli_error($conn));
$usercount=mysqli_num_rows($result);
if ($usercount==0) {
	$errors['username']="username does not exits";
}

if(count($errors)===0) {

$update="update `reg_usertb` set `password`='$password' where `username`='$username'";
if(mysqli_query($conn,$update)){
 header('location: login.php');
}else{
   	$errors['db_error']="Database error:failed to change password";

   }


}else{

}
}


?>