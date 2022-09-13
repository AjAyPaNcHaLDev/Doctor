<?php

include "conn.php";
include "../session.php";
if(isset($_POST['SignIn'])){
    $Email= $_POST['Email'];
$Password= $_POST['Password'];
echo $type= $_POST['type'];
$table="admin";

if($type=="SALE-EXECUTIVE"){
    $table="sale_executive";
}
$stmt="SELECT * FROM $table WHERE email='$Email' AND password='$Password' limit 1 ";
$sql=mysqli_query($conn,$stmt);
if (mysqli_num_rows($sql)==0) {
    header("location:../login.php?msg=not registered");
}else{
	while($user=mysqli_fetch_assoc($sql)){
		if($type=="SALE-EXECUTIVE"){
			$table="sale_executive";
			$_SESSION['type']="SALE-EXECUTIVE";
			$_SESSION['eid']=$user['eid'];
		}else{
			$_SESSION['type']=$user['type'];
			$_SESSION['id']=$user['id'];
		}
        $_SESSION['session_status']=true;
		header("location:../Dashboard.php");
	}
}

}
?>