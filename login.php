<?php require_once 'controllers/authControllers.php';?>
<?php include ('includes/header.php');?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    
   
    <!-- ============ Add custom CSS here ============ -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/my_style.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/font-awesome.css" rel="stylesheet" type="text/css" />
     <link rel="stylesheet" type="text/css" href="css/animate.css" media="all">
    
    
</head>
<body>
<?php include ('includes/banner.php');?>
    <div class="container">
            <div class="row">
                <div class="Absolute-Center is-Responsive">
                    <div class="col-sm-12 col-lg-12 col-md-10">
                        <div class="registrationform">
                            <div class="form-horizontal">
                               <form method="post"> 
                                    <legend style="text-align:center;">Login</legend>
                                    <?php if(count($errors)>0):?>
                                  <div class="alert alert-danger">
                                    <button class='close' data-dismiss='alert'>&times;</button>
                                   <?php foreach($errors as $error):?>
                                  <li><?php echo $error;?></li>
                                    <?php endforeach; ?>

                                   </div>
                                <?php endif;?>

                                <div class="form-group"  id="divEmail">
                                        <Label ID="Label1"  Text="username:" CssClass="col-lg-2 control-label"></Label>
                                        <div class="col-md-6 col-md-offset-3" >
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input  class="form-control" type="text"  name="username"  placeholder="username" CssClass="form-control"  />
                                            </div>
                                        </div>                                       
                                    </div>

                                    <div class="form-group"  id="divPassword">                                       
                                        <Label ID="Label2"  Text="Password:" CssClass="col-lg-2 control-label"></Label>
                                        <div class="col-md-6 col-md-offset-3">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                 <input class="form-control" type="password" name="password"   placeholder="Password" CssClass="form-control"/>
                                                     
                                            </div>
                                           
                                        </div>  
                                    </div>
                               
                                    
                                
                                    <div class="form-group" style="margin-top:10px; margin-right:-50px">
                                        <div class=" col-md-offset-4">
                                            <button type="submit" name="login-btn" class="btn btn-primary"><i class="animated flash  infinite fa fa-arrow-up"> </i>Login</button>
                                            <a href="reg_user.php" name="btnRegister" class="btn btn-warning"><i class="fa fa-sign-in">Password</i></a>
                                            <div class="col-md-offset-1" style="margin-top:10px">
                                              
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script src="dist/js/jquery-2.1.4.js" type="text/javascript"></script>
        <script src="dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="dist/js/jquery.backstretch.js" type="text/javascript"></script>
        <script type="text/javascript">
            'use strict';

            /* ========================== */
            /* ::::::: Backstrech ::::::: */
            /* ========================== */
            // You may also attach Backstretch to a block-level element
            $.backstretch(
            [
                "images/0005.jpg"
                //"img/44.jpg",
                //"img/34.jpg",
                //"img/images.jpg"
            ],

            {
                duration: 4000,
                fade: 1500
            }
        );
        </script>
</body>
</html>