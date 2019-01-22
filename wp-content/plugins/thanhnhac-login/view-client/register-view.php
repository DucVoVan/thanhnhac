<?php
    require_once "../googlelogin/config.php";

	// if (!empty($_SESSION['access_token'])) {
	// 	header('Location: index.php');
	// 	exit();
	// }

	$loginURL = $gClient->createAuthUrl();
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Đăng kí tài khoản</title>
	<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/jquery-3.3.1.min.js"></script>
	<script src="wp-content/plugins/thanhnhac-login/asset/js/Sweetalert.js"></script>
	<script src="wp-content/plugins/thanhnhac-login/asset/js/alertify.js"></script>
	<link rel="stylesheet" type="text/css" href="wp-content/plugins/thanhnhac-login/asset/css/register.css">
	<link rel="stylesheet" type="text/css" href="wp-content/plugins/thanhnhac-login/asset/css/alertify.core.css">
	<link rel="stylesheet" type="text/css" href="wp-content/plugins/thanhnhac-login/asset/css/alertify.default.css" id="toggleCSS">
</head>
<body>
	<header>
		<div class="left-header">
			<img src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/image/logo.png">
		</div>
		<div class="right-header">
			<h2>Trang đăng kí</h2>
		</div>
	</header>
	<div id="login-box">
		<div class="left">
			<h1>Đăng kí tài khoản</h1>
			
			<form action="wp-content/plugins/thanhnhac-login/Controller-client/User_Controller.php" method="POST" name="myForm" ">
				<input type="text" name="username" id="username" placeholder="Tên đăng nhập">
				<p class="username"></p>
				<input type="password" name="password" id="password" placeholder="Mật khẩu">
				<p class="password"></p>
				<input type="email" name="email" id="email" placeholder="E-mail">
				<p class="email"></p>
				<input type="text" name="phone" id="phone" placeholder="Số điện thoại">
				<p class="phone"></p>
				<input type="text" name="fullname" id="fullname" placeholder="Họ và tên">
				
				<input type="hidden" name="controller" id="controller" value="User_Controller">
				<input type="hidden" name="action" id="action" value="register">
				<input type="submit" name="signup_submit" value="Đăng Kí">
			</form>

		</div>

		<div class="right">
			<span class="loginwith">Đăng nhập bằng<br />mạng xã hội</span>
			<button class="social-signin facebook" >Log in with facebook</button>
			<button class="social-signin google" onclick="window.location = '<?php echo $loginURL ?>';">Log in with Google+</button>
		</div>
		<div class="or">OR</div>
	</div>
	<div class="result"></div>
</body>
</html>
	<script type="text/javascript" >

		function isEmpty(str)
		{
		    str = str || null;
		    return (typeof str == "undefined" || str == null);
		}
		
		$('#username').blur(function(){
			$.ajax({
					url: "http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/Controller-client/check-course-account.php",
					type: "POST",
					data: {
						username: $('#username').val(),
					},
					success: function(data){
						$('.username').html(data);
					}
				});
		});
		$('#email').blur(function(){
			$.ajax({
					url: "http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/Controller-client/check-course-account.php",
					type: "POST",
					data: {
						email: $('#email').val(),
					},
					success: function(data){
						$('.email').html(data);
					}
				});
		});
		$('#phone').blur(function(){
			$.ajax({
					url: "http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/Controller-client/check-course-account.php",
					type: "POST",
					data: {
						phone: $('#phone').val(),
					},
					success: function(data){
						$('.phone').html(data);
					}
				});
		});
			var choice = "123";
		$('form').on('submit',function(){
			var patt = /^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/;
			var phone = /((09|03|07|08|05)+([0-9]{8})\b)/;
			// Bước 1: Lấy giá trị của username và password
		    var username = $('#username').val();
		    var password = $('#password').val();
		 	var email    = $('#email').val();
    		var mobile = $('#phone').val();
		    var username1 = $('.username').html();
			var phone1 = $('.phone').html();
			var email1 = $('.email').html();
		    // Bước 2: Kiểm tra dữ liệu hợp lệ hay không
		    if (isEmpty(username)){
		        swal({
				  title: "Thông báo!",
				  text: "Bạn chưa nhập tên đăng nhập!",
				  type: "error",
				  confirmButtonText: 'OK',
				  timer: 10000
				});
				return false;
		    }	
		    else if (isEmpty(password))
		    {
		        swal({
				  title: "Thông báo!",
				  text: "Bạn chưa nhập mật khẩu!",
				  type: "error",
				  confirmButtonText: 'OK',
				  timer: 10000
				});
				return false;
		    }
		    else if (!patt.test(password))
		    {
		        swal({
				  title: "Thông báo!",
				  html: "<p>Mật khẩu bao gồm: </p><p> Cả ký tự chữ cái hoa, thường, chữ số, ký tự đặc biệt, dấu chấm</p><p> Bắt đầu với ký tự in hoa</p><p> Có từ 6 đến 32 ký tự</p><p>Ví dụ: User@123</p>",
				  type: "error",
				  confirmButtonText: 'OK',
				});
				return false;
		    }
		    else if (isEmpty(email))
		    {
		        swal({
				  title: "Thông báo!",
				  text: "Bạn chưa nhập Email!",
				  type: "error",
				  confirmButtonText: 'OK',
				  timer: 10000
				});
				return false;
		    }
		    else if(mobile == ''){
		        swal({
					  title: "Thông báo!",
					  html: "Bạn chưa nhập số điện thoại!",
					  type: "error",
					  confirmButtonText: 'OK',
				});
				return false;
		    }	
		    else if(phone.test(mobile) == false){
		        
		            swal({
					  title: "Thông báo!",
					  html: "Số điện thoại của bạn nhập không đúng định dạng!",
					  type: "error",
					  confirmButtonText: 'OK',
					});
		        return false;
		    }	
		    else if(!isEmpty(username1)){
				swal({
					title: "Thông báo!",
					text: "Bạn phải nhập tên đăng nhập khác!",
					type: "error",
					confirmButtonText: 'OK',
					timer: 10000
				});
				return false;
			}else if(!isEmpty(email1)){
				swal({
					title: "Thông báo!",
					text: "Bạn phải nhập một Email khác!",
					type: "error",
					confirmButtonText: 'OK',
					timer: 10000
				});
				return false;
			}else if(!isEmpty(phone1)){
				swal({
					title: "Thông báo!",
					text: "Bạn phải nhập một số điện thoại khác!",
					type: "error",
					confirmButtonText: 'OK',
					timer: 10000
				});
				return false;
			}else{
				
				if(confirm("Bạn đã chắc chắn về các lựa chọn của mình! Bấm Ok để hoàn thành!")){
					return true;
				}else{
					return false;
				}
			}
			});
	</script>
	