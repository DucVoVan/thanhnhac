<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		td, th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
			width: 13%;
		}
		th{
			font-weight: 400;
		}
		td{
			font-weight: 300;
		}
		tr:nth-child(even) {
			background-color: #dddddd;
		}
		tr:nth-child(odd) {
    		background-color: rgba(0,0,0,.05);
		}
		img{
			width: 160px;
    		height: 100%;
		}
		body{
			margin: 0 auto;
			width: 1300px;
		}
		header{
			display: flex;
		}
		.left-header{
			max-width: 30%;
			flex-basis: 30%;
		}
		.right-header{
			max-width: 70%;
			flex-basis: 70%;
			padding-top: 3%;
		}
		h2{
			height: 100%;
    		margin: 0;
    		font-weight: 500;
    		color: #ff4411;
		}
		tr:hover {
    		background-color: #dcdcdc!important;
		}
	</style>
</head>
<header>
	<div class="left-header">
		<img src="http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/asset/image/logo.png">
	</div>
	<div class="right-header">
		<h2>Trang hiển thị toàn bộ câu trả lời của học viên</h2>
	</div>
</header>
<body>

<?php 
	require_once("connect.php");  
	$sql = "SELECT * FROM `teach-music`";
	$result = mysqli_query($conn, $sql);
	echo "<table>";
	echo '<tr>
		<th>Mục đích muốn học hát</th>
		<th>Nếu ngay bây giờ, bạn đang ngồi một mình, cho bạn NGHE nhạc thì bạn sẽ chọn bài hát cụ thể nào? (ghi tên 3 bài hát cụ thể)</th>
		<th>Bạn thích chất giọng của ca sĩ nào nhất (hay cụ thể hơn, hãy ghi thêm trong chất giọng đó, bạn thích ở điểm nào, điểm nào không thích) ? </th>
		<th>Hãy thử đọc to rõ MỘT HƠI, với tốc độ vừa phải chuỗi câu "1 ông sao sáng, 2 ông sao sáng, 3 ông sao sáng...." xem thử đếm được tối đa bao nhiêu ông sao sáng? </th>
		<th>Bạn có thường xuyên (hoặc có đủ khả năng) hét lớn tiếng gọi 1 người bạn ở cách chỗ bạn đang đứng khoảng bao nhiêu mét?</th>
		<th>Note cao nhất mà bạn hát THOẢI MÁI là note nào? (kiểm tra bằng cách thử trên nhạc cụ hoặc các App Tuner trên điện thoại) *</th>
		<th>File nhạc của học viên</th>
	</tr>';
	while($row = mysqli_fetch_assoc($result)){
			$str = (string)$row['accountid'];
			$str2 = (string)$row['topicid'];
			$link = "http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/views/PointMusic.php?a=".$str."&&t=".$str2;
			if(empty($row['question7'])){
				$link2 = "#";
			}else{
				$link2 = "http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/Controller-client/".$row['question7'];
			}
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
			echo "<td>";
			echo '<a href="'.$link2.'" target="blank">Xem file</a>';
			echo "</td>";
			echo "</tr>";
	}
	echo "</table>";

?>


</body>
</html>