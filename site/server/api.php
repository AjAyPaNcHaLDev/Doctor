<?php
include "conn.php";


 function getAdminTable()
{
     $sql = "SELECT * FROM admin  ORDER BY id DESC";
$myarray=array();
$data=mysqli_query($GLOBALS['conn'],$sql);
while($row=mysqli_fetch_assoc($data)){
    $myarray[]=($row);
}

print_r(json_encode($myarray));

}

if(isset($_POST["callApi"])){

    getAdminTable();

}

function getExecutiveTable()
{
     $sql = "SELECT * FROM sale_executive";
$myarray=array();
$data=mysqli_query($GLOBALS['conn'],$sql);
while($row=mysqli_fetch_assoc($data)){
    $myarray[]=($row);
}

return (json_encode($myarray));

}


if(isset($_POST["callApi2"])){

    getExecutiveTable();

}

?>