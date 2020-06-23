<?php 

include 'head.php';?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <style type="text/css">
    body{
  font-family:'lato' ;

}
#clock{
  font-weight: 300;
  font-size: 100px;
   text-align: center;
   color:white;
}
#hex-color{
  color:white;
}
  </style>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->
<script type="text/javascript" src="css/jquery.min.js"></script>
<script type="text/javascript" src="css/bootstrap.min.js"></script>
<script type="text/javascript" src="css/jquery.js"></script>
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	
<div class="container">
	<div class="row" style="position:fixed;clear: both; margin-left: 300px; margin-top: 20em;">
	<h1 id="clock">00:00.00</h1>
	<p id="hex-color">#000000</p>
</div>
	<div class="row">
		<div class="col-md-12">
	<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mymodal">Add user</button>-->

	<div class="modal fade" id="mymodal">
		<div class="modal-dialog">
			<div class="modal-content">
				<form role="form" method="POST">
				<div class="modal-header">
			<button type="button" class="close" data-dismiss=
			"modal">&times;</button>
			     <h1>Enter Your Details</h1>
				</div>
				<div class="modal-body" >
                 <div class="form-group">
                   <label for="name">First Name</label>
                 <input type="text" class="form-control" name="fname"
                   id="fname"      placeholder="First Name">
                   <label id="lblfname" style="color:red;"></label>
                    </div>
                 <div class="form-group">
                   <label for="name">Last Name</label>
                 <input type="text" class="form-control" name="lname"
                         placeholder="last Name" id="lname">
                     <label id="lbllname" style="color:red;"></label>
                    </div>
                    <div class="form-group">
                   <label for="name">email</label>
                 <input type="email" class="form-control" name="email"
                         placeholder="Please Enter Your" id="email">
                         <label id="lblemail" style="color:red;"></label>
                    </div>
                    <div class="form-group">
                   <label for="name">password</label>
                 <input type="password" class="form-control" name="password" id="password">
                    <label id="lblpass" style="color:red;"></label>
                    </div>
                 
				</div>
				<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss=
			"modal">close</button>
			<button type="button" class=" btn btn-primary" id="save">Save</button>
				</div>
				</form>
			</div>

		</div>
	</div>
	</div>
</div>
</div>

<div class="col-lg-3"  style="position: relative;">
	<div style="width: 50px; height: 50px"></div>

   <ul class="navbar navbar-default nav" style="height:350px;">
  <li><a href="" class="btn btn-default"><i class="glyphicon glyphicon-dashboard "></i>Dashboard</a></li>
  <li><a href="" data-toggle="modal" data-target="#mymodal"><i class="glyphicon glyphicon-plus "></i>Add Admin</a></li>
   <!-- <li><a href="student_list.php"><i class="glyphicon glyphicon-user "></i>List of Student</a></li>
   <li><a href="chart.php"><i class="glyphicon glyphicon-list"></i>Statistics</a></li>
 -->
  <li><a href="newUser.php"><span class="glyphicon glyphicon-user"><span>View Admins</a></li>
<!-- <li><a href="Student_count.php"><span class="glyphicon glyphicon-user"><span>Student Count </a></li>
  <li><a href="classCount.php"><span class="glyphicon glyphicon-user"><span>Class Count </a></li> -->
  
  
  
</ul>
	</div>
  
<script >
	$(document).ready(function(){
     
         $(document).on('click','#save',function(){
         	var fname= $('#fname').val();
         	var lname= $('#lname').val();
         	var email= $('#email').val();
         	var password= $('#password').val();

         	if(fname== ""){
                 $('#lblfname').html("Enter First Name");
         	}else if(lname== ""){
         		$('#lbllname').html("Enter Last Name");
         	}else if(email== ""){
         		$('#lblemail').html("Enter Email");
         	}else if(password== ""){
         		$('#lblpass').html("Enter password");
         	}else{
         		$.ajax({
         			url:"addData.php",
         			type:"post",
         			data:{fname:fname,lname:lname,email:email,password:password},
         			success:function(data){
                       alert("Record Inserted Successful");
                       $("#mymodal").modal('hide');
                       location.reload();
         			}
         		});
         	}
         });
	});
</script>
<script type="text/javascript" src="css/admin.js"></script>

</body>
</html>


<!-- i will used for editting the user
data-toggle="modal" data-target="#NewModal"


<script >
	$(document).ready(function(){ 

       $('#insert_data').on('save', function(event){
         event.preventDefault();
         if($('#fname').val()== '')
         {
         	alert("First name is required");
         }
         else if($('#lname').val()== '')
         {
         	alert("last Name is required");
         }
         else if($('#email').val()== '')
         {
         	alert("Email is required");
         }
         else if($('#pass').val()== '')
         {
         	alert("Password is required");
         }else{
         	$.ajax({
            Url:"addData.php",
            method:"POST",
            data:$('#insert_data').serialize(),
            success:function(data){
            	$('#insert_data')[0].reset();
            	$('#mymodal').modal('hide');
            }
         	});
         }
       }); 
	});
</script>


-->