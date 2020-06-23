<?php include 'head.php';
// require 'config/db.php';

?>
<br/>
<br/>
<head>
   <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" />
     <script src="sm/lumino.glyphs.js"></script>
</head>
<body style="background:url(images/colorful.jpg);">

  <br><br><br><br>
<div class="row ">
  
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>MALES</h4>
            <?php 

$sql = "SELECT gender,count(*) as number from reg_usertb where gender='Male'";
$query =mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
?>
            <div class="easypiechart" id="easypiechart-blue" data-percent="<?php echo $row['number'] ;?>" ><span class="percent"><?php echo $row['number'] ;?>%</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>FEMALE</h4>
            <?php 

$sql = "SELECT gender,count(*) as number from reg_usertb where gender='Female'";
$query =mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
//$results=$query->fetchAll(SQLITE3_ASSOC);
//$unreadcount=$query->rowCount();?>
            <div class="easypiechart" id="easypiechart-orange" data-percent="<?php echo $row['number'] ;?>" ><span class="percent"><?php echo $row['number'] ;?>%</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>STUDENTS</h4>
 <?php 

$sql = "SELECT count(*) as number from reg_usertb ";
$query =mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
//$results=$query->fetchAll(SQLITE3_ASSOC);
//$unreadcount=$query->rowCount();?>
            <div class="easypiechart" id="easypiechart-teal" data-percent="<?php echo $row['number'] ;?>" ><span class="percent"><?php echo $row['number'] ;?>%</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <?php 

$sql = "SELECT count(*) as number from admin ";
$query =mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
//$results=$query->fetchAll(SQLITE3_ASSOC);
//$unreadcount=$query->rowCount();?>
            <h4>ADMIN</h4>
            <div class="easypiechart" id="easypiechart-red" data-percent="<?php echo $row['number'] ;?>" ><span class="percent"><?php echo $row['number'] ;?>%</span>
            </div>
          </div>
        </div>
      </div>
    </div><!--row end-->

<script src="sm/jquery-3.1.1.min.js"></script>
 <script src="sm/bootstrap.min.js"></script>
  <script src="sm/chart.min.js"></script>
  <script src="sm/chart-data.js"></script>
  <script src="sm/easypiechart.js"></script>
  <script src="sm/easypiechart-data.js"></script>
  <script src="sm/bootstrap-datepicker.js"></script>
<?php include "footer.php";?>
        </body>