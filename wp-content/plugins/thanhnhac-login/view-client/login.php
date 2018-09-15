<?php 
	add_shortcode('shortcode1', 'abc');
	function abc(){

	?>
	<form action="wp-content/plugins/thanhnhac-login/Controller-client/User_Controller.php" method="POST">
		<label for="username">Tên đăng nhập</label><br>
		<input type="text" name="username" id="username" value="<?php echo $_GET['username']; ?>"><br>
		<label for="password">Password</label><br>
		<input type="password" name="password" id="password"><br>
		<input type="hidden" name="controller" id="controller" value="User_Controller">
		<input type="hidden" name="action" id="action" value="login">
		<input type="submit" name="submit_login" value="Đăng Nhập">
	</form>
	<?php
	}
?>