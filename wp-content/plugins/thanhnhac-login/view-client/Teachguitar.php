<!DOCTYPE html>
<html>
<head>
	<title>Đánh giá chuyên mục ca sĩ, nhạc công</title>
	<meta charset="utf-8">
	<link rel='stylesheet' id='bootstrap-css-css'  href='http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/css/bootstrap.min.css' type='text/css' media='all' />
	<style type="text/css">
		input[type="file"]{
			display: none;
		}
		.choose-file{
			flex: 1 1 auto;
			margin: 5px;
			padding: 5px;
			border: 2px solid #f7f7f7;
			text-align: center;
			text-transform: uppercase;
			position: relative;
			overflow:hidden;
			transition: .3s;
			color: #f7f7f7;
			display: inline-block;
		}
		.choose-file:after{
			height: 120%;
		    left: -10%;
		    /*transform: skewX(15deg);*/
		    z-index: -1;
		    position: absolute;
		    transition: .3s;
		    content: '';
		    width: 0;
		    /*left: 50%;*/
		    bottom: 0;
		    /*height: 3px;*/
		    background: #f7f7f7;
		}
		.choose-file:hover{
			color: #5bcaff;
			cursor: pointer;
		}
		.choose-file:hover:after{
			left: -10%;
    		width: 120%;
		    transform: skewX(15deg);
		    z-index: -1;
		}
		body{
			background: linear-gradient(135deg, rgba(85,239,203,1) 0%,rgba(30,87,153,1) 0%,rgba(85,239,203,1) 0%,rgba(91,202,255,1) 100%);
			color: #4e4545;
			font-size: 16px;
			font-family: "Open Sans",Arial,Helvetica,sans-serif;
			width: 1200px;
			margin: 0 auto;
		}
		textarea{
			display: inherit;
			border: none;
			background-color: transparent;
		}
		input{
			display: inherit;
			border: none;
			background-color: transparent;
		}
		textarea{
		    color: #333;
		    width: 100%;
		    box-sizing: border-box;
		    letter-spacing: 1px;
		    border: 0;
		    border-bottom: 1px solid #fff;
		    font-size: 16px;
		}
		textarea ~ .focus-border{
			position: absolute;
			bottom: 0;
			left: 0;
			width: 0;
			height: 2px;
			background-color: #3399FF;
			transition: 0.4s;
		}
		textarea:focus ~ .focus-border{
			width: 100%;
    		transition: 0.4s;
		}
		.effect-area{
			position: relative;
		}
		input:focus,textarea:focus{
			outline: none;
		}
		#files,#progress{
			color: #004cff;
		}
		input[type="radio"]
		{
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			display: inline-block;
			position: relative;
			background-color: #f1f1f1;
			color: #666;
			top: 10px;
			height: 30px;
			width: 30px;
			border: 0;
			border-radius: 50px;
			cursor: pointer;     
			margin-right: 7px;
			outline: none;
		}
		input[type="radio"]:checked::before
		{
			position: absolute;
			font: 13px/1 'Open Sans', sans-serif;
			left: 11px;
			top: 7px;
			content: '\02143';
			transform: rotate(40deg);
		}
		input[type="radio"]:hover
		{
			background-color: #f7f7f7;
		}
		input[type="radio"]:checked
		{
			background-color: #f1f1f1;
		}
		input[type="checkbox"]{
			display: inline-block;
		}
		.a {
			display: block;
			position: relative;
			padding-left: 35px;
			margin-bottom: 12px;
			cursor: pointer;
			font-size: 22px;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		/* Hide the browser's default checkbox */
		.a input {
			position: absolute;
			opacity: 0;
			cursor: pointer;
			height: 0;
			width: 0;
		}

		/* Create a custom checkbox */
		.checkmark {
			position: absolute;
			top: 5px;
			left: 0;
			height: 25px;
			width: 25px;
			background-color: #f1f1f1;
		}

		/* On mouse-over, add a grey background color */
		.a:hover input ~ .checkmark {
			background-color: #f1f1f1;
		}

		/* When the checkbox is checked, add a blue background */
		.a input:checked ~ .checkmark {
			background-color: #f1f1f1;
		}

		/* Create the checkmark/indicator (hidden when not checked) */
		.checkmark:after {
			content: "";
			position: absolute;
			display: none;
		}

		/* Show the checkmark when checked */
		.a input:checked ~ .checkmark:after {
			display: block;
		}

		/* Style the checkmark/indicator */
		.a .checkmark:after {
			left: 9px;
			top: 5px;	
			width: 6px;
			height: 10px;
			border: solid #666;
			border-width: 0 1px 1px 0;
			-webkit-transform: rotate(45deg);
			-ms-transform: rotate(45deg);
			transform: rotate(40deg);
		}
		.a label{
			cursor: pointer;
			color: #4e4545;
			font-size: 16px;
			font-family: "Open Sans",Arial,Helvetica,sans-serif;
		}
		div label{
			cursor: pointer;
		}
		img{
	      width: 160px;
	        height: 100%;
	    }
	    body{
	      margin: 0 auto;
	      width: 1300px;
	      background: linear-gradient(135deg, rgba(85,239,203,1) 0%,rgba(30,87,153,1) 0%,rgba(85,239,203,1) 0%,rgba(91,202,255,1) 100%);
	      color: #4e4545;
	    }
	    header{
	      display: flex;
	      margin-bottom: 3%;
	    }
	    .left-header{
	      max-width: 30%;
	      flex-basis: 30%;
	    }
	    .right-header{
	      max-width: 70%;
	      flex-basis: 70%;
	      padding-top: 5%;
	    }
	    h2{
	      height: 100%;
	      margin: 0 0 0 20%;
	      font-weight: 500;
	      color: #ff4411;
	      text-transform: uppercase;
	    }
	</style>
</head>
<body>
	<header>
		<div class="left-header">
			<img src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/image/logo.png">
		</div>
		<div class="right-header">
			<h2>Bảng khảo sát chủ đề guitar</h2>
		</div>
	</header>
	<div>
		<label style="margin: 0px;">Nếu đã biết chơi guitar 1 ít, bạn hãy ghi âm và gửi lên đây bản chơi tốt nhất của bạn. Đội ngũ giảng viên của chúng tôi sẽ hiểu về năng lực của bạn hơn.</label>

		<div id="dropZone">
			<label class="choose-file"> Thêm tệp
				<input type="file" id="fileupload" name="attachments[]">
			</label>
		</div>
		<div id="files"></div>
		<div id="progress"></div>
	</div>
	<form action="" method="POST" id="myForm">
		<label>Mục đích bạn muốn học chơi guitar là để: <small style="color:red">*</small></label>
		<div>
			<input type="radio" name="question1" value="Nhạc công chuyên chơi guitar Lead cho 1 band nhạc acoustic" id="1">
			<label for="1">Nhạc công chuyên chơi guitar Lead cho 1 band nhạc acoustic</label>
		</div>
		<div>
			<input type="radio" name="question1" value="Trước mắt là đệm hát cho vui thôi, sau này nếu cảm thấy ổn sẽ đi chuyên nghiệp hơn" id="2">
			<label for="2">Trước mắt là đệm hát cho vui thôi, sau này nếu cảm thấy ổn sẽ đi chuyên nghiệp hơn</label>
		</div>
		<div>
			<input type="radio" name="question1" value="Đệm hát căn bản vài bài tủ" id="3">
			<label for="3">Đệm hát căn bản vài bài tủ</label>
		</div>
		<div>
			<input type="radio" name="question1" value="Chuẩn bị cho các cuộc thi sắp đến" id="4">
			<label for="4">Chuẩn bị cho các cuộc thi sắp đến</label>
		</div>
		<div>
			<input type="radio" name="question1" value="Nhạc công chuyên đệm đàn cho 1 band nhạc acoustic" id="5">
			<label for="5">Nhạc công chuyên đệm đàn cho 1 band nhạc acoustic</label>
		</div>
		<div>
			<input type="radio" name="question1" value="" class="11" id="6">
			<label for="6">Lý do khác:</label>
			<div class="effect-area">
				<textarea class="12 effect-1" rows="1" cols="100" maxlength="100" style="resize: none;" placeholder="Lý do của bạn ..."></textarea>
				<span class="focus-border"></span>
			</div>
		</div>
		
		<div>
			<label>Bạn thích chơi được dòng nhạc cụ thể nào, hay bài hát cụ thể nào bạn muốn chơi được trong thời gian tới? <small style="color:red;">*</small></label>
			<!-- <input type="text" name="question2"> -->
			<div class="effect-area">
				<textarea rows="1" cols="100" maxlength="100" required="required" class="text-area1 effect-2"  style="resize: none;"></textarea>
				<span class="focus-border"></span>
			</div>
		</div>
		<div>
			<label>Bạn thích tiếng đàn của mình sẽ hay theo kiểu của ai (band nào) nhất? <small style="color: red;">*</small></label>
			<div class="effect-area">
				<textarea rows="1" cols="100" maxlength="100" required="required" class="text-area2 effect-3"  style="resize: none;" placeholder="Chất giọng ca sĩ..."></textarea>
				<span class="focus-border"></span>
			</div>
		</div>

		
		<div >

			<label>Bạn đã trên 12 tuổi (hoặc kiểm soát ngón tay, có khả năng tự giác học tập tốt như người từ 12 tuổi trở lên) chưa? <small style="color: red;">*</small></label>
			<div>
				<input type="radio" name="question6" value="Rồi" id="7">
				<label for="7">Rồi</label>
			</div>
			<div>
				<input type="radio" name="question6" value="Chưa" id="8">
				<label for="8">Chưa</label>
			</div>
			

			<label>Khả năng đọc bản nhạc của bạn thế nào? <small style="color: red;">*</small></label>
			<label class="a">
				<input type="checkbox" name="question7" value="Chưa biết chút nào" id="10">
				<span class="checkmark"></span>
				<label for="10">Chưa biết chút nào</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question7" value="Nhìn và hiểu được ký hiệu các note nhạc" id="11">
				<span class="checkmark"></span>
				<label for="11">Nhìn và hiểu được ký hiệu các note nhạc</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question7" value="Nhìn và hiểu được ký hiệu nhịp, biết được điệu thức của 1 bài" id="12">
				<span class="checkmark"></span>
				<label for="12">Nhìn và hiểu được ký hiệu nhịp, biết được điệu thức của 1 bài</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question7" value="Nhìn vào ký hiệu hợp âm bằng chữ (ví dụ: Cm) và đệm đàn" id="13">
				<span class="checkmark"></span>
				<label for="13">Nhìn vào ký hiệu hợp âm bằng chữ (ví dụ: Cm) và đệm đàn</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question7" value="Nhìn được bản nhạc dành cho guitar" id="14">
				<span class="checkmark"></span>
				<label for="14">Nhìn được bản nhạc dành cho guitar</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question7" value="Nhìn được bản hòa tấu chung với các nhạc cụ khác" id="15">
				<span class="checkmark"></span>
				<label for="15">Nhìn được bản hòa tấu chung với các nhạc cụ khác</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question7" value="" class="13" id="13">
				<span class="checkmark"></span>
				<label for="13">Mục khác:</label>
				<div class="effect-area">
					<textarea class="14"  rows="1" cols="100" maxlength="100" style="resize: none;" placeholder="Mục khác..."></textarea>
					<span class="focus-border"></span>
				</div>
			</label>
			
			<label>Khả năng chơi Melody (giai điệu) của bạn thế nào?  <small style="color: red;">*</small></label>
			<label class="a">
				<input type="checkbox" name="question9" value="Chưa biết chút nào" id="14">
				<span class="checkmark"></span>
				<label for="14">Chưa biết chút nào</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question9" value="Biết cao độ của từng dây buông (cả 6 dây)" id="15">
				<span class="checkmark"></span>
				<label for="15">Biết cao độ của từng dây buông (cả 6 dây)</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question9" value="Biết tạo ra note đúng trên đàn (Vd:muốn đánh note C4 thì biết ngay được cần chặn ở đâu, dây nào)" id="16">
				<span class="checkmark"></span>
				<label for="16">Biết tạo ra note đúng trên đàn (Vd:muốn đánh note C4 thì biết ngay được cần chặn ở đâu, dây nào)</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question9" value="Nếu bạn biết được một giai điệu nào đó trong đầu, bạn chỉ mất 10 phút để đàn được 1 câu?" id="17">
				<span class="checkmark"></span>
				<label for="17">Nếu bạn biết được một giai điệu nào đó trong đầu, bạn chỉ mất 10 phút để đàn được 1 câu?</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question9" value="" class="15" id="18">
				<span class="checkmark"></span>
				<label for="18">Mục khác:</label>
				<div class="effect-area">
					<textarea class="16"  rows="1" cols="100" maxlength="100" style="resize: none;" placeholder="Mục khác..."></textarea>
					<span class="focus-border"></span>
				</div>
			</label>

			<label>Khả năng chặn hợp âm của bạn thế nào? <small style="color: red;">*</small></label>
			<label class="a">
				<input type="checkbox" name="question10" value="Chưa biết chút nào" id="19">
				<span class="checkmark"></span>
				<label for="19">Chưa biết chút nào</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question10" value="Biết vài thế bấm căn bản nhưng chưa nhuyễn" id="20">
				<span class="checkmark"></span>
				<label for="20">Biết vài thế bấm căn bản nhưng chưa nhuyễn</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question10" value="Có thể chơi tốt (chuyển nhanh, nhuyễn) các hợp âm căn bản" id="21">
				<span class="checkmark"></span>
				<label for="21">Có thể chơi tốt (chuyển nhanh, nhuyễn) các hợp âm căn bản</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question10" value="Có thể chơi tốt cả các hợp âm khó" id="22">
				<span class="checkmark"></span>
				<label for="22">Có thể chơi tốt cả các hợp âm khó</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question10" value="Bạn đã tự có thể đệm đàn cho chính mình ở 1 bài nào đó?" id="23">
				<span class="checkmark"></span>
				<label for="23">Bạn đã tự có thể đệm đàn cho chính mình ở 1 bài nào đó?</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question10" value="Bạn có khả năng đệm đàn cho người khác một số bài dễ nếu đã tập trước" id="24">
				<span class="checkmark"></span>
				<label for="24">Bạn có khả năng đệm đàn cho người khác một số bài dễ nếu đã tập trước</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question10" value="Bạn có khả năng nhìn vào hợp âm và đệm được cho người khác hát luôn?" id="25">
				<span class="checkmark"></span>
				<label for="25">Bạn có khả năng nhìn vào hợp âm và đệm được cho người khác hát luôn?</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question10" value="" class="17" id="26">
				<span class="checkmark"></span>
				<label for="26">Mục khác:</label>
				<div class="effect-area">
					<textarea class="18"  rows="1" cols="100" maxlength="100" style="resize: none;" placeholder="Mục khác..."></textarea>
					<span class="focus-border"></span>
				</div>
			</label>
			
			<label>Bạn chơi được các điệu thức nào <small style="color: red;">*</small></label>
			<label class="a">
				<input type="checkbox" name="question11" value="Chưa biết chút nào" id="27">
				<span class="checkmark"></span>
				<label for="27">Chưa biết chút nào</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question11" value="Biết và chơi được một ít điệu Slow Rock" id="28">
				<span class="checkmark"></span>
				<label for="28">Biết và chơi được một ít điệu Slow Rock</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question11" value="Biết và chơi được 1 ít điệu Ballad" id="29">
				<span class="checkmark"></span>
				<label for="29">Biết và chơi được 1 ít điệu Ballad</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question11" value="Bạn biết Tỉa?" id="30">
				<span class="checkmark"></span>
				<label for="30">Bạn biết "Tỉa"?</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question11" value="Bạn biết Quạt?" id="31">
				<span class="checkmark"></span>
				<label for="31">Bạn biết "Quạt"?</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question11" value="Bạn biết các điệu thức phức tạp?" id="32">
				<span class="checkmark"></span>
				<label for="32">Bạn biết các điệu thức phức tạp?</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question11" value="" class="19" id="33">
				<span class="checkmark"></span>
				<label for="33">Mục khác:</label>
				<div class="effect-area">
					<textarea class="20"  rows="1" cols="100" maxlength="100" style="resize: none;" placeholder="Mục khác..."></textarea>
					<span class="focus-border"></span>
				</div>
			</label>


			<label>Khả năng cảm âm- cảm nhạc của bạn <small style="color: red;">*</small></label>
			<label class="a">
				<input type="checkbox" name="question12" value="Bạn phân biệt (nghe) được 2 note có cao độ khác nhau nửa cung (Hai khung kề nhau trên cần đàn) chứ?" id="34">
				<span class="checkmark"></span>
				<label for="34">Bạn phân biệt (nghe) được 2 note có cao độ khác nhau nửa cung (Hai khung kề nhau trên cần đàn) chứ?</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question12" value="Bạn phân biệt được các điệu thức khác nhau chứ?" id="35">
				<span class="checkmark"></span>
				<label for="35">Bạn phân biệt được các điệu thức khác nhau chứ?</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question12" value="Bạn nghe nhạc nhiều hơn khoảng 0.5 giờ mỗi ngày chứ?" id="36">
				<span class="checkmark"></span>
				<label for="36">Bạn nghe nhạc nhiều hơn khoảng 0.5 giờ mỗi ngày chứ?</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question12" value="Bạn có rất thích (hoặc thần tượng) cách chơi của ca sĩ, band nhạc hay nhạc công nào không?" id="37">
				<span class="checkmark"></span>
				<label for="37">Bạn có rất thích (hoặc thần tượng) cách chơi của ca sĩ, band nhạc hay nhạc công nào không?</label>
			</label>
			<label class="a">
				<input type="checkbox" name="question12" value="" class="21" id="38">
				<span class="checkmark"></span>
				<label for="38">Mục khác:</label>
				<div class="effect-area">
					<textarea class="22"  rows="1" cols="100" maxlength="100" style="resize: none;" placeholder="Mục khác..."></textarea>
					<span class="focus-border"></span>
				</div>
			</label>

			<input type="hidden" name="question8" value="">
			<input type="hidden" name="topicid" value="2">
		</div>
		<input type="submit" name="submit" value="submit"  class="btn btn-primary" style="margin-top: 10px;">
		
	</form>
		
	<div class="result"></div>
		<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/jquery-3.3.1.min.js"></script>
		<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/jquery.ui.widget.js" type="text/javascript"></script>
		<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/jquery.iframe-transport.js" type="text/javascript"></script>
		<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/jquery.fileupload.js" type="text/javascript"></script>
		<script type="text/javascript">
			//Upload file
			$(function () {
               var files = $("#files");

				$("#fileupload").fileupload({
					url: 'http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/Controller-client/uploads-guitar.php',
					dropZone: '#dropZone',
					dataType: 'json',
					autoUpload: false
				}).on('fileuploadadd', function (e, data) {
				// var fileTypeAllowed = /.\.(gif|jpg|png|jpeg)$/i;
					var fileTypeAllowed = /.\.(mp3)$/i;
					var fileName = data.originalFiles[0]['name'];
					var fileSize = data.originalFiles[0]['size'];

				if (!fileTypeAllowed.test(fileName))
				    $("#files").html('Chỉ được upload file với định dạng mp3!');
				// else if (fileSize > 500000)
				//     $("#error").html('Your file is too big! Max allowed size is: 500KB');
				else {
				   $("#files").html("");
				   data.submit();
				}
				}).on('fileuploaddone', function(e, data) {
					var status = data.jqXHR.responseJSON.status;
					var msg = data.jqXHR.responseJSON.msg;
					if (status == 1) {
					    var path = data.jqXHR.responseJSON.path;
					    $("#files").fadeIn(3000).append('<p>'+msg+'</p>');
					    $("input[name='question8']").val(path);
					} else{
					    $("#files").fadeIn(5000).html(msg);
					}
				}).on('fileuploadprogressall', function(e,data) {
					var progress = parseInt(data.loaded / data.total * 100, 10);
					$("#progress").html("Tiến trình: " + progress + "%");
				});
            });



			$('.11').click(function(){
				$('.12').focus();
			});
			$('.13').click(function(){
				$('.14').focus();
			});
			$('.12').focus(function(){
				$('.11').attr("checked","checked");
			});
			$('.14').focus(function(){
				$('.13').attr("checked","checked");
			});
			var value1 = "";
			var value6 = "";
			var value7 = "";
			var value8 = "";
			var value9 = "";
			var value10 = "";
			var value11 = "";
			$("input[name='question1']").on('change',function(){
				$('.12').blur(function(){
					var val1 = $('.12').val();
					$('.11').val(val1);
					value1 = $("input[name='question1']:checked").val();
				});
				value1 = $("input[name='question1']:checked").val();
			});

			$("input[name='question6']").on('change',function(){
				value6 = $("input[name='question6']:checked").val();
			});

			// $("input[name='question7']").on('click',function(){
			// 	$('.14').blur(function(){
			// 		var val2 = $('.14').val();
			// 		$('.13').val(val2);
			// 		value7 = $("input[name='question7']:checked").val();
			// 	});
			// });
			$('form').on('submit',function(){
				confirm("Bạn đã chắc chắn về các lựa chọn của mình! Bấm Ok để hoàn thành!");
				var val2 = $('.14').val();
				$('.13').val(val2);
				$("input[name='question7']:checked").each(function(){
					value7 += $(this).val() + " ";
				});
				var val3 = $('.16').val();
				$('.15').val(val3);
				$("input[name='question9']:checked").each(function(){
					value8 += $(this).val() + " ";
				});
				var val4 = $('.18').val();
				$('.17').val(val4);
				$("input[name='question10']:checked").each(function(){
					value9 += $(this).val() + " ";
				});
				var val5 = $('.20').val();
				$('.19').val(val5);
				$("input[name='question11']:checked").each(function(){
					value10 += $(this).val() + " ";
				});
				var val6 = $('.22').val();
				$('.21').val(val6);
				$("input[name='question12']:checked").each(function(){
					value11 += $(this).val() + " ";
				});
				$.ajax({
					url: "http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/Controller-client/TeachguitarCtr.php",
					type: "POST",
					data: {
						question1: value1,
						question2: $('.text-area1').val(),
						question3: $('.text-area2').val(),
						question4: $('.text-1').val(),
						question5: value6,
						question6: value7,
						question7: $("input[name='question8']").val(),
						question8: value8,
						question9: value9,
						question10: value10,
						question11: value11,
						topicid: $("input[name='topicid']").val()
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