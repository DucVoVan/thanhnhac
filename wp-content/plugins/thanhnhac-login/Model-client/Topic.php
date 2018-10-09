<?php 
	require_once("UserDB.php");
	class Topic extends UserDB{
		public function getTopic(){
			$conn = $this->connect();
			// truy vấn tất cả record trong bảng topic
			$query = "SELECT * FROM `topic`";
			$result = mysqli_query($conn, $query);
			while($row = mysqli_fetch_assoc($result)){
				// Nếu truy vấn topic có name là Chị em, thì ta không làm gì cả, vì chỉ hiện thị các khóa học nhạc.
				if($row['name'] == "Chị em"){

				}else{
				// truy vấn record mà có topicid ứng với topic hiện tại
				$query2 = "SELECT * FROM `topic-children` WHERE `topic-children`.`topicid` = '".$row['id']."'";
				$result2 = mysqli_query($conn, $query2);

					// if($row['name'] != "Chị em"){
					?>
						<div><?php echo $row['name']; ?></div>
					<?php

					// }
					while($row2 = mysqli_fetch_assoc($result2)){
					?>
						<div><?php echo $row2['name']; ?></div>
					<?php
					}
				}
			}
		}
	}
?>