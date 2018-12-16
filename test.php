<!DOCTYPE html>
<html>
<head>
	<title>test</title>
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
			font-size: 15px;
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
		    padding: 7px 0;
		    border-bottom: 1px solid #fff;
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
	</style>
</head>
<body>
	<div>
		<label>Ngay lúc này, hãy mở chức năng ghi âm của điện thoại hoặc máy tính lên, bấm ghi âm và hát (không nhạc) một bài hát đầy đủ có đoạn đầu và đoạn điệp khúc, sau đó up file ghi âm đó lên đây, các chuyên gia của chúng tôi sẽ giúp bạn phân tích giọng hát. <small style="color:red">*</small></label>

		<div id="dropZone">
			<label class="choose-file"> Thêm tệp
				<input type="file" id="fileupload" name="attachments[]">
			</label>
		</div>
		<div id="files"></div>
		<div id="progress"></div>
	</div>
	<form action="" method="POST" id="myForm">
		<label>Mục đích bạn muốn học hát là để? <small style="color:red">*</small></label>
		<div>
			<input type="radio" name="question1" value="Hát Karaoke với bạn bè" id="1">
			<label for="1">Hát Karaoke với bạn bè (không yêu cầu cao, chỉ cần hát ổn là được)</label>
		</div>
		<div>
			<input type="radio" name="question1" value="Trở thành ca sĩ nổi tiếng" id="2">
			<label for="2">Trở thành ca sĩ nổi tiếng (hiện đã đi hát chuyên nghiệp rồi)</label>
		</div>
		<div>
			<input type="radio" name="question1" value="Trước mắt là hát cho vui thôi, sau này nếu cảm thấy ổn sẽ đi chuyên nghiệp hơn" id="3">
			<label for="3">Trước mắt là hát cho vui thôi, sau này nếu cảm thấy ổn sẽ đi chuyên nghiệp hơn</label>
		</div>
		<div>
			<input type="radio" name="question1" value="Trở thành ca sĩ chuyên nghiệp" id="4">
			<label for="4">Trở thành ca sĩ chuyên nghiệp</label>
		</div>
		<div>
			<input type="radio" name="question1" value="Chuẩn bị cho các cuộc thi ca hát sắp đến" id="5">
			<label for="5">Chuẩn bị cho các cuộc thi ca hát sắp đến</label>
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
			<label>Nếu ngay bây giờ, bạn đang ngồi một mình, cho bạn NGHE nhạc thì bạn sẽ chọn bài hát cụ thể nào? (ghi tên 3 bài hát cụ thể) <small style="color:red;">*</small></label>
			<!-- <input type="text" name="question2"> -->
			<div class="effect-area">
				<textarea rows="3" cols="100" maxlength="300" required="required" class="text-area1 effect-2"  style="resize: none;" placeholder="Mỗi bài hát hãy nhập trong 1 dòng..."></textarea>
				<span class="focus-border"></span>
			</div>
		</div>
		<div>
			<label>Bạn thích chất giọng của ca sĩ nào nhất (hay cụ thể hơn, hãy ghi thêm trong chất giọng đó, bạn thích ở điểm nào, điểm nào không thích) ? <small style="color: red;">*</small></label>
			<div class="effect-area">
				<textarea rows="1" cols="100" maxlength="100" required="required" class="text-area2 effect-3"  style="resize: none;" placeholder="Chất giọng ca sĩ..."></textarea>
				<span class="focus-border"></span>
			</div>
		</div>

		<div>
			<label>Hãy thử đọc to rõ MỘT HƠI, với tốc độ vừa phải chuỗi câu "1 ông sao sáng, 2 ông sao sáng, 3 ông sao sáng...." xem thử đếm được tối đa bao nhiêu ông sao sáng? <small style="color: red;">*</small>
			</label>
			<input type="number" name="" min="0" max="100" step="1" class="text-1">
		</div>
		<div >

			<label>Bạn có thường xuyên (hoặc có đủ khả năng) hét lớn tiếng gọi 1 người bạn ở cách chỗ bạn đang đứng khoảng bao nhiêu mét? <small>*</small></label>
			<div>
				<input type="radio" name="question6" value="Dưới 10 mét" id="7">
				<label for="7">Dưới 10 mét</label>
			</div>
			<div>
				<input type="radio" name="question6" value="Từ 10 đến 20 mét" id="8">
				<label for="8">Từ 10 đến 20 mét</label>
			</div>
			<div>
				<input type="radio" name="question6" value="Trên 20 mét" id="9">
				<label for="9">Trên 20 mét</label>
			</div>

			<label>Note cao nhất mà bạn hát THOẢI MÁI là note nào? (kiểm tra bằng cách thử trên nhạc cụ hoặc các App Tuner trên điện thoại) <small>*</small></label>
			<div>
				<input type="radio" name="question7" value="Note Fa 4 đối với nam và Note Fa 5 đối với nữ" id="10">
				<label for="10">Note Fa 4 đối với nam và Note Fa 5 đối với nữ</label>
			</div>
			<div>
				<input type="radio" name="question7" value="Note La 4 đối với nam và Note La 5 đối với nữ" id="11">
				<label for="11">Note La 4 đối với nam và Note La 5 đối với nữ</label>
			</div>
			<div>
				<input type="radio" name="question7" value="Note Đô 5 đối với nam và Note Đô 6 đối với nữ" id="12">
				<label for="12">Note Đô 5 đối với nam và Note Đô 6 đối với nữ</label>
			</div>
			<div>
				<input type="radio" name="question7" value="" class="13" id="13">
				<label for="13">Mục khác:</label>
				<div class="effect-area">
					<textarea class="14"  rows="1" cols="100" maxlength="100" style="resize: none;" placeholder="Mục khác..."></textarea>
					<span class="focus-border"></span>
				</div>
			</div>
			<input type="hidden" name="question8" value="">
			<input type="hidden" name="topicid" value="1">
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
					url: 'http://localhost/thanhnhac/test2.php',
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

			$("input[name='question7']").on('change',function(){
				$('.14').blur(function(){
					var val2 = $('.14').val();
					$('.13').val(val2);
					value7 = $("input[name='question7']:checked").val();
				});
				value7 = $("input[name='question7']:checked").val();
			});
			$('form').on('submit',function(){
				$.ajax({
					url: "http://localhost/thanhnhac/test3.php",
					type: "POST",
					data: {
						question1: value1,
						question2: $('.text-area1').val(),
						question3: $('.text-area2').val(),
						question4: $('.text-1').val(),
						question5: value6,
						question6: value7,
						question7: $("input[name='question8']").val(),
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