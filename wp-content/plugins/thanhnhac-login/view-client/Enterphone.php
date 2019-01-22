<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/jquery-3.3.1.min.js"></script>
	<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/Sweetalert.js"></script>

</head>
<body>
	<form action="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/Controller-client/Controller_google.php" method="POST">
		<input type="text" name="phone" id="phone" placeholder="Số điện thoại">
		<p class="phone"></p>
		<input type="submit" name="signup_submit" value="Đăng Kí">
	</form>
	<script type="text/javascript">
		function isEmpty(str)
		{
		    str = str || null;
		    return (typeof str == "undefined" || str == null);
		}
		
		
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
		$('form').on('submit',function(){
			var phone = /((09|03|07|08|05)+([0-9]{8})\b)/;
    		var mobile = $('#phone').val();
			var phone1 = $('.phone').html();
		    
		    if(mobile == ''){
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
		    else if(!isEmpty(phone1)){
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
</body>
</html>