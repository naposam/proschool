<?php
// include 'head.php';
include 'admin.php';
?>
<!--This pages has been use---->
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
</head>

    <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mymodal">Add user</button>-->
    <?php
     // require 'config/db.php';
                if(isset($_GET['edit'])){ 
                $edit=$_GET['edit'];               
                $sql="SELECT * FROM admin where user_id='$edit'";
                $result=mysqli_query($conn,$sql);
               $row=mysqli_fetch_array($result);
                  
   }
                ?>            
     <br><br><br>                           
  <div class="container-fluid">
 <div class="col-md-8">
<div class="jumbotron">
	 
<div class="flex-row"> 
<p class="label" style="color:black;font-family: Tahoma;font-weight: bold; font-size: 40px;">Full Name: <label style="color:darkorange;"> <?php echo $row["fname"]." ". $row["lname"];?></label></p>   
</div>
<br/> 
<div class="flex-row"> 
<p class="label" style="color:black;font-family: Tahoma;font-weight: bold; font-size: 40px;">Email:  <label style="color:darkorange;"> <?php echo $row["email"];?></label></p>   
</div>
<br/> 
<div class="flex-row"> 
<p class="label" style="color:black;font-family: Tahoma;font-weight: bold; font-size: 40px;">Date Of Reg: <label style="color:darkorange;"> <?php echo $row['reg_date'];?></label></p>   
</div>
<br/>
<div class="flex-row"> 
<p class="label" style="color:black;font-family: Tahoma;font-weight:bold ; font-size: 40px;">Password:  <label style="color:darkorange;"> *********</label></p>   
</div>        
</div>
</div>
</div>
    
                

     