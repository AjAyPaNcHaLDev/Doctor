<?php
include "conn.php";
include "../session.php";
if (isset($_POST['SignIn'])) {
	$user = $_POST['user'];
	$Password = $_POST['Password'];
	$type = $_POST['type'];


	if ($type == "2") {
		$table = "sale_executive";
	} else if ($type == "1") {
		$table = "admin";
	} else {
		header("location:../login.php?msg=Something went wrong!.");
		return;
	}



	$stmt = "SELECT * FROM $table WHERE (email='$user' OR phone ='$user')  AND password='$Password' limit 1 ";
	$sql = mysqli_query($conn, $stmt);
	if (mysqli_num_rows($sql) == 0) {
		$_SESSION['session_status'] = false;
		header("location:../login.php?msg=not registered!.");
		return;
	} else {
		while ($user = mysqli_fetch_assoc($sql)) {
			$status = $user['status'];
			if ($status == "inactive") {
				$_SESSION['session_status'] = false;
				header("location:../login.php?msg=Please activate your account from Admin!.");
			} else if ($status == "active") {
				$_SESSION['name'] = $user['name'];
				$_SESSION['email'] = $user['email'];
				$_SESSION['phone'] = $user['phone'];
				$_SESSION['session_status'] = true;
				if ($type == "2") { 
					$_SESSION['type'] = "5";
					$_SESSION['eid'] = $user['eid'];
				} else {
					$_SESSION['type'] = $user['type'];
					$_SESSION['id'] = $user['id'];
					$_SESSION['parentId'] = $user['parentId'];
				} 
				header("location:../Dashboard.php"); 
			} else { 
				$_SESSION['session_status'] = false;
				header("location:../login.php?msg=something went wrong!.");
				return;
			}


		}
	}
}
?>