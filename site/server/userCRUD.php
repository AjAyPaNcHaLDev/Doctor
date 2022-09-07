<?php

include "conn.php";


if(isset($_POST["data"])){
    $arr=array();
    $arr=json_decode($_POST['data']);

}


?>