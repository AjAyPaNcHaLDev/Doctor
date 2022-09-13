<?php include "session.php"


if(isset($_SESSION['session_status'])){
header("location:Dashboard.php");
}


?>