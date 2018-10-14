<?php 
	echo '<pre>';
	print_r($_POST['insert']);
	echo '</pre>';
	
	$arr = $_POST['insert'];
	echo count($arr);
	echo $arr[1];

	echo $_POST['action'];
	echo $_POST['controller'];
?>