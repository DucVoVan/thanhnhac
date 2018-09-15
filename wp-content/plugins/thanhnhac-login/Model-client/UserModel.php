<?php 
	/**
	 * 
	 */
	require_once('UserDB.php');
	class UserModel extends UserDB
	{
		private $username;
		private $password;
		private $fullname;
		private $email;

		public function fetchAll($username, $password, $fullname, $email){
			$this->username = $username;
			$this->password = $password;
			$this->fullname = $fullname;
			$this->email = $email;

		}
		public function insertUser(){
			$sql = "INSERT INTO account (`username`, `email`, `fullname`, `password`) VALUES ('$this->username','$this->email','$this->fullname','$this->password' )";
			$conn = $this->connect();
			if(!mysqli_query( $conn, $sql )){
				return false;
			}
			return true;
		}

		public function getUser($username, $password){
			$sql = 'SELECT * FROM `account` WHERE username = "'.$username.'" and password = "'.$password.'" ' ;
			$conn = $this->connect();
			$result = mysqli_query($conn, $sql);
			return $row = mysqli_fetch_assoc($result);
		}
	}
?>