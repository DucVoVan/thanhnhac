<?php
	$db = array(
		'server'	=> 'localhost',
		'username'	=> 'root',
		'password'	=> '',
		'db_name'	=> 'thanhnhac'
	);
	$conn = mysqli_connect($db['server'], $db['username'], $db['password'], $db['db_name']);
	if(!$conn){
		die('Fail'.mysqli_connect_error($conn));
	}
	// echo "Success!";
?>