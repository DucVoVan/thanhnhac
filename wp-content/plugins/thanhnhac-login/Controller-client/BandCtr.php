<?php 
	session_start();
	require_once("../Create-table/connect.php");
	$question0 =  isset($_POST['question0'])? $_POST['question0']: '';
	$question1 =  isset($_POST['question1'])? $_POST['question1']: '';
	$question2 =  isset($_POST['question2'])? $_POST['question2']: '';
	$question3 =  isset($_POST['question3'])? $_POST['question3']: '';
	$question4 =  isset($_POST['question4'])? $_POST['question4']: '';
	$question5 =  isset($_POST['question5'])? $_POST['question5']: '';
	$question6 =  isset($_POST['question6'])? $_POST['question6']: '';
	$question7 =  isset($_POST['question7'])? $_POST['question7']: '';
	$question8 =  isset($_POST['question8'])? $_POST['question8']: '';
	$question9 =  isset($_POST['question9'])? $_POST['question9']: '';
	$question10 =  isset($_POST['question10'])? $_POST['question10']: '';
	$question11 =  isset($_POST['question11'])? $_POST['question11']: '';
	$question12 =  isset($_POST['question12'])? $_POST['question12']: '';
	$question13 =  isset($_POST['question13'])? $_POST['question13']: '';
	$question14 =  isset($_POST['question14'])? $_POST['question14']: '';
	$question15 =  isset($_POST['question15'])? $_POST['question15']: '';
	$question16 =  isset($_POST['question16'])? $_POST['question16']: '';
	$question17 =  isset($_POST['question17'])? $_POST['question17']: '';
	$question18 =  isset($_POST['question18'])? $_POST['question18']: '';
	$question19 =  isset($_POST['question19'])? $_POST['question19']: '';
	$question20 =  isset($_POST['question20'])? $_POST['question20']: '';
	$question21 =  isset($_POST['question21'])? $_POST['question21']: '';
	$question22 =  isset($_POST['question22'])? $_POST['question22']: '';
	$question23 =  isset($_POST['question23'])? $_POST['question23']: '';
	// $topicid =  isset($_POST['topicid'])? $_POST['topicid']: '';
	$account_id = $_SESSION['id'];
	$sql = "INSERT INTO `band` (`accountid`,`question0`,`question1`,`question2`,`question3`,`question4`,`question5`,`question6`,`question7`,`question8`,`question9`,`question10`,`question11`,`question12`,`question13`,`question14`,`question15`,`question16`,`question17`,`question18`,`question19`,`question20`,`question21`,`question22`,`question23`) VALUES ('".$account_id."','".$question0."','".$question1."','".$question2."','".$question3."','".$question4."','".$question5."','".$question6."','".$question7."','".$question8."','".$question9."','".$question10."','".$question11."','".$question12."','".$question13."','".$question14."','".$question15."','".$question16."','".$question17."','".$question18."','".$question19."','".$question20."','".$question21."','".$question22."','".$question23."')";
	// $result = mysqli_query($conn, $sql);
	if(!mysqli_query( $conn, $sql )){
		echo mysqli_error($conn);
	}else{
		echo "Thêm thành công!";
	}
	
?>