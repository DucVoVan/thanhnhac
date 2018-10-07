<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Đăng kí</title>
	<script src="wp-content/plugins/thanhnhac-login/asset/js/Sweetalert.js"></script>
	<script type="text/javascript">
		function isEmpty(str)
		{
		    str = str || null;
		    return (typeof str == "undefined" || str == null);
		}
		var patt = /^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/
		function validateForm()
		{
				    // Bước 1: Lấy giá trị của username và password
		    var username = document.getElementById('username').value;
		    var password = document.getElementById('password').value;
		 	var email    = document.getElementById('email').value;
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
		    else{
		        return true;
		    }
		 
		    return false;
		}
	</script>
</head>
<body>
	<h1>Đăng kí</h1>
	<form action="wp-content/plugins/thanhnhac-login/Controller-client/User_Controller.php" method="POST" name="myForm" onsubmit="return validateForm()">
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


</body>
</html>