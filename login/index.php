<?php session_start();

$allowed = array("127.0.0.1", "192.168.1.1", "::1");

if(!in_array($_SERVER['REMOTE_ADDR'], $allowed)){
	die('You are not allowed to access this system');
}
if(isset($_SESSION, $_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == 1){
	header('location: dashboard.php');
	exit;
}


if(isset($_COOKIE, $_COOKIE['auth_user']) && $_COOKIE['auth_user'] == 1){
	$_SESSION['is_logged_in'] = 1;
	$_SESSION['success'] = "You are redirected from cookie.";
	header('location: dashboard.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" href="../css/bootstrap.min.css">
	</head>
	<body>
		
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h4 class="text-center">Login: </h4>
					<hr>
				</div>

				<div class="col-12">
					<?php 
						// flash message
						echo @$_SESSION['error'];
						unset($_SESSION['error']);
					?>
					<form action="login.php" method="post" class="form">
						<div class="form-group row">
							<label for="" class="col-3">User Name:</label>
							<div class="col-7">
								<input type="email" name="email" required class="form-control" placeholder="Enter your email ">
							</div>
						</div>

						<div class="form-group row">
							<label for="" class="col-3">Password:</label>
							<div class="col-7">
								<input type="password" name="password" required class="form-control">

							</div>
						</div>

						<div class="form-group row">
							<label for="" class="col-3"></label>
							<div class="col-7">
								<input type="checkbox" name="remember_me" value="1"> Remeber Me

							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-3"></label>
							<div class="col-7">
								<button type="submit" class="btn btn-success">
									Submit
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>