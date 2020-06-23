<?php
require '../config/db.php';
include('session.php');
session_destroy();
// header('location:../index.php'); 
header('location:../../index.php'); 
?>