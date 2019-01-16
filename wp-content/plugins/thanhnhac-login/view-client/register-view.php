<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Đăng kí tài khoản</title>
	<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/jquery-3.3.1.min.js"></script>
	<script src="wp-content/plugins/thanhnhac-login/asset/js/Sweetalert.js"></script>
	<link rel="stylesheet" type="text/css" href="wp-content/plugins/thanhnhac-login/asset/css/register.css">
	<script type="text/javascript">
		function isEmpty(str)
		{
		    str = str || null;
		    return (typeof str == "undefined" || str == null);
		}
		var patt = /^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/;
		var phone = /((09|03|07|08|05)+([0-9]{8})\b)/;
		function validateForm()
		{
			// Bước 1: Lấy giá trị của username và password
		    var username = document.getElementById('username').value;
		    var password = document.getElementById('password').value;
		 	var email    = document.getElementById('email').value;
    		var mobile = document.getElementById('phone').value;
		    
		    // Bước 2: Kiểm tra dữ liệu hợp lệ hay không
		    if (isEmpty(username)){
		        swal({
				  title: "Thông báo!",
				  text: "Bạn chưa nhập tên đăng nhập!",
				  type: "error",
				  confirmButtonText: 'OK',
				  timer: 10000
				});
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
		    }
		    else if (!patt.test(password))
		    {
		        swal({
				  title: "Thông báo!",
				  html: "<p>Mật khẩu bao gồm: </p><p> Cả ký tự chữ cái hoa, thường, chữ số, ký tự đặc biệt, dấu chấm</p><p> Bắt đầu với ký tự in hoa</p><p> Có từ 6 đến 32 ký tự</p><p>Ví dụ: User@123</p>",
				  type: "error",
				  confirmButtonText: 'OK',
				});
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
		    }
		    else if(mobile == ''){
		        swal({
					  title: "Thông báo!",
					  html: "Bạn chưa nhập số điện thoại!",
					  type: "error",
					  confirmButtonText: 'OK',
				});
		    }	
		    else if(phone.test(mobile) == false){
		        {
		            swal({
					  title: "Thông báo!",
					  html: "Số điện thoại của bạn nhập không đúng định dạng!",
					  type: "error",
					  confirmButtonText: 'OK',
					});
		        }
		    }
		    else{
		        return true;
		    }
		 	
		    return false;
		}

	</script>
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
			
			<form action="wp-content/plugins/thanhnhac-login/Controller-client/User_Controller.php" method="POST" name="myForm" onsubmit="return validateForm()">
				<input type="text" name="username" id="username" placeholder="Username"><br>
				<input type="password" name="password" id="password" placeholder="Password"><br>
				<input type="email" name="email" id="email" placeholder="E-mail"><br>
				<input type="text" name="phone" id="phone" placeholder="Số điện thoại"><br>
				<input type="fullname" name="fullname" id="fullname" placeholder="Họ và tên"><br>
				<input type="hidden" name="controller" id="controller" value="User_Controller">
				<input type="hidden" name="action" id="action" value="register">
				<input type="submit" name="signup_submit" value="Đăng Kí">
			</form>

		</div>

		<div class="right">
			<span class="loginwith">Đăng nhập bằng<br />mạng xã hội</span>
			<button class="social-signin facebook">Log in with facebook</button>
			<button class="social-signin google">Log in with Google+</button>
		</div>
		<div class="or">OR</div>
	</div>
	<div class="result"></div>
	<script type="text/javascript">
		$('#username').blur(function(){
			$.ajax({
					url: "http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/Controller-client/check-course-account.php",
					type: "POST",
					data: {
						q1: "sad"
					},
					success: function(data){
						$('.username').html(data);
					}
				});
		});
		$('form').on('submit',function(){
				confirm("Bạn đã chắc chắn về các lựa chọn của mình! Bấm Ok để hoàn thành!");
				$.ajax({
					url: "http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/Controller-client/check-course-account.php",
					type: "POST",
					data: {
						q1: "sad"
					},
					success: function(data){
						$('.result').html(data);
					}
				});

				return false;
			});
	</script>
</body>
</html>