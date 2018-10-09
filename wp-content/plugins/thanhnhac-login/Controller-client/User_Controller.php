<?php 
	session_start();
	/**
	 * 
	 */
	require_once('../Model-client/UserModel.php');
	require_once('../Model-client/UserModelLogin.php');
	require_once('../Model-client/Course-registered.php');
	require_once('../Model-client/Topic.php');
	require_once('jwt.php');
	class User_Controller
	{
		public function register(){
			$username = isset($_POST['username'])? $_POST['username']: '' ;
			$password = isset($_POST['password'])? $_POST['password']: '' ;
			$password = md5($password);
			$fullname = isset($_POST['fullname'])? $_POST['fullname']: '' ;
			$email = isset($_POST['email'])? $_POST['email']: '' ;
			
			$user = new UserModel($username,$password,$fullname,$email);
			if($user->insertUser()){
				header("Location: http://localhost/thanhnhac/Intermediate.html?username=$username");
			}

		}

		public function login(){
			$username = isset($_POST['username'])? $_POST['username']: '' ;
			$password = isset($_POST['password'])? $_POST['password']: '' ;
			$password = md5($password);
			$user = new UserModelLogin($username, $password);
			$row = $user->authlogin();
			$_SESSION['id'] = $row['id'];
			if($row){
 				// Kiểm tra xem account đã chọn khóa học nào chưa, nếu chọn rồi thì chuyển sang trang cá nhân, nếu chưa chọn thì ta về trang giới thiệu khóa học pickcourse.php
 				$check = new CourseRegistered();
 				if($check->checkCourse($row['id'])){
 					require_once('../view-client/User.php');
 				}else{
 					header("Location: http://localhost/thanhnhac/wp-content/plugins/thanhnhac-login/view-client/pickcourse.php");
 				}
 				
			}else{
				header("Location: http://localhost/thanhnhac/?f=fail&username=$username");
			}
		}
		public function load_course(){
			$topic = new Topic();
			$topic->getTopic();
		}
	}
	$controller = isset($_POST['controller'])? $_POST['controller']: '';
	$action		= isset($_POST['action'])? $_POST['action']: '';
	$run = new $controller();
	$run->$action();
?>