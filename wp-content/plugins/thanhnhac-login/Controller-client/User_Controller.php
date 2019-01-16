<?php 
	session_start();
	/**
	 * 
	 */
	require_once('../Model-client/UserModel.php');
	require_once('../Model-client/UserModelLogin.php');
	require_once('../Model-client/Course-registered.php');
	require_once('../Model-client/Topic.php');
	require_once('../Model-client/Course.php');
	class User_Controller
	{
		
		public function register(){
			$username = isset($_POST['username'])? $_POST['username']: '' ;
			$password = isset($_POST['password'])? $_POST['password']: '' ;
			$password = md5($password);
			$fullname = isset($_POST['fullname'])? $_POST['fullname']: '' ;
			$phone = isset($_POST['phone'])? $_POST['phone']: '' ;
			$phone = intval($phone);
			$email = isset($_POST['email'])? $_POST['email']: '' ;
			$user = new UserModel($username,$password,$fullname,$email,$phone);
			if($user->insertUser()){
				header("Location: http://localhost/thanhnhac/Intermediate.html?username=$username");
			}else{
				header("Location: http://localhost/thanhnhac/register.html");
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
 				// Kiểm tra xem account đã chọn khóa học nào chưa, nếu chọn rồi thì chuyển sang trang cá nhân, nếu chưa chọn thì ta về trang đánh giá năng lực Markingforce.php
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
		public function load_topicchild($name){
			$topic = new Topic();
			$topic->getTopic($name);
		}
		public function load_course($id){
			$course = new Course();
			$course->getCourse($id);
		}
		public function register_course($insert, $account_id){
			$register = new CourseRegistered();
			$register->register_course_DB($insert, $account_id);
		}
	}
	$controller = isset($_POST['controller'])? $_POST['controller']: '';
	$action		= isset($_POST['action'])? $_POST['action']: '';
	$id         = isset($_POST['id'])? $_POST['id']: '';
	$name      = isset($_POST['name'])? $_POST['name']: '';
	$insert      = isset($_POST['insert'])? $_POST['insert']: '';
	$account_id = $_SESSION['id'];
	$run = new $controller();
	if(!empty($id))
		{
			$run->$action($id);
		}
	else if(!empty($name))
		{
			$run->$action($name);
		}
	else if(!empty($insert))
		{
			$run->$action($insert,$account_id);
		}
	else
		{
			$run->$action();
		}
		// echo '<pre>';
		// print_r($_POST['insert']);
		// echo '</pre>';
?>