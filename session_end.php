<?php
include "config.php";

session_start();

session_unset();

session_destroy();
// session_start();
// $_SESSION['username']='a';
// $_SESSION['user_id']=10;
// $_SESSION['user_role']=1;
header("Location: {$hostname}/index.php");
?>
<!-- //deleting data from session to logout user  -->
