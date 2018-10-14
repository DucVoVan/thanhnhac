<!DOCTYPE html>
<html>
<head>
	<title>Trang cá nhân</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="stylesheet" id="bootstrap-css-css" href="http://localhost/thanhnhac/wp-content/themes/theme_me/assets/css/bootstrap.min.css?ver=4.0" type="text/css" media="all">
	<link rel="stylesheet" id="custom-css-css" href="http://localhost/thanhnhac/wp-content/themes/theme_me/assets/css/style-custom.css?ver=1.0.0" type="text/css" media="all">
	<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/jquery-3.3.1.min.js"></script>
	<script src="http://localhost/thanhnhac/wp-content/themes/theme_me/assets/js/custom/main.js" async></script>
</head>
<body>
	<div class="container">
    <div class="row">
        <div class="home-left col-xl-4 col-lg-4">
            <div class="img">click</div>
        </div>

        <div class="home-between col-xl-4 col-lg-4">
		
		<div class="chatbot-child">
        <div class="chatbot">
                        <div id="result1">
                            
                        </div>
                            
                        <div class="chatbot-title">
                            Chat Bot
                        </div>
                        <div id="messages">
        <pre>
Mời bạn lựa chọn theo các phím chức năng sau: 
1.abc
2.xyz
3.def
        </pre>
                        </div>

                        <input type="text" value="" id="number" placeholder="Nhập tin nhắn ..."/>
                    </div>
        </div>
        </div>
        <div class="home-right col-xl-4 col-lg-4">
			<?php 
				echo "<pre>";
				print_r($row);
				echo "</pre>";
				$check->getCourse($row['id']);
			?>
        </div>
    </div>
</div>
</body>
</html>


