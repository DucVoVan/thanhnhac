<?php 
	$username = isset($_POST['username'])? $_POST['username']: '';
	$email = isset($_POST['email'])? $_POST['email']: '';
	$phone = isset($_POST['phone'])? $_POST['phone']: '';
	$phone = (int)$phone;
	require_once("../Create-table/connect.php");
	if(!empty($username)){
		$sql1 = "SELECT * FROM `account` WHERE `username`='$username'";
		$result = mysqli_query($conn, $sql1);
		$row = mysqli_fetch_assoc($result);
		if(!empty($row)){
			echo "Tên đăng nhập đã được sử dụng";
		}
	}elseif(!empty($email)){
		$sql2 = "SELECT * FROM `account` WHERE `email`='$email'";
		$result = mysqli_query($conn, $sql2);
		$row = mysqli_fetch_assoc($result);
		if(!empty($row)){
			echo "Email đã được sử dụng";
		}
	}elseif(!empty($phone)){
		$sql3 = "SELECT * FROM `account` WHERE `phone`='$phone'";
		$result = mysqli_query($conn, $sql3);
		$row = mysqli_fetch_assoc($result);
		if(!empty($row)){
			echo "Số điện thoại đã được sử dụng";
		}
	}
?>