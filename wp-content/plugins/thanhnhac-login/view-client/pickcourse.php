<?php 
	session_start();
	if(!isset($_SESSION['id'])){
		header("Location: http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/view-client/404.php");
		// exit();
	}
	if($_SESSION['music']==true){
		$music = "#";
	}else{
		$music = "http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/view-client/Teachmusic.php";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang Giới thiệu khóa học</title>
	<link rel='stylesheet' id='bootstrap-css-css'  href='http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/css/bootstrap.min.css' type='text/css' media='all' />
	<link rel="stylesheet" type="text/css" href="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/css/pickcourse.css" media="all" />
	<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/jquery-3.3.1.min.js"></script>
	<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/Sweetalert.js"></script>
	<!-- <script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/pickcourse.js" async></script> -->
	<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<div class="left-header">
			<img src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/image/logo.png">
		</div>
		<div class="right-header">
			<h2>Trang chọn chủ đề</h2>
		</div>
	</header>
	<div class="select">
		<h2 class="alert-pick">Chào mừng bạn đến với Unisole!</h2>
		<div class="topic">
			<div class="part1">
				<h3>Mời bạn chọn chủ đề các khóa học của chúng tôi</h3>
				<table>
					<tr>
						<th>
							<a class="testr" href="<?php echo $music; ?>">Thanh nhạc</a>
						</th>
						<script type="text/javascript">
							function isEmpty(str)
							{
							    str = str || null;
							    return (typeof str == "undefined" || str == null);
							}
							var value1 = "<?php echo $music; ?>";
							$('.testr').click(function(){

							if (value1=="#"){
						        swal({
								  title: "Thông báo!",
								  text: "Bạn đã hoàn thành bản đánh giá năng lực với chủ đề khóa học này!",
								  type: "info",
								  confirmButtonText: 'OK',
								  timer: 10000
								});
					    	}	
							})
						</script>
					</tr>
					<tr>
						<td><a href="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/view-client/Teachguitar.php">Guitar</a></td>
					</tr>
					<tr>
						<td><a href="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/view-client/Teachkeyboard.php">Keyboard</a></td>
					</tr>
				</table>
			</div>
			<div class="part2">
				<h3>Mời bạn tham gia vào nhóm band nhạc của Unisole</h3>
				<h4><a href="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/view-client/Band.php">Band nhạc</a></h4>
			</div>
			<div class="part3">
				<h3>Mời bạn tham gia vào nhóm hội chị em của Unisole</h3>
				<h4><a href="#">Hội chị em</a></h4>
			</div>
		</div>
		<div class="show">
			
		</div>
		

	</div>
</body>
</html>
			