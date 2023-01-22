<?php

$conn =mysqli_connect("localhost","u198469606_savexa","P^6qBMDCYq","u198469606_savexa");
// $conn = mysqli_connect("localhost", "root", "", "u198469606_savexa");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
date_default_timezone_set('Asia/Kolkata');
?>