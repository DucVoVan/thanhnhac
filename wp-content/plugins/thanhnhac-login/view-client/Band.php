<!DOCTYPE html>
<html>
<head>
	<title>Đánh giá chuyên mục thanh nhạc</title>
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
		    padding: 0;
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
		label{
			margin: 0px;
		}
		th{
			font-weight: 200;
			text-align: center;
			border: 1px solid #fff;
		}
		table{
			width: 100%;
			border: 1px solid #fff;

		}
		td{
			text-align: center;
			border: 1px solid #fff;
		}
		.table-header{
			text-align: left!important;
		}
		td input{
			top: 3px!important;
		}
		.table{
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<div>
		<label>Hãy gửi lên đây 1 video (quay mộc, chưa qua chỉnh sửa âm thanh, hình ảnh) mà bạn hoặc nhóm của bạn trình diễn. <small style="color:red">*</small></label>

		<div id="dropZone">
			<label class="choose-file"> Thêm tệp
				<input type="file" id="fileupload" name="attachments[]">
			</label>
		</div>
		<div id="files"></div>
		<div id="progress"></div>
	</div>
	<form action="" method="POST" id="myForm">
		<label>Bạn cung cấp dịch vụ nào?<small style="color: red;">*</small></label>
		<label class="a">
			<input type="checkbox" name="question1" value="Ca hát" id="1">
			<span class="checkmark"></span>
			<label for="1">Ca hát</label>
		</label>
		<label class="a">
			<input type="checkbox" name="question1" value="Guitar đệm hát" id="2">
			<span class="checkmark"></span>
			<label for="2">Guitar đệm hát</label>
		</label>
		<label class="a">
			<input type="checkbox" name="question1" value="Guitar độc tấu" id="3">
			<span class="checkmark"></span>
			<label for="3">Guitar độc tấu</label>
		</label>
		<label class="a">
			<input type="checkbox" name="question1" value="Piano đệm hát" id="4" >
			<span class="checkmark"></span>
			<label for="4">Piano đệm hát</label>
		</label>
		<label class="a">
			<input type="checkbox" name="question1" value="Piano độc tấu" id="5">
			<span class="checkmark"></span>
			<label for="5">Piano độc tấu</label>
		</label>
		<label class="a">
			<input type="checkbox" name="question1" value="Violin độc tấu" id="6">
			<span class="checkmark"></span>
			<label for="6">Violin độc tấu</label>
		</label>
		<label class="a">
			<input type="checkbox" name="question1" value="" class="1" id="7">
			<span class="checkmark"></span>
			<label for="7">Mục khác:</label>
			<div class="effect-area">
				<textarea class="2"  rows="1" cols="100" maxlength="100" style="resize: none;" placeholder="Mục khác..."></textarea>
				<span class="focus-border"></span>
			</div>
		</label>

		<div>
			<label>Nghệ danh của bạn? <small style="color: red;">*</small></label>
			<div class="effect-area">
				<textarea rows="1" cols="100" maxlength="100" required="required" class="text-area1 effect-3"  style="resize: none;"></textarea>
				<span class="focus-border"></span>
			</div>
		</div>

		<div style="height: 10px;"></div>
		<div>
			<label>Bạn đang sống và làm việc ở quận huyện, thành phố nào?  <small style="color: red;">*</small></label>
			<div class="effect-area">
				<textarea rows="1" cols="100" maxlength="100" required="required" class="text-area2 effect-3"  style="resize: none;"></textarea>
				<span class="focus-border"></span>
			</div>
		</div>

		<div style="height: 10px;"></div>
		<div>
			<label>Số điện thoại <small style="color: red;">*</small></label>
			<div class="effect-area">
				<textarea rows="1" cols="100"  maxlength = "10" onkeypress="return isNumberKey(event)" required="required" class="text-area3 effect-3"  style="resize: none;"></textarea>
				<span class="focus-border"></span>
			</div>
		</div>

		<div style="height: 10px;"></div>
		<div>
			<label>Bạn đã từng đoạt giải thưởng nào trong những cuộc thi liên quan đến âm nhạc chưa? (ghi tên giải thưởng cụ thể)<small style="color: red;">*</small></label>
			<div class="effect-area">
				<textarea rows="1" cols="100" maxlength="300" required="required" class="text-area4 effect-3"  style="resize: none;"></textarea>
				<span class="focus-border"></span>
			</div>
		</div>

		<div style="height: 10px;"></div>
		<div>
			<label>Bạn đã từng tham gia khóa học nào liên quan đến âm nhạc chưa? (ghi tên khóa học và thời gian cụ thể)<small style="color: red;">*</small></label>
			<div class="effect-area">
				<textarea rows="1" cols="100" maxlength="300" required="required" class="text-area5 effect-3"  style="resize: none;"></textarea>
				<span class="focus-border"></span>
			</div>
		</div>
		
		<div style="height: 10px;"></div>
		<label class="table">Bạn có thể chơi dòng nhạc nào? <small style="color:red">*</small></label>
		<table>
			<tr>
				<th></th>
				<th>Không biết chơi</th>
				<th>Biết chút ít</th>
				<th>Chơi tạm được</th>
				<th>Chơi khá</th>
				<th>Chơi tốt</th>
			</tr>
			<tr>
				<td class="table-header">Ballad</td>
				<td><input type="radio" name="question8" value="Không biết chơi" ></td>
				<td><input type="radio" name="question8" value="Biết chút ít" ></td>
				<td><input type="radio" name="question8" value="Chơi tạm được" ></td>
				<td><input type="radio" name="question8" value="Chơi khá" ></td>
				<td><input type="radio" name="question8" value="Chơi tốt" ></td>
			</tr>
			<tr>
				<td class="table-header">Pop(nhạc trẻ phổ biến)</td>
				<td><input type="radio" name="question9" value="Không biết chơi" ></td>
				<td><input type="radio" name="question9" value="Biết chút ít" ></td>
				<td><input type="radio" name="question9" value="Chơi tạm được" ></td>
				<td><input type="radio" name="question9" value="Chơi khá" ></td>
				<td><input type="radio" name="question9" value="Chơi tốt" ></td>
			</tr>
			<tr>
				<td class="table-header">Rock</td>
				<td><input type="radio" name="question10" value="Không biết chơi" ></td>
				<td><input type="radio" name="question10" value="Biết chút ít" ></td>
				<td><input type="radio" name="question10" value="Chơi tạm được" ></td>
				<td><input type="radio" name="question10" value="Chơi khá" ></td>
				<td><input type="radio" name="question10" value="Chơi tốt" ></td>
			</tr>
			<tr>
				<td class="table-header">Jazz</td>
				<td><input type="radio" name="question11" value="Không biết chơi" ></td>
				<td><input type="radio" name="question11" value="Biết chút ít" ></td>
				<td><input type="radio" name="question11" value="Chơi tạm được" ></td>
				<td><input type="radio" name="question11" value="Chơi khá" ></td>
				<td><input type="radio" name="question11" value="Chơi tốt" ></td>
			</tr>
			<tr>
				<td class="table-header">Funk</td>
				<td><input type="radio" name="question12" value="Không biết chơi" ></td>
				<td><input type="radio" name="question12" value="Biết chút ít" ></td>
				<td><input type="radio" name="question12" value="Chơi tạm được" ></td>
				<td><input type="radio" name="question12" value="Chơi khá" ></td>
				<td><input type="radio" name="question12" value="Chơi tốt" ></td>
			</tr>
			<tr>
				<td class="table-header">R&B</td>
				<td><input type="radio" name="question13" value="Không biết chơi" ></td>
				<td><input type="radio" name="question13" value="Biết chút ít" ></td>
				<td><input type="radio" name="question13" value="Chơi tạm được" ></td>
				<td><input type="radio" name="question13" value="Chơi khá" ></td>
				<td><input type="radio" name="question13" value="Chơi tốt" ></td>
			</tr>
			<tr>
				<td class="table-header">Country</td>
				<td><input type="radio" name="question14" value="Không biết chơi" ></td>
				<td><input type="radio" name="question14" value="Biết chút ít" ></td>
				<td><input type="radio" name="question14" value="Chơi tạm được" ></td>
				<td><input type="radio" name="question14" value="Chơi khá" ></td>
				<td><input type="radio" name="question14" value="Chơi tốt" ></td>
			</tr>
			<tr>
				<td class="table-header">Nhạc Trữ tình - Bolero</td>
				<td><input type="radio" name="question15" value="Không biết chơi" ></td>
				<td><input type="radio" name="question15" value="Biết chút ít" ></td>
				<td><input type="radio" name="question15" value="Chơi tạm được" ></td>
				<td><input type="radio" name="question15" value="Chơi khá" ></td>
				<td><input type="radio" name="question15" value="Chơi tốt" ></td>
			</tr>
			<tr>
				<td class="table-header">Nhạc đỏ (cách mạng)</td>
				<td><input type="radio" name="question16" value="Không biết chơi" ></td>
				<td><input type="radio" name="question16" value="Biết chút ít" ></td>
				<td><input type="radio" name="question16" value="Chơi tạm được" ></td>
				<td><input type="radio" name="question16" value="Chơi khá" ></td>
				<td><input type="radio" name="question16" value="Chơi tốt" ></td>
			</tr>
			<tr>
				<td class="table-header">Pop(nhạc trẻ phổ biến)</td>
				<td><input type="radio" name="question17" value="Không biết chơi" ></td>
				<td><input type="radio" name="question17" value="Biết chút ít" ></td>
				<td><input type="radio" name="question17" value="Chơi tạm được" ></td>
				<td><input type="radio" name="question17" value="Chơi khá" ></td>
				<td><input type="radio" name="question17" value="Chơi tốt" ></td>
			</tr>
			<tr>
				<td class="table-header">Dân ca</td>
				<td><input type="radio" name="question18" value="Không biết chơi" ></td>
				<td><input type="radio" name="question18" value="Biết chút ít" ></td>
				<td><input type="radio" name="question18" value="Chơi tạm được" ></td>
				<td><input type="radio" name="question18" value="Chơi khá" ></td>
				<td><input type="radio" name="question18" value="Chơi tốt" ></td>
			</tr>
			<tr>
				<td class="table-header">Thính phòng</td>
				<td><input type="radio" name="question19" value="Không biết chơi" ></td>
				<td><input type="radio" name="question19" value="Biết chút ít" ></td>
				<td><input type="radio" name="question19" value="Chơi tạm được" ></td>
				<td><input type="radio" name="question19" value="Chơi khá" ></td>
				<td><input type="radio" name="question19" value="Chơi tốt" ></td>
			</tr>
		</table>

		<div style="height: 10px;"></div>
		<div>
			<label>Bạn đã từng tham gia khóa học nào liên quan đến âm nhạc chưa? (ghi tên khóa học và thời gian cụ thể)<small style="color: red;">*</small></label>
			<div class="effect-area">
				<textarea rows="1" cols="100" maxlength="300" required="required" class="text-area6 effect-3"  style="resize: none;"></textarea>
				<span class="focus-border"></span>
			</div>
		</div>

		<div style="height: 10px;"></div>
		<div>
			<label>Đối với Nhạc công đệm hát hoặc độc tấu đơn lẻ, mức thù lao bạn đề xuất là bao nhiêu? (Giả sử rằng nơi biểu diễn cách nơi bạn ở dưới 15km, trong một chương trình quy mô rất ít người, tại quán cafe hoặc phòng trà, nơi công cộng, chơi khoảng 5 bài)</label>
			<div class="effect-area">
				<textarea type="number" rows="1" cols="100" maxlength="100" class="text-area7 effect-3"  style="resize: none;"></textarea>
				<span class="focus-border"></span>
			</div>
		</div>
		
		<div style="height: 10px;"></div>
		<div>
			<label>Đối với Ca sĩ đơn lẻ (không biết chơi nhạc cụ tự đệm hát), mức thù lao bạn đề xuất là bao nhiêu? (Giả sử rằng nơi biểu diễn cách nơi bạn sống dưới 15km, trong một chương trình quy mô rất ít người, tại quán cafe hoặc phòng trà, nơi công cộng, hát khoảng 5 bài)</label>
			<div class="effect-area">
				<textarea rows="1" cols="100" maxlength="100" class="text-area8 effect-3"  style="resize: none;"></textarea>
				<span class="focus-border"></span>
			</div>
		</div>
		
		<div style="height: 10px;"></div>
		<div>
			<label>Đối với Ca sĩ đơn lẻ (có thể tự đệm hát), mức thù lao bạn đề xuất là bao nhiêu? (Giả sử rằng nơi biểu diễn cách nơi bạn sống dưới 15km, trong một chương trình quy mô rất ít người, tại quán cafe hoặc phòng trà, nơi công cộng, hát khoảng 5 bài)</label>
			<div class="effect-area">
				<textarea rows="1" cols="100" maxlength="100" class="text-area9 effect-3"  style="resize: none;"></textarea>
				<span class="focus-border"></span>
			</div>
		</div>

		<input type="hidden" name="question0" value="">
		<input type="submit" name="submit" value="submit"  class="btn btn-primary" style="margin-top: 10px;">
	</form>
		
	<div class="result"></div>
		<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/jquery-3.3.1.min.js"></script>
		<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/jquery.ui.widget.js" type="text/javascript"></script>
		<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/jquery.iframe-transport.js" type="text/javascript"></script>
		<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/jquery.fileupload.js" type="text/javascript"></script>
		<script type="text/javascript">
			function isNumberKey(evt)
			{
				var charCode = (evt.which) ? evt.which : event.keyCode;
				if(charCode == 59 || charCode == 46)
					return true;
				if (charCode > 31 && (charCode < 48 || charCode > 57))
					return false;
				return true;
			}
			//Upload file
			$(function () {
               var files = $("#files");

				$("#fileupload").fileupload({
					url: 'http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/Controller-client/uploads-band.php',
					dropZone: '#dropZone',
					dataType: 'json',
					autoUpload: false
				}).on('fileuploadadd', function (e, data) {
				// var fileTypeAllowed = /.\.(gif|jpg|png|jpeg)$/i;
					var fileTypeAllowed = /.\.(avi|mov|mp4)$/i;
					var fileName = data.originalFiles[0]['name'];
					var fileSize = data.originalFiles[0]['size'];

				if (!fileTypeAllowed.test(fileName))
				    $("#files").html('Chỉ được upload file với định dạng avi|mov|mp4!');
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
					    $("input[name='question0']").val(path);
					} else{
					    $("#files").fadeIn(5000).html(msg);
					}
				}).on('fileuploadprogressall', function(e,data) {
					var progress = parseInt(data.loaded / data.total * 100, 10);
					$("#progress").html("Tiến trình: " + progress + "%");
				});
            });



			$('.1').click(function(){
				$('.2').focus();
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
			var value2 = "";
			var value8 = "";
			var value9 = "";
			var value10 = "";
			var value11 = "";
			var value12 = "";
			var value13 = "";
			var value14 = "";
			var value15 = "";
			var value16 = "";
			var value17 = "";
			var value18 = "";
			var value19 = "";
			$("input[name='question1']").on('change',function(){
				value2 = $("input[name='question1']:checked").val();
			});

			$("input[name='question8']").on('change',function(){
				value8 = $("input[name='question8']:checked").val();
			});

			$("input[name='question9']").on('change',function(){
				value9 = $("input[name='question9']:checked").val();
			});

			$("input[name='question10']").on('change',function(){
				value10 = $("input[name='question10']:checked").val();
			});

			$("input[name='question11']").on('change',function(){
				value11 = $("input[name='question11']:checked").val();
			});

			$("input[name='question12']").on('change',function(){
				value12 = $("input[name='question12']:checked").val();
			});

			$("input[name='question13']").on('change',function(){
				value13 = $("input[name='question13']:checked").val();
			});

			$("input[name='question14']").on('change',function(){
				value14 = $("input[name='question14']:checked").val();
			});

			$("input[name='question15']").on('change',function(){
				value15 = $("input[name='question15']:checked").val();
			});

			$("input[name='question16']").on('change',function(){
				value16 = $("input[name='question16']:checked").val();
			});

			$("input[name='question17']").on('change',function(){
				value17 = $("input[name='question17']:checked").val();
			});

			$("input[name='question18']").on('change',function(){
				value18 = $("input[name='question18']:checked").val();
			});

			$("input[name='question19']").on('change',function(){
				value19 = $("input[name='question19']:checked").val();
			});
			// $("input[name='question6']").on('change',function(){
			// 	value6 = $("input[name='question6']:checked").val();
			// });

			// $("input[name='question7']").on('change',function(){
			// 	$('.14').blur(function(){
			// 		var val2 = $('.14').val();
			// 		$('.13').val(val2);
			// 		value7 = $("input[name='question7']:checked").val();
			// 	});
			// 	value7 = $("input[name='question7']:checked").val();
			// });
			$('form').on('submit',function(){
				confirm("Bạn đã chắc chắn về các lựa chọn của mình! Bấm Ok để hoàn thành!");
				var val1 = $('.2').val();
				$('.1').val(val1);
				$("input[name='question1']:checked").each(function(){
					value1 += $(this).val() + " ";
				});
				$.ajax({
					url: "http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/Controller-client/BandCtr.php",
					type: "POST",
					data: {
						question0: $("input[name='question0']").val(),
						question1: value1,
						question2: $('.text-area1').val(),
						question3: $('.text-area2').val(),
						question4: $('.text-area3').val(),
						question5: $('.text-area4').val(),
						question6: $('.text-area5').val(),
						question7: value2,
						question8: value8,
						question9: value9,
						question10: value10,
						question11: value11,
						question12: value12,
						question13: value13,
						question14: value14,
						question15: value15,
						question16: value16,
						question17: value17,
						question18: value18,
						question19: value19,
						question20: $('.text-area6').val(),
						question21: $('.text-area7').val(),
						question22: $('.text-area8').val(),
						question23: $('.text-area9').val(),
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