<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Đăng kí</title>
</head>
<body>
	<h1>Đăng kí</h1>
	<form action="wp-content/plugins/thanhnhac-login/Controller-client/User_Controller.php" method="POST">
		<label for="username">Tên đăng nhập</label><br>
		<input type="text" name="username" id="username"><br>
		<label for="password">Password</label><br>
		<input type="password" name="password" id="password"><br>
		<label for="email">Email</label><br>
		<input type="email" name="email" id="email"><br>
		<label for="fullname">Fullname</label><br>
		<input type="fullname" name="fullname" id="fullname"><br>
		<input type="hidden" name="controller" id="controller" value="User_Controller">
		<input type="hidden" name="action" id="action" value="register">
		<input type="submit" name="submit_login" value="Đăng Kí">
	</form>

	<?php 
		// $controller = 'Register';
		// $action = 'register';
		// require_once "../Controller-client/Register.php";
		// $run = new $controller();
		// $run->$action();
	?>

</body>
</html>