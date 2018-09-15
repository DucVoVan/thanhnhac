<?php 
	/**
	 * 
	 */
	require_once('../Model-client/UserModel.php');
	require_once('../Model-client/TeacherModel.php');
	class User_Controller
	{
		public function register(){
			$username = isset($_POST['username'])? $_POST['username']: '' ;
			$password = isset($_POST['password'])? $_POST['password']: '' ;
			$password = md5($password);
			$fullname = isset($_POST['fullname'])? $_POST['fullname']: '' ;
			$email = isset($_POST['email'])? $_POST['email']: '' ;
			
			$user = new UserModel;
			$user->fetchAll($username,$password,$fullname,$email);
			if($user->insertUser()){
				header("Location: http://localhost/thanhnhac/Intermediate.html?username=$username");
			}

		}

		public function login(){
			$username = isset($_POST['username'])? $_POST['username']: '' ;
			$password = isset($_POST['password'])? $_POST['password']: '' ;
			$password = md5($password);
			$user = new UserModel;
			$row = $user->getUser($username,$password);
			if($row){
				// echo $row['id'];
				require_once('../view-client/User.php');
			}else{
				$teacher = new TeacherModel;
				$row = $teacher->getTeacher($username,$password);
				if($row){
					echo "Đăng nhập teacher thành công!";
				}
			}
		}
	}
	$controller = isset($_POST['controller'])? $_POST['controller']: '';
	$action		= isset($_POST['action'])? $_POST['action']: '';
	$run = new $controller();
	$run->$action();
?>