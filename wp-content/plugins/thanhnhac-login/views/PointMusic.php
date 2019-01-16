<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chấm điểm</title>
	<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/jquery-3.3.1.min.js"></script>
	<script src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/js/jquery.popupoverlay.js"></script>
	<link rel='stylesheet' id='bootstrap-css-css'  href='http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/css/bootstrap.min.css' type='text/css' media='all' />
	<link rel="stylesheet" type="text/css" href="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/css/pointmusic.css">
</head>
<header>
	<div class="left-header">
		<img src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/image/logo.png">
	</div>
	<?php 
		$accountid = $_GET['a'];
		require_once("connect.php");
		$sql = "SELECT `fullname` FROM `account` WHERE `id`=$accountid";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
	?>
	<div class="right-header">
		<h2>Chấm điểm cho học viên <p class="name"><?php echo $row['fullname']; ?></p></h2>
	</div>
</header>
<body>

<?php 
	echo "<table>";
	$sql = "SELECT * FROM `teach-music` WHERE `accountid`=$accountid";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	echo "<tr>";
	echo "<th>";
	echo "Mục đích muốn học hát";
	echo "</th>";
	echo "<th>";
	echo "Nếu ngay bây giờ, bạn đang ngồi một mình, cho bạn NGHE nhạc thì bạn sẽ chọn bài hát cụ thể nào? (ghi tên 3 bài hát cụ thể)";
	echo "</th>";
	echo "<th>";
	echo "Bạn thích chất giọng của ca sĩ nào nhất (hay cụ thể hơn, hãy ghi thêm trong chất giọng đó, bạn thích ở điểm nào, điểm nào không thích) ?";
	echo "</th>";
	echo "<th>";
	echo 'Hãy thử đọc to rõ MỘT HƠI, với tốc độ vừa phải chuỗi câu "1 ông sao sáng, 2 ông sao sáng, 3 ông sao sáng...." xem thử đếm được tối đa bao nhiêu ông sao sáng?';
	echo "</th>";
	echo "<th>";
	echo "Bạn có thường xuyên (hoặc có đủ khả năng) hét lớn tiếng gọi 1 người bạn ở cách chỗ bạn đang đứng khoảng bao nhiêu mét?";
	echo "</th>";
	echo "<th>";
	echo "Note cao nhất mà bạn hát THOẢI MÁI là note nào? (kiểm tra bằng cách thử trên nhạc cụ hoặc các App Tuner trên điện thoại) *";
	echo "</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>";
	echo $row['question1'];
	echo "</td>";
	echo "<td>";
	echo $row['question2'];
	echo "</td>";
	echo "<td>";
	echo $row['question3'];
	echo "</td>";
	echo "<td>";
	echo $row['question4'];
	echo "</td>";
	echo "<td>";
	echo $row['question5'];
	echo "</td>";
	echo "<td>";
	echo $row['question6'];
	echo "</td>";
	echo "</tr>";
	echo "</table>";


?>

