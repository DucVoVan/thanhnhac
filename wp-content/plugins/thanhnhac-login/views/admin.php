<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">

	<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/jquery-3.3.1.min.js"></script>
	<link rel='stylesheet' id='bootstrap-css-css'  href='http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/css/bootstrap.min.css' type='text/css' media='all' />

	<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/datatables.min.js"></script>
	<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/dataTables.bootstrap4.min.js"></script>

	<link rel="stylesheet" href="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/css/bootstrap-datepicker.css" />
	<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/bootstrap-datepicker.js"></script>
	<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/jquery.popupoverlay.js"></script>
	<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/bootstrap.min.js"></script>
	<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/main.js" async></script>
	<link rel="stylesheet" type="text/css" href="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/css/custom-admin.css">
</head>
<body>
	<div id="fadeandscale" class="well">
    </div>
    <div id="fade" class="well">
    	<form action="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/control-admin-views/add-user.php" method="POST" class="form-add-user" >
    		<label class="label-add">Thêm tài khoản mới</label>
    		<div>
	    		<label for="data1">username:</label>
		    	<input type="text" id="data1"/>
	    	</div>
	    	<div>
		    	<label for="data2">email:</label>
		    	<input type="email" id="data2"/>
	    	</div>
	    	<div>
		    	<label for="data3">fullname:</label>
		    	<input type="text" id="data3"/>
	    	</div>
	    	<div>
		    	<label for="data4">password:</label>
		    	<input type="password" id="data4"/>
	    	</div>
	    	<input type="submit" class="btn btn-info" value="Thêm" />
	   		<input type="button" class="my_popup_close btn btn-info" value="Đóng" />
    	</form>
    	<!-- Add an optional button to close the popup -->
    </div>
	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		<li class="nav-item">
			<a class="nav-link " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Tạo các chủ đề con</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Quản lý User</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Chấm điểm thanh nhạc</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact2" role="tab" aria-controls="pills-contact" aria-selected="false">Contact2</a>
		</li>
	</ul>
	<div class="tab-content" id="pills-tabContent">
		<div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
			<?php include("AddTopicChildren.php"); ?>
		</div>
		<div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
			<?php include("ManagerUser.php"); ?>
		</div>
		<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
			<?php
				require_once("connect.php");  
				include("ManagerMusic.php");
			?>
		</div>
		<div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
	</div>
	
</body>
</html>
<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/table-user.js"></script>