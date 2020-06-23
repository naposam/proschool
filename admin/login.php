

<?php require_once 'controllers/authControllers.php';?>
<?php include 'includes/header.php';?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="login.css">
	
</head>
<body>
  <div class="container">
<div class="row">

<div class="modal-dialog text-center ">
	<div class="col-sm-8 main-section col-md-offset-3" >
		<div class="modal-content">
			<div class="col-12 user-img">
			<img src="images/profile-image.png">
			</div>	
			<form class="col-12" method="post" action="login.php">
        <h3 class="text-center">Login</h3>
        <?php if(count($errors)>0):?>
          <div class="alert alert-danger">
           <?php foreach($errors as $error):?>
          <li><?php echo $error;?></li>
            <?php endforeach; ?>
           </div>
        <?php endif;?>
				<div class="form-group" >
					
					<input type="text" name="username" class="form-control" placeholder="Enter your Email or username" value="<?php echo $username;?>">
				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder="Enter your password" id="password">
				</div>
				 <p><label for="togglePassword" style=" padding: 0;margin: 0;">show password
                     <input type="checkbox" id="togglePassword" style="margin:0;padding: 0;"></label></p>
				<button  type="submit"class="btn btn-primary form-control" name="login-btn"><i class="fa fa-sign-in"></i>Login</button>
				<div class="col-12 forgot"> 
          <a href="forpass.php">Forgot Password?</a>
          <p class="text-center">Not Yet a member?<a href="reg_user.php">Sign Up</a></p>
          <?php include 'footer.php';?>

				</div>
			</form>
		</div>
    <script src="config/app.js "></script>

	</div>

</div>
</div>

</div>
</body>
</html>