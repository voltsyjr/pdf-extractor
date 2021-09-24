<?php
include "config.php";
session_start();
$_SESSION['ip']=$_GET['zt'];
// echo $_SESSION['ip'];
// $_SESSION['user_id']=$_GET['mt'];
// $_SESSION['user_role']=$_GET['kt'];
header("Location: {$hostname}/index.php");

?>