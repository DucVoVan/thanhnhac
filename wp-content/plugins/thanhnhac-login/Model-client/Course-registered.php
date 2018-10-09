<?php 
	require_once('UserDB.php');
	class CourseRegistered extends UserDB{
		public function checkCourse($id){
			$conn  = $this->connect();
			// Truy vấn vào bảng course-registered để xem account đã chọn khóa học nào hay chưa, nếu có trả về true, sai trả về false
			$query = "SELECT * FROM `course-registered` WHERE accountid='$id'";
			$result = mysqli_query($conn, $query);
			$row = mysqli_fetch_assoc($result);
			// echo $id;
			// print_r($row);
			if($row){
				return true;
			}else{
				return false;
			}
		}
	}
	// $run = new CourseRegistered();
	// $run->checkCourse(58);
?>