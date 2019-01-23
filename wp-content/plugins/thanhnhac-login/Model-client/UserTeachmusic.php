<?php
	require_once('UserDB.php');
	/**
	 * 
	 */
	class UserTeachmusic extends UserDB
	{
		private $accountid;
		function __construct($accountid){
			$this->accountid = $accountid;
		}
		// public function fetchAll($username, $password){
		// 	$this->username = $username;
		// 	$this->password = $password;
		// }
		public function checkTopicCoursed(){
			$sql = 'SELECT `topicid` FROM `teach-music` WHERE accountid = "'.$this->accountid.'"' ;
			$conn = $this->connect();
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			if(isset($row)){
				$_SESSION['music'] = true;
			}else{
				$_SESSION['music'] = false;
			}
		}
		
	}
?>