<div class="mark-point">
	<table>
		<tr>
			<th>STT</th>
			<th>Nội dung chính</th>
			<th style="width: 25%;">Chi tiết</th>
			<th>Số điểm hiện tại</th>
			<th>Số điểm cần đạt</th>
			<th>Ghi chú thêm</th>
		</tr>

		<tr>
			<td>1</td>
			<td rowspan="3">Hơi</td>
			<td>Dung tích phổi</td>
			<td><input type="number" name="1-1"></td>
			<td><input type="number" name="1-2"></td>
			<td><input type="text" name="1-3"></td>
		</tr>

		<tr>
			<td>2</td>
			<td>Áp suất hơi</td>
			<td><input type="number" name="2-1"></td>
			<td><input type="number" name="2-2"></td>
			<td><input type="text" name="2-3"></td>
		</tr>

		<tr>
			<td>3</td>
			<td>Độ ổn định của áp suất hơi</td>
			<td><input type="number" name="3-1"></td>
			<td><input type="number" name="3-2"></td>
			<td><input type="text" name="3-3"></td>
		</tr>

		<tr>
			<td>4</td>
			<td rowspan="3">Thanh quản</td>
			<td>Quãng giọng (Range)</td>
			<td><input type="number" name="4-1"></td>
			<td><input type="number" name="4-2"></td>
			<td><input type="text" name="4-3"></td>
		</tr>

		<tr>
			<td>5</td>
			<td>Kỹ thuật ngân rung</td>
			<td><input type="number" name="5-1"></td>
			<td><input type="number" name="5-2"></td>
			<td><input type="text" name="5-3"></td>
		</tr>

		<tr>
			<td>6</td>
			<td>Mức thoải mái của cổ với note cao</td>
			<td><input type="number" name="6-1"></td>
			<td><input type="number" name="6-2"></td>
			<td><input type="text" name="6-3"></td>
		</tr>

		<tr>
			<td>7</td>
			<td rowspan="8">Âm sắc</td>
			<td>Khả năng điều chỉnh hơi lên mũi</td>
			<td><input type="number" name="7-1"></td>
			<td><input type="number" name="7-2"></td>
			<td><input type="text" name="7-3"></td>
		</tr>

		<tr>
			<td>8</td>
			<td>Khả năng điều chỉnh hơi xuống miệng</td>
			<td><input type="number" name="8-1"></td>
			<td><input type="number" name="8-2"></td>
			<td><input type="text" name="8-3"></td>
		</tr>

		<tr>
			<td>9</td>
			<td>Phát âm</td>
			<td><input type="number" name="9-1"></td>
			<td><input type="number" name="9-2"></td>
			<td><input type="text" name="9-3"></td>
		</tr>

		<tr>
			<td>10</td>
			<td>Điều chỉnh khoảng vang miệng</td>
			<td><input type="number" name="10-1"></td>
			<td><input type="number" name="10-2"></td>
			<td><input type="text" name="10-3"></td>
		</tr>

		<tr>
			<td>11</td>
			<td>Điều chỉnh khoảng vang mũi</td>
			<td><input type="number" name="11-1"></td>
			<td><input type="number" name="11-2"></td>
			<td><input type="text" name="11-3"></td>
		</tr>

		<tr>
			<td>12</td>
			<td>Âm sắc quãng trầm</td>
			<td><input type="number" name="12-1"></td>
			<td><input type="number" name="12-2"></td>
			<td><input type="text" name="12-3"></td>
		</tr>

		<tr>
			<td>13</td>
			<td>Âm sắc quãng trung</td>
			<td><input type="number" name="13-1"></td>
			<td><input type="number" name="13-2"></td>
			<td><input type="text" name="13-3"></td>
		</tr>

		<tr>
			<td>14</td>
			<td>Âm sắc quãng cao</td>
			<td><input type="number" name="14-1"></td>
			<td><input type="number" name="14-2"></td>
			<td><input type="text" name="14-3"></td>
		</tr>

		<tr>
			<td>15</td>
			<td rowspan="7">Cảm thụ</td>
			<td>Vị trí âm thanh</td>
			<td><input type="number" name="15-1"></td>
			<td><input type="number" name="15-2"></td>
			<td><input type="text" name="15-3"></td>
		</tr>

		<tr>
			<td>16</td>
			<td>Cảm âm giai điệu</td>
			<td><input type="number" name="16-1"></td>
			<td><input type="number" name="16-2"></td>
			<td><input type="text" name="16-3"></td>
		</tr>

		<tr>
			<td>17</td>
			<td>Cảm âm nhịp</td>
			<td><input type="number" name="17-1"></td>
			<td><input type="number" name="17-2"></td>
			<td><input type="text" name="17-3"></td>
		</tr>

		<tr>
			<td>18</td>
			<td>Cảm nhạc</td>
			<td><input type="number" name="18-1"></td>
			<td><input type="number" name="18-2"></td>
			<td><input type="text" name="18-3"></td>
		</tr>

		<tr>
			<td>19</td>
			<td>Tái hiện cảm xúc nội tại</td>
			<td><input type="number" name="19-1"></td>
			<td><input type="number" name="19-2"></td>
			<td><input type="text" name="19-3"></td>
		</tr>

		<tr>
			<td>20</td>
			<td>Biểu đạt cảm xúc</td>
			<td><input type="number" name="20-1"></td>
			<td><input type="number" name="20-2"></td>
			<td><input type="text" name="20-3"></td>
		</tr>

		<tr>
			<td>21</td>
			<td>Mức độ tập trung (không bị xao lãng)</td>
			<td><input type="number" name="21-1"></td>
			<td><input type="number" name="21-2"></td>
			<td><input type="text" name="21-3"></td>
		</tr>

		<tr>
			<td>22</td>
			<td rowspan="7">Kỹ thuật ĐB</td>
			<td>Giọng pha (mixed voice)</td>
			<td><input type="number" name="22-1"></td>
			<td><input type="number" name="22-2"></td>
			<td><input type="text" name="22-3"></td>
		</tr>

		<tr>
			<td>23</td>
			<td>Điều tiết âm lượng</td>
			<td><input type="number" name="23-1"></td>
			<td><input type="number" name="23-2"></td>
			<td><input type="text" name="23-3"></td>
		</tr>

		<tr>
			<td>24</td>
			<td>Điều tiết áp suất hơi</td>
			<td><input type="number" name="24-1"></td>
			<td><input type="number" name="24-2"></td>
			<td><input type="text" name="24-3"></td>
		</tr>

		<tr>
			<td>25</td>
			<td>Giọng siêu trầm (Vocal Fry)</td>
			<td><input type="number" name="25-1"></td>
			<td><input type="number" name="25-2"></td>
			<td><input type="text" name="25-3"></td>
		</tr>

		<tr>
			<td>26</td>
			<td>Hát theo điệu thức (Flow)</td>
			<td><input type="number" name="26-1"></td>
			<td><input type="number" name="26-2"></td>
			<td><input type="text" name="26-3"></td>
		</tr>

		<tr>
			<td>27</td>
			<td>Khả năng hát liền tiếng</td>
			<td><input type="number" name="27-1"></td>
			<td><input type="number" name="27-2"></td>
			<td><input type="text" name="27-3"></td>
		</tr>

		<tr>
			<td>28</td>
			<td>Khả năng hát nảy tiếng</td>
			<td><input type="number" name="28-1"></td>
			<td><input type="number" name="28-2"></td>
			<td><input type="text" name="28-3"></td>
		</tr>

		<tr>
			<td>29</td>
			<td>Các yêu cầu đặc biệt</td>
			<td>Sửa lỗi (Khóa “UNLIMIT” : 1 kèm 4)</td>
			<td><input type="number" name="29-1"></td>
			<td><input type="number" name="29-2"></td>
			<td><input type="text" name="29-3"></td>
		</tr>

		<tr>
			<td>30</td>
			<td></td>
			<td>Sửa lỗi khó trị (Khóa “UNLIMIT +” : 1 kèm 2)</td>
			<td><input type="number" name="30-1"></td>
			<td><input type="number" name="30-2"></td>
			<td><input type="text" name="30-3"></td>
		</tr>

		<tr>
			<td>31</td>
			<td></td>
			<td>Học riêng (Khóa cao cấp: 1 kèm 1)</td>
			<td><input type="number" name="31-1"></td>
			<td><input type="number" name="31-2"></td>
			<td><input type="text" name="31-3"></td>
		</tr>
	</table>
	<button class="btn btn-info mark">Hoàn thành</button>
