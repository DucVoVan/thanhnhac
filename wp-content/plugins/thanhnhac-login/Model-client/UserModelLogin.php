<?php 
	require_once('UserDB.php');
	/**
	 * 
	 */
	class UserModelLogin extends UserDB
	{
		private $username;
		private $password;
		function __construct($username, $password){
			$this->username = $username;
			$this->password = $password;
		}
		// public function fetchAll($username, $password){
		// 	$this->username = $username;
		// 	$this->password = $password;
		// }
		public function authlogin(){
			$sql = 'SELECT * FROM `account` WHERE username = "'.$this->username.'" and password = "'.$this->password.'" ' ;
			$conn = $this->connect();
			$result = mysqli_query($conn, $sql);
			return $row = mysqli_fetch_assoc($result);
		}
		
	}
?>