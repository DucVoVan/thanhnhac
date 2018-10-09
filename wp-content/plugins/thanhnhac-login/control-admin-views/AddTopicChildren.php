<?php
	require_once("../Create-table/connect.php");
	$topic = isset($_POST['topic'])? $_POST['topic']: '';
	$topicchild = isset($_POST['topicchild'])? $_POST['topicchild']: '';


	$sql = "SELECT `id` FROM `topic` WHERE `name` = '$topic'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$topicid = $row['id'];

	$sql2 = "SELECT `id` FROM `topic-children` WHERE `name` = '$topicchild'";
	$result = mysqli_query($conn, $sql2);
	$row = mysqli_fetch_assoc($result);
	if(isset($row['id'])){
		$sql4 = "SELECT `topicid` FROM `topic-children` WHERE `name` = '$topicchild'";
		$result = mysqli_query($conn, $sql4);
		$check = "no";
		while($row = mysqli_fetch_assoc($result)){
			if($row['topicid'] == $topicid){
				echo "duplicate";
				$check = "yes";
				break;
			}
		}
		if($check == "no"){
			$sql3 = "INSERT INTO `topic-children` (`topicid`, `name`) VALUES ('$topicid','$topicchild')";
			if(mysqli_query($conn, $sql3)){
				echo "ok";
			}else{
				echo "fail";
			}
		}
	}else{
		$sql3 = "INSERT INTO `topic-children` (`topicid`, `name`) VALUES ('$topicid','$topicchild')";
			if(mysqli_query($conn, $sql3)){
				echo "ok";
			}else{
				echo "fail";
			}
	}
	
?>