</div>
	<div id="fade" class="well">
	    
	</div>
<script type="text/javascript">
	function getQueryVariable(variable)
	{
		var query = window.location.search.substring(1);
		var vars = query.split("&");
		for (var i=0;i<vars.length;i++) {
		       var pair = vars[i].split("=");
		       if(pair[0] == variable){return pair[1];}
		}
		return(false);
	}
	var a = getQueryVariable('a');
	var t = getQueryVariable('t');
	$('.name').on('click',function(){
		$.ajax({
			url: "http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/control-admin-views/InfoAccount.php",
			type: "POST",
			dataType: "text",
			data: {
				id: a
			},
			success: function(data){
				$('#fade').html(data);
				$('#fade').popup({
					transition: 'all 0.3s',
		            autoopen: true,
		            closeelement: '.my_popup_close'
				});
			}
		});

	});
	$('.mark').on('click',function(){
		$.ajax({
			url: "http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/control-admin-views/AddPoint.php",
			type: "POST",
			dataType: "text",
			data: {
				accountid: a,
				topicid: t,
				p11: $("input[name='1-1']").val(),
				p12: $("input[name='1-2']").val(),
				p13: $("input[name='1-3']").val(),
				p21: $("input[name='2-1']").val(),
				p22: $("input[name='2-2']").val(),
				p23: $("input[name='2-3']").val(),
				p31: $("input[name='3-1']").val(),
				p32: $("input[name='3-2']").val(),
				p33: $("input[name='3-3']").val(),
				p41: $("input[name='4-1']").val(),
				p42: $("input[name='4-2']").val(),
				p43: $("input[name='4-3']").val(),
				p51: $("input[name='5-1']").val(),
				p52: $("input[name='5-2']").val(),
				p53: $("input[name='5-3']").val(),
				p61: $("input[name='6-1']").val(),
				p62: $("input[name='6-2']").val(),
				p63: $("input[name='6-3']").val(),
				p71: $("input[name='7-1']").val(),
				p72: $("input[name='7-2']").val(),
				p73: $("input[name='7-3']").val(),
				p81: $("input[name='8-1']").val(),
				p82: $("input[name='8-2']").val(),
				p83: $("input[name='8-3']").val(),
				p91: $("input[name='9-1']").val(),
				p92: $("input[name='9-2']").val(),
				p93: $("input[name='9-3']").val(),
				p101: $("input[name='10-1']").val(),
				p102: $("input[name='10-2']").val(),
				p103: $("input[name='10-3']").val(),
				p111: $("input[name='11-1']").val(),
				p112: $("input[name='11-2']").val(),
				p113: $("input[name='11-3']").val(),
				p121: $("input[name='12-1']").val(),
				p122: $("input[name='12-2']").val(),
				p123: $("input[name='12-3']").val(),
				p131: $("input[name='13-1']").val(),
				p132: $("input[name='13-2']").val(),
				p133: $("input[name='13-3']").val(),
				p141: $("input[name='14-1']").val(),
				p142: $("input[name='14-2']").val(),
				p143: $("input[name='14-3']").val(),
				p151: $("input[name='15-1']").val(),
				p152: $("input[name='15-2']").val(),
				p153: $("input[name='15-3']").val(),
				p161: $("input[name='16-1']").val(),
				p162: $("input[name='16-2']").val(),
				p163: $("input[name='16-3']").val(),
				p171: $("input[name='17-1']").val(),
				p172: $("input[name='17-2']").val(),
				p173: $("input[name='17-3']").val(),
				p181: $("input[name='18-1']").val(),
				p182: $("input[name='18-2']").val(),
				p183: $("input[name='18-3']").val(),
				p191: $("input[name='19-1']").val(),
				p192: $("input[name='19-2']").val(),
				p193: $("input[name='19-3']").val(),
				p201: $("input[name='20-1']").val(),
				p202: $("input[name='20-2']").val(),
				p203: $("input[name='20-3']").val(),
				p211: $("input[name='21-1']").val(),
				p212: $("input[name='21-2']").val(),
				p213: $("input[name='21-3']").val(),
				p221: $("input[name='22-1']").val(),
				p222: $("input[name='22-2']").val(),
				p223: $("input[name='22-3']").val(),
				p231: $("input[name='23-1']").val(),
				p232: $("input[name='23-2']").val(),
				p233: $("input[name='23-3']").val(),
				p241: $("input[name='24-1']").val(),
				p242: $("input[name='24-2']").val(),
				p243: $("input[name='24-3']").val(),
				p251: $("input[name='25-1']").val(),
				p252: $("input[name='25-2']").val(),
				p253: $("input[name='25-3']").val(),
				p261: $("input[name='26-1']").val(),
				p262: $("input[name='26-2']").val(),
				p263: $("input[name='26-3']").val(),
				p271: $("input[name='27-1']").val(),
				p272: $("input[name='27-2']").val(),
				p273: $("input[name='27-3']").val(),
				p281: $("input[name='28-1']").val(),
				p282: $("input[name='28-2']").val(),
				p283: $("input[name='28-3']").val(),
				p291: $("input[name='29-1']").val(),
				p292: $("input[name='29-2']").val(),
				p293: $("input[name='29-3']").val(),
				p301: $("input[name='30-1']").val(),
				p302: $("input[name='30-2']").val(),
				p303: $("input[name='30-3']").val(),
				p311: $("input[name='31-1']").val(),
				p312: $("input[name='31-2']").val(),
				p313: $("input[name='31-3']").val()
			},
			success: function(data){
				$('#fade').html(data);
				$('#fade').popup({
					transition: 'all 0.3s',
		            autoopen: true,
		            closeelement: '.my_popup_close'
				});
			}
		});

	});
</script>

</body>
</html>


