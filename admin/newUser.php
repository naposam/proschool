<?php
// include 'head.php';
include 'admin.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
  <style type="text/css">
         @media print {
          .btn-print {
            display:none !important;
          }
      }
     </style>
</head>
<body >
    <br><br><br>
    <div class="container" style="position: absolute; margin-left: 8em;">

        <div class="row">
        
            <div class="col-lg-12">
                <div class="panel panel-default">
          
                    <div class="panel-body">
            
                        <table class="table table-striped">
                            <thead>
                                <tr class="info">
                                    
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                               // require 'config/db.php';
                            $sql="SELECT * FROM admin";
                             $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result)){
                       $id=$row['user_id'];
                       $fname=$row['fname'];
                       $lname=$row['lname'];
                       $email=$row['email'];
                       $password=$row['password'];
               
                                ?>
                               <tr>
                
                <td><?php echo $row['fname'];?></td>
                 <td><?php echo $row['lname'];?></td>
                 <td><?php echo $row['email'];?></td>
                <td>********</td>
     <td><a href="view_users_modal.php?edit=<?php echo $row["user_id"];?>" class="btn btn-success btn-xs view_data"><i class = "fa fa-eye"></i> View</a> | <a href="newUser_edit.php?edit_id=<?php echo $row["user_id"]?> " class="btn btn-warning btn-xs edit_data " ><i class = "fa fa-pencil"></i> Edit</a> | <a href="del.php?id=<?php echo $id;?>" class="btn btn-danger btn-xs del_data" onclick="return confirm('Are you sure you want to delete this user?');"><i class = "fa fa-trash"></i> Del</a></td>
                
                                   
                               </tr> 
                               <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div><!-- panel -->
            </div><!-- panel -->
        </div>
</div>



<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script src="css/jquery.js"></script>
<script src="css/jQuery-2.1.4.min.js"></script>
<script src="css/jquery.dataTables.min.js"></script>
<script src="css/dataTables.bootstrap.min.js"></script>
<script>
$(function (){
      $(".table").DataTable();
    });
    </script>
</body>
</html>