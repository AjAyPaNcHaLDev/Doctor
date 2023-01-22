<?php 
error_reporting(0);
set_time_limit(0);
$ref = $_SERVER['HTTP_REFERER'];
$userhttp = $_SERVER["HTTP_USER_AGENT"];
include "session.php"; 
if (isset($_SESSION['session_status'])) {
   header("location:Dashboard.php");
} else {
   header("location:login.php");
} 
?>