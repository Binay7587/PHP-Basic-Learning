<?php 
	ob_start();
	session_start();

	$user_name = "admin@test.com";
	$password = 'admin123';

	if(isset($_POST, $_POST['email'], $_POST['password']) && !empty($_POST)){
		if($_POST['email'] == $user_name){
			if($_POST['password'] == $password){
				$_SESSION['is_logged_in'] = 1;
				$_SESSION['success'] = 'You are logged in from session';

				if(isset($_POST['remember_me']) && $_POST['remember_me'] == 1){
					// set Cookie
					setcookie('auth_user', true, time()+86400, '/php_12');
				}


				header('location: dashboard.php');
				exit;
			} else {
				$_SESSION['error'] = "Incorrect Password.";
				header('location: ./');
				exit;
			}
		} else {
			$_SESSION['error'] = "Invalid username.";
			header('location: ./');
			exit;	
		}
	} else {
		$_SESSION['error'] = "Unauthorized access.";
		header('location: ./');
		exit;
	}
	ob_flush();