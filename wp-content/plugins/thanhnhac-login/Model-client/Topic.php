<?php 
	require_once("UserDB.php");
	class Topic extends UserDB{
		// Load các chủ đề và khóa học liên quan tới chủ đề Thanh nhạc
		public function getTopic($name){
			$conn = $this->connect();
			// truy vấn tất cả record trong bảng topic
			$query = "SELECT `id` FROM `topic` WHERE `name`='".$name."'";
			$result = mysqli_query($conn, $query);
			// Khởi tạo mảng data
			$data = array();
			$row = mysqli_fetch_assoc($result);
			// truy vấn record tìm chủ đề con tương ứng với chủ đề cha, mà có topicid ứng với topic hiện tại
			$query2 = "SELECT * FROM `topic-children` WHERE `topic-children`.`topicid` = '".$row['id']."'";
			$result2 = mysqli_query($conn, $query2);

			while($row2 = mysqli_fetch_assoc($result2)){
				//Đẩy bản ghi topic-child vào data
				$data[] = $row2;
			}
			// Mã hóa data về dang JSON
			$str =  json_encode($data);
			echo "<pre>";
			print_r($str);
			echo "</pre>";
			$rts = json_decode($str);
			foreach($rts as $key=>$value){
				foreach($value as $k=>$v){
					echo $k.'=>'.$v;
					echo "\n";
				}
			}
		}
		
		public function getCourse($id){
			$conn = $this->connect();
			$query = "SELECT * FROM `course` WHERE `topicidchildren`='".$id."'";
			$result = mysqli_query($conn, $query);
			$data = array();
			while($row = mysqli_fetch_assoc($result)){
				$data[] = $row;
			}
			echo json_encode($data);
		}		
	}
	// $run = new Topic();
	// $run->getTopic("Thanh nhạc");
?>