<?php 
	session_start();
	require_once("../Create-table/connect.php");
	$question1 =  isset($_POST['question1'])? $_POST['question1']: '';
	$question2 =  isset($_POST['question2'])? $_POST['question2']: '';
	$question3 =  isset($_POST['question3'])? $_POST['question3']: '';
	$question4 =  isset($_POST['question4'])? $_POST['question4']: '';
	$question5 =  isset($_POST['question5'])? $_POST['question5']: '';
	$question6 =  isset($_POST['question6'])? $_POST['question6']: '';
	$question7 =  isset($_POST['question7'])? $_POST['question7']: '';
	$topicid =  isset($_POST['topicid'])? $_POST['topicid']: '';
	$account_id = $_SESSION['id'];
	$sql = "INSERT INTO `teach-music` (`accountid`,`topicid`,`question1`,`question2`,`question3`,`question4`,`question5`,`question6`,`question7`) VALUES ('".$account_id."','".$topicid."','".$question1."','".$question2."','".$question3."','".$question4."','".$question5."','".$question6."','".$question7."')";
	// $result = mysqli_query($conn, $sql);
	if(!mysqli_query( $conn, $sql )){
		echo mysqli_error($conn);
	}else{
		echo "Thêm thành công!";
	}
	
?>