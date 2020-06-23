<?php include 'head.php';


?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body style="background:url(images/34.jpg);">
	<br><br><br><br>
	

<div class="container">
<div class="row">
	<div clas="col-md-8">
		<div class="jumbotron">
	<table class="table table-stripped col-md-8">
		<thead >
			<tr class="success">
			<th >ID</th>
			<th >First Name</th>
			<th >Last Name</th>
			<th >Gender</th>
			<th >Username</th>
			<th >Name of School</th>
			<th >Picture</th>
			<th >Action</th>
			</tr>
		</thead>
		<tbody>
<?php
// require 'config/db.php';
$sql="select * from reg_usertb ";
     $result=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_array($result)){
      	?>
  <tr>
    <td><?php echo $row["user_id"]?></td>
     <td><?php echo $row["fname"]?></td>
     <td><?php echo $row["lname"]?></td>  
     <td><?php echo $row["gender"]?></td> 
     <td><?php echo $row["username"]?></td> 
     <td><?php echo $row["school"]?></td> 
     
     <td><img src="uploads/<?php echo $row["picture"]?>"  height="120px" width="120px"></td> 
     <td><a href="edit.php?eid=<?php echo $row["user_id"]?> " class='btn btn-success btn-xs edit-data'><i class = "fa fa-pencil"></i> Edit</a>|<a href="selectModal.php?view_id=<?php echo $row["user_id"]?>" class="btn btn-warning btn-xs view_data"><i class = "fa fa-eye"></i> View</a>|<a href="del_student.php?del=<?php echo $row["user_id"]?>" class="btn btn-danger btn-xs del_data" onclick="return confirm('Are you sure you want to delete this Student?');"><i class = "fa fa-trash"></i> Del</a></td>  
     </tr>

       
<?php
      }

   
    ?>
    </tbody>
	</table>
</div>
</div>
</div>
</div>
<script src="css/jquery.js"></script>
<script src="css/jQuery-2.1.4.min.js"></script>
<script src="css/jquery.dataTables.min.js"></script>
<script src="css/dataTables.bootstrap.min.js"></script>
<script >
	$(function (){
      $(".table").DataTable();
	});
	
</script>
</body>
</html>
