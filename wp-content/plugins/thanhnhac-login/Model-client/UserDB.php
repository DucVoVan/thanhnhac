<?php 
	/**
	 * 
	 */
	class UserDB
	{
		function connect()
		{	
			$db = array(
				'server'	=> 'localhost',
				'username'	=> 'root',
				'password'	=> '',
				'db_name'	=> 'thanhnhac'
			);
			$conn = mysqli_connect($db['server'], $db['username'], $db['password'], $db['db_name']);
			return $conn;
		}
	}
?>