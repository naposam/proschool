<?php
error_reporting(0);
 // require 'config/db.php';
include 'head.php';

if(isset($_GET['eid'])){
	$eid=$_GET['eid'];

	$sql="select * from reg_usertb where user_id='$eid' ";
	 $result=mysqli_query($conn,$sql);

	 $row=mysqli_fetch_array($result);

 if(isset($_REQUEST["submit"])){
 $firstname=$_REQUEST['fname'];
  $Mname=$_REQUEST['mname'];
  $lastname=$_REQUEST['lname'];
  $dob=$_REQUEST['dob'];
  $gender=$_REQUEST['gender'];
  $level= $_REQUEST['level'];
  $home=$_REQUEST['hometown'];
  $school=$_REQUEST['school'];
//  if(isset($_FILES['pic']['name']) && ($_FILES['pic']['name']!="")){
//  $size=$_FILES['pic']['size'];
//  $temp=$_FILES['pic']['tmp_name'];
//  $type=$_FILES['pic']['type'];
//  $photo_name=$_FILES['pic']['name'];
//  unlink("uploads/$old_image");
//  move_uploaded_file( $temp,"uploads/$photo_name");
// }else{
// 	$photo_name=$old_image;
// }
  mysqli_query($conn,"update reg_usertb set fname='$firstname',mname='$Mname',lname='$lastname',dob='$dob',gender='$gender',level_education='$level',home_town='$home',school='$school' where user_id='$eid'");
   echo"<script type='text/javascript'>alert('Update successfull!');
	  document.location='student_list.php'</script>"; 
  
  }
 }
?>
<head >
	<style type="text/css">
   /*body{
    background-image:url('images/edit.jpg');
    background-size:cover;
    background-repeat: no-repeat;
   } */
  </style>
</head>
<body style="background-image:url('images/34.jpg');">
	<div class="container">
 <div class="jumbotron">
      <div id="picture" class="register-left" > 
	   <img src="uploads/<?php if(isset($eid)){ echo $row["picture"];}?>" >
      </div>
	<div class="panel">
		<div class="panel-body">
	
<form method="POST" action="" enctype="multipart/form-data" role="form">
	       <div class="form-group">
        <label>First Name</label>
   <input type="text" name="fname" class="form-control" value="<?php if(isset($eid)){ echo $row["fname"];}?>">
</div>
<div class="form-group">
        <label>Middle Name</label>
<input type="text" name="mname" class="form-control" value="<?php if(isset($eid)){echo $row["mname"];}?>">
</div>
<div class="form-group">
        <label>Last Name</label>
<input type="text" name="lname" class="form-control" value="<?php if(isset($eid)){echo $row["lname"];}?>" >
</div>
<div class="form-group">
        <label>Date OF Birth</label>
<input type="date" name="dob" class="form-control" value="<?php if(isset($eid)){echo $row["dob"];}?>">
</div>
<div class="form-group">
        <label>Gender</label>
<input type="text" name="gender" class="form-control" value="<?php if(isset($eid)){echo $row["gender"];}?>" readonly>
</div>
<div class="form-group">
        <label>Home Town</label>
<input type="text" name="hometown" class="form-control" value="<?php if(isset($eid)){echo $row["home_town"];}?>">
</div>
<div class="form-group">
        <label> School </label>
<input type="text" name="school" class="form-control" value="<?php if(isset($eid)){echo $row["school"];}?>">
</div>
<div class="form-group">
        <label>Level Education:</label>
<input type="text" name="level" class="form-control" value="<?php if(isset($eid)){echo $row["level_education"];}?>">
</div>
<div class="form-group">
<input type="submit" name="submit" value="Update" class="btn btn-primary">
</div>
</form>
</div>
</div>
</div>
</div>
</body>