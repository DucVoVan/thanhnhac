<?php 
	$id = $_POST['id'];
	require_once("../Create-table/connect.php");
	$sql = "SELECT * FROM `account` WHERE `id`=$id";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	echo '<h3 class="label-add">Thông tin học viên</h3>';
	echo "Họ tên: ".$row['fullname']."</br>";
	echo "Email: ".$row['email']."</br>";
	echo '<button class="my_popup_close btn btn-info">Đóng</button>';
?>