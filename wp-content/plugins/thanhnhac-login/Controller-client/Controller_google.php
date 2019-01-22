<?php
	session_start();
	require_once "../Model-client/Course-registered.php";
	require_once "../googlelogin/config.php";
	require "../Create-table/connect.php";
	
	if(isset($_POST['phone'])){
		// Nếu có dữ liệu phone được gửi lên
		$phone = (int)$_POST['phone'];
		$id = $_SESSION['id'];
		$sql1 = "UPDATE `account` SET `phone`='$phone' WHERE `id`='$id'";
		if(mysqli_query( $conn, $sql1 )){
			// update phone thành công
			// Kiểm tra đã đăng kí khóa học chưa
			$courseregitered = new CourseRegistered();
			if($courseregitered->checkCourse($row['id'])){
				// có rồi thì chuyển đến trang cá nhân
				header("Location: http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/view-client/User.php");
			}else{
				// chưa có thì chuyển đến trang chọn khóa học
				header("Location: http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/view-client/pickcourse.php");
			}
		}else{
			// update phone không thành công, chuyển về nhập phone
			header("Location: http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/view-client/Enterphone.php");
		}
	}else{
		$gClient->authenticate($_GET['code']);
		$access_token = $gClient->getAccessToken();
		$gClient->setAccessToken($access_token);

		$oAuth = new Google_Service_Oauth2($gClient);
		$userData = $oAuth->userinfo_v2_me->get();


		$email = $userData['email'];
		$str = $email;
		$str = str_replace( '@gmail.com', '', $str );
		$struser = $str."gg";
		$fullname = $userData['familyName'].$userData['givenName'];

		$sql1 = "SELECT * FROM `account` WHERE `email`= '$email'";
		$result = mysqli_query( $conn, $sql1 );
		$row = mysqli_fetch_assoc($result);
		$courseregitered = new CourseRegistered();
		$_SESSION['id'] = $row['id'];
		// Kiểm tra tài khoản đã được đăng kí hay chưa
		if($row){
			// Tk được đkí rồi thì kiểm tra phone đã có hay chưa
			$sql1 = "SELECT `phone` FROM `account` WHERE `email`= '$email'";
			$result = mysqli_query( $conn, $sql1 );
			$row = mysqli_fetch_assoc($result);
			if(empty($row['phone'])){
				// phone chưa có thì chuyển trang nhập phone
				header("Location: http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/view-client/Enterphone.php");
			}else{
				// phone có rồi thì kiểm tra có khóa học đkí hay chưa
				if($courseregitered->checkCourse($row['id'])){
					// có rồi thì chuyển đến trang cá nhân
					header("Location: http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/view-client/User.php");
				}else{
					// chưa có thì chuyển đến trang chọn khóa học
					header("Location: http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/view-client/pickcourse.php");
				}
			}
			
		}else{
			// tk chưa được đăng kí thì insert
			$sql2 = "INSERT INTO `account` (`username`, `email`, `fullname`) VALUES ('$struser', '$email', '$fullname')";
			if(!mysqli_query( $conn, $sql2 )){
				echo "Lỗi đăng nhập";
			}else{
				$sql1 = "SELECT * FROM `account` WHERE `email`= '$email'";
				$result = mysqli_query( $conn, $sql1 );
				$row = mysqli_fetch_assoc($result);
				$_SESSION['id'] = $row['id'];
				header("Location: http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/view-client/Enterphone.php");
				}
			}
		}

