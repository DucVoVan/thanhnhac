<?php
	require_once("../Create-table/connect.php");
	if(isset($_POST["id"]))
	{
		$value = mysqli_real_escape_string($conn, $_POST["value"]);
	 // $query_check = "SELECT * FROM user WHERE ".$_POST["column_name"]."='".$_POST["value"]."'";
	 // $result = mysqli_query($conn, $query_check);
	 // $row = mysqli_fetch_assoc($result);
	 // if(isset($row['id'])){
		// echo 'fail';
	 // }else{
		$query = "UPDATE account SET ".$_POST["column_name"]."='".$value."' WHERE id = '".$_POST["id"]."'";
		if(mysqli_query($conn, $query))
		{
			echo 'Data Updated';
		}else{
			echo mysqli_error($conn);
		}
	 // }
	}
?>