<?php 
	require_once("UserDB.php");
	class Course extends UserDB{		
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
	
?>