<?php
// require 'config/db.php';
include 'head.php';
if(isset($_GET['view_id'])){
	$eid=$_GET['view_id'];

	$sql="select * from reg_usertb where user_id='$eid' ";
	 $result=mysqli_query($conn,$sql);

	 $row=mysqli_fetch_array($result);
	

	}

  ?>
  <head>
     <style type="text/css">
         @media print {
          .btn-print {
            display:none !important;
          }
      }
    .jumbotron{
      margin-top:50px;
    }
     </style>
    
  </head>
  <body style="background-image:url('images/5.jpg');">
   <br>
  <div class="container">
<div class="jumbotron">
   <!--<a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Print</a>-->
   <div class="row " style="float: right;">
   	<div class="col-lg-12">
   		
   	<strong><label class="col-lg-12 control-label" style=" font-weight: bold;"><img src="uploads/<?php echo $row["picture"]?>"  height="120px" width="120px" id="lbl"></label></strong>
</div>
   </div>
   <div class="flex-row" id="lbl"> 
<p class="label" style="color:black;font-family: Tahoma;font-weight: bold; font-size: 40px;">Full Name: <label style="color:darkorange;"> <?php echo $row["fname"]." ".$row["mname"]." " .$row["lname"];?></label></p>   

<br/> 
<div class="flex-row"> 
<p class="label" style="color:black;font-family: Tahoma;font-weight: bold; font-size: 40px;">Date Of Birth:  <label style="color:darkorange;"> <?php echo $row["dob"];?></label></p>   
</div>
<br> 
<div class="flex-row"> 
<p class="label" style="color:black;font-family: Tahoma;font-weight: bold; font-size: 40px;">Gender: <label style="color:darkorange;"> <?php echo $row["gender"];?></label></p>   
</div>
<br>
<div class="flex-row"> 
<p class="label" style="color:black;font-family: Tahoma;font-weight:bold ; font-size: 35px;">School :  <label style="color:darkorange;"> <?php echo $row["school"];?></label></p>   
</div> 
<br>
<div class="flex-row"> 
<p class="label" style="color:black;font-family: Tahoma;font-weight:bold ; font-size: 40px;">Level/form:  <label style="color:darkorange;"> <?php echo $row["level_education"];?></label></p>   
</div> 
<br>

<div class="flex-row"> 
<p class="label" style="color:black;font-family: Tahoma;font-weight:bold ; font-size: 40px;">Home Town:  <label style="color:darkorange;"> <?php echo $row["home_town"];?></label></p>   
</div> 
<br/>
<div class="flex-row"> 
<p class="label" style="color:black;font-family: Tahoma;font-weight:bold ; font-size: 40px;">Date of Registration:  <label style="color:darkorange;"> <?php echo $row["reg_date"];?></label></p>   
</div> 
   
</div>
</div>
</body>