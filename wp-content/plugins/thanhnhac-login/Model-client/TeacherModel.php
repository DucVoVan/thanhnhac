<?php 
	require_once('UserDB.php');
	/**
	 * 
	 */
	class TeacherModel extends UserDB
	{
		public function getTeacher($username, $password){
			$sql = 'SELECT `id` FROM `teacher` WHERE username = "'.$username.'" and password = "'.$password.'" ' ;
			$conn = $this->connect();
			$result = mysqli_query($conn, $sql);
			return $row = mysqli_fetch_assoc($result);
		}
		
	}
?>