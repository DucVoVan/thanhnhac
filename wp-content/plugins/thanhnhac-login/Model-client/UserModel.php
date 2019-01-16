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
		private $phone;

		function __construct($username, $password, $fullname, $email, $phone){
			$this->username = $username;
			$this->password = $password;
			$this->fullname = $fullname;
			$this->email = $email;
			$this->phone = $phone;
		}
		public function insertUser(){
			$sql = "INSERT INTO `account` (`username`, `email`, `phone`, `fullname`, `password`) VALUES ('$this->username','$this->email','$this->phone','$this->fullname','$this->password' )";
			$conn = $this->connect();
			if(!mysqli_query( $conn, $sql )){
				return false;
			}
			return true;
		}
		// public function test2(){
		// 	$sql = "INSERT INTO topic (`name`) VALUES ('Độ')";
		// 	$conn = $this->connect();
		// 	mysqli_query($conn, $sql);
		// }
		// public function test1(){
		// 	$sql = 'SELECT * FROM `topic-children`' ;
		// 	$conn = $this->connect();
		// 	$result = mysqli_query($conn, $sql);
		// 	while($row = mysqli_fetch_assoc($result)){
		// 		echo "<pre>";
		// 		print_r($row);
		// 		echo "</pre>";
		// 	}
		// }
		
	}
	
	// $test = new UserModel;
	// $test->test2();
	// $test->test1();
?>
