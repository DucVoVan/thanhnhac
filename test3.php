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
	$sql = "INSERT INTO `marking-force` (`accountid`,`topicid`,`question1`,`question2`,`question3`,`question4`,`question5`,`question6`,`question7`) VALUES (51,'".$topicid."','".$question1."','".$question2."','".$question3."','".$question4."','".$question5."','".$question6."','".$question7."')";
	// $result = mysqli_query($conn, $sql);
	if(!mysqli_query( $conn, $sql )){
		echo mysqli_error($conn);
	}else{
		echo "Thêm thành công!";
	}
	
?>