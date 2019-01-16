<?php
	require_once("../Create-table/connect.php");
	if(isset($_POST["username"], $_POST["email"], $_POST["fullname"], $_POST["password"]))
		{
			$username = mysqli_real_escape_string($conn, $_POST["username"]);
			$email = mysqli_real_escape_string($conn, $_POST["email"]);
			$phone = mysqli_real_escape_string($conn, $_POST["phone"]);
			$fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
			$password = md5($_POST["password"]);
			$query = "INSERT INTO account(username, email, phone, fullname, password) VALUES('$username', '$email', '$phone', '$fullname','$password')";
			if(mysqli_query($conn, $query))
			{
				echo 'Dữ liệu đã được thêm!';
			}else{
				echo mysqli_error($conn);
			}
		}
?>