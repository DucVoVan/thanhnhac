<?php 
	add_shortcode('shortcode1', 'abc');
	function abc(){

	?>
	
	<div class="login-page">
		<div class="form">
			<form class="login-form" action="wp-content/plugins/thanhnhac-login/Controller-client/User_Controller.php" method="POST">
				<input type="text" name="username" id="username" placeholder="Tên đăng nhập" value="<?php echo $_GET['username']; ?>"><br>
				<input type="password" name="password" id="password" placeholder="Mật khẩu"><br>
				<input type="hidden" name="controller" id="controller" value="User_Controller">
				<input type="hidden" name="action" id="action" value="login">
				<input type="submit" name="submit_login" value="Đăng Nhập" class="button">
				<p class="message">Bạn không có tài khoản ?<a href="http://localhost/thanhnhac/register.html">Tạo một tài khoản</a></p>
			</form>
			
		</div>
	</div>
	<?php
	}
?>