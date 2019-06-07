<?php
require 'connect.php';
$act = 'add';

if(isset($_GET, $_GET['id']) && !empty($_GET['id'])){
	$act ='update';
		$id = (int)$_GET['id'];

		if($id <= 0){
			header('location: list.php');
			exit;
		}

		$sql = "SELECT * FROM users_table WHERE id = ".$id;
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <= 0){
			header('location: list.php');
			exit;	
		}

		$user_info = mysqli_fetch_assoc($query);

		/*echo "<pre>";
		print_r($user_info);*/
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Form Page</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<h4 class="text-center"><?php echo ucfirst($act) ?> User</h4>
					<form action="db.php" method="post" class="form" enctype="multipart/form-data">
						
						<div class="form-group row">
							<label for="" class="col-3">Full Name:</label>
							<div class="col-7">
								 <input type="text" class="form-control form-control-sm" value="<?php echo @$user_info['full_name'] ?>" name="full_name" required placeholder="Enter Your name">
								
							</div>
						</div>


						<div class="form-group row">
							<label for="" class="col-3">User Name:</label>
							<div class="col-7">
								 <input type="text" class="form-control form-control-sm" value="<?php echo @$user_info['user_name'] ?>" name="user_name" required placeholder="Enter Your name">
								
							</div>
						</div>

						<div class="form-group row">
							<label for="" class="col-3">Email:</label>
							<div class="col-7">
								<input type="email" class="form-control form-control-sm" value="<?php echo @$user_info['email'] ?>" name="email" required placeholder="Enter Your email">								
							</div>
						</div>

						<!-- <div class="form-group row">
							<label for="" class="col-3">Profile Image:</label>
							<div class="col-7">
								<input type="file" name="image" accept="image/*" required>
										
							</div>
						</div> -->

						<div class="form-group row">
							<label for="" class="col-3">Role:</label>
							<div class="col-7">
								<select name="role" id="role" class="form-control">
									<option value="admin" <?php echo (isset($user_info, $user_info['role']) && $user_info['role'] == 'admin') ? 'selected' : '' ?> >Admin</option>
									<option value="user" <?php echo (isset($user_info, $user_info['role']) && $user_info['role'] == 'user') ? 'selected' : '' ?>>User</option>
								</select>
							</div>
						</div>
						
						<div class="form-group row">
							<label for="" class="col-3"></label>
							<div class="col-7">
								<input type="hidden" name="user_id" value="<?php echo @$user_info['id']; ?>">
								<input type="submit" value="<i>Submit Form</i>" class="btn btn-success">
								<button type="submit"  class="btn btn-success">
									<i>Submit Form</i>
								</button>
								<button type="reset" class="btn btn-danger">
									Cancel
								</button>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</body>
</html>