<?php include ('includes/header.php');?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<style>
  /**************STYLES ONLY FOR DEMO PAGE**************/
  @import url(https://fonts.googleapis.com/css?family=Bree+Serif);
  body {
    background:#ebebeb;
  } 
  
   .carousel-inner {

max-height: 700px;
   }
   .carousel-inner img {

max-height: 700px;

}


   
</style>
<body>
    <!-- navigation -->
    <?php include ('includes/navbar.php');?>
      <!-- site header -->

   <div class="site-header w-100">
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="images/p021.jpg" alt="first slide" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>WORKS</h5>
          <p>Providing educational material for the future leaders</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="images/p014.jpg" alt="second slide" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>WORKS</h5>
          <p>Providing educational material for the future leaders</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="images/p023.jpg" alt="third slide" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>WORKS</h5>
          <p>Providing educational material for the future leaders</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="images/p011.jpg" alt="four slide" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>WORKS</h5>
          <p>Providing educational material for the future leaders</p>
        </div>
    </div>

</div>


    </div>
   </div>

<div class="img-layer">
<div class="home-content">
    <h2>ADOM ZOE</h2>
    <p>FOUNDATION</p>
    <button type="button" class="btn btn-dark">ADMISSIONS</button>
</div>
</div>
<!-- card -->
<?php include ('includes/card.php');?>

<!-- Gallery -->
<?php include ('includes/Gallery.php');?>
<!-- end Gallery -->


<!-- footer -->
<?php include ('includes/footer.php');?>
</body>
</html>