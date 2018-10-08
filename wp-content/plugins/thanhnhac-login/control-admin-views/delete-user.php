<?php
	require_once("../Create-table/connect.php");
		if(isset($_POST["id"])){
			$query = "DELETE FROM account WHERE id = '".$_POST["id"]."'";
			if(mysqli_query($conn, $query))
				{
				echo 'Dữ liệu đã được xóa!';
				}else{
					echo mysqli_error($conn);
				}
	}
?>