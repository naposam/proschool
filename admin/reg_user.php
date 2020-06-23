
<?php require_once 'controllers/authControllers.php';?>
<?php include 'includes/header.php';?>
<?php include 'config/forms_validation.php';?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 
input{
	margin: 5px !important;
}
select{
	margin: 5px !important;
}
.register{
    background: -webkit-linear-gradient(left, #3931af, #ff4045)!important;
    margin-top: 3%;
    padding: 3%;
    margin-left:6em !important;
    overflow-x: hidden;   
}

.register-right{
    background: -webkit-linear-gradient(left, #3931af, #ff4040)!important;;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}

</style>
</head>
<body style="background-image: url('images/colorful.jpg');">
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        
                        <h3 style="color:white;">Welcome</h3>
                        <p style="color:white;" >Fill in your correct details note that all fields are required fields on this registration page.Thank You!</p>
                        
                    </div>
                    <div class="col-md-9 register-right">

                       
                        <div class="row">
                           <div class="container">
                            <h3 class="text-center">Login</h3>
                            <?php if(count($errors)>0):?>
                            <div class="alert alert-danger">
                           <?php foreach($errors as $error):?>
                            <li><?php echo $error;?></li>
                           <?php endforeach; ?>
                         </div>
                          <?php endif;?>
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
             <!-- <img src="assets/img/logo2.png" alt=""/> -->
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign Up</h3>

                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="" enctype="multipart/form-data">
                            <fieldset>
                              <center>
                      
                      <img src="uploads/avatar-2.png" id="pic" style="width:100px; height: 100px; margin:0;padding: 0;"/>
                      
                      <input type="file" id="file" class="input-block-level"  name="image" placeholder="First Name" accept="image/*" onChange='readURL(this);' required/>
                      
                      
                       
                    
                    </center>
                                <div class="form-group">
                                    <input class="form-control" placeholder="First Name" name="fname" type="text"   autofocus value="<?php echo $fname;?>" onkeyup="letteronly(this)">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Middle Name" name="mname" type="text" value="<?php echo $mname;?>" onkeyup="letteronly(this)">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Last Name" name="lname" type="text"  autofocus value="<?php echo $lname;?>" onkeyup="letteronly(this)">
                                </div>
                                <div class="form-group">
                                	<label>DOB</label>
                                    <input class="form-control" placeholder="DOB" name="dob" type="date" value="<?php echo $dob;?>" />
                                </div>
                                
                                <div class="form-group">
                                    <label>Gender:
                                    <select name="gender" >
                                      <option selected="" disabled="" >Select Gender</option>
                                  <option >Male</option>
                                  <option >Female</option>
                                   </select>
                                   </label>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Home Town" name="hometown" type="text" value="<?php echo $hometown;?>" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter name of school" name="school" type="text" value="<?php echo $school;?>" >
                                </div>

                                <div class="form-group">
                                    <label>Level Education:
                                    <select name="level_edu">
                                       <option selected="" disabled="">Select Educational Level</option>
                                  <option>JHS</option>
                                  <option>SHS</option>
                                  <option >COLLEGE OF EDUCATION</option>
                                  <option >COLLEGE OF NURSING</option>
                                  <option >TECHNICAL UNIVERSITY</option>
                                  <option >UNIVERSIITY</option>
                                   </select>
                                   </label>
                                </div>
                                
                                <div class="form-group">
                                    <input class="form-control" placeholder="username" name="username" type="text" value="<?php echo $username;?>">
                                </div>
                              
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Re-enter password" name="confirm-pass" type="password" />
                                </div>
                                </div>
                                
                                <button type="submit" name="submit" class="btn  btn-success btn-block"><i class="fa fa-sign-in"></i>Submit</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
                         </div>

            </div>
        </div>
<script type="text/javascript">
              
              function readURL(input){
                if(input.files && input.files[0]){
                  var reader = new FileReader();

                  reader.onload = function(e){
                    $('#pic')
                    .attr('src',e.target.result);
                  };

                  reader.readAsDataURL(input.files[0]);
                }
              }

            </script>
       
</body>
</html>