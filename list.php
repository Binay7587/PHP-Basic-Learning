<?php
	/*
		a. SELECT fields FROM table;	
			every data rows fetch
				fields => column_names, 
				*
			e.g. SELECT * FROM users_table;
		
		b. SELECT fields FROM table
			WHERE clause;

			e.g SELECT * FROM users_table WHERE role = 'user'

		c. SELECT fields FROM table
			WHERE clause
			ORDER BY column_name ASC/DESC
			
			e.g. SELECT * FROM users_table 
					ORDER BY created_at DESC 

		d. SELECT fields FROM table
			WHERE clause
			ORDER BY clause
			LIMIT start, count


			e.g. SELECT * FROM users_table
					ORDER BY id DESC
					LIMIT 0, 10
		
		e. SELECT
				table_1.column_1,
				table_1.column_2,
				table_2.column_1 AS column_name_unique,
				....
			FROM table_1
				LEFT/RIGHT JOIN table_2 ON table_1.column_1 = table_2.column_1
			WHERE table_1.column_1, table_2.column_2
			GROUP BY table_1.column_2, table_1.column_1
			ORDER BY table_1.column_1
			LIMIT start, count

			e.g. SELECT 
						users.id, 
						users.name, 
						(SELECT title FROM roles WHERE users.role_id = roles.id) as role_title
				FROM users


	*/

	require 'connect.php';
	$sql = "SELECT * FROM users_table ";

	// $sql = "SELECT * FROM users_table WHERE (role = 'admin' AND status = 'active') ";

	$sql = "SELECT * FROM users_table 
					ORDER BY role ASC, id DESC";

	$sql = "SELECT * FROM users_table
					ORDER BY id DESC
					LIMIT 0, 10";


	$query = mysqli_query($conn, $sql);

	if(mysqli_num_rows($query) <= 0){
		echo "No data found";
		exit;
	} else {
		$data = array();
		while($row = mysqli_fetch_assoc($query)){
			$data[] = $row;
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>User List</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
		
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h4 class="text-center">User List</h4>
					<hr>
					<a href="register.php">Add More User</a>
				</div>
				<div class="col-12">
					<table class="table">
						<thead class="thead-dark">
							<th>S.N</th>
							<th>Full Name</th>
							<th>User Name</th>
							<th>Email</th>
							<th>Status</th>
							<th>Role</th>
							<th>Created At</th>
							<th>Action</th>
						</thead>
						<tbody>
							<?php 
								if($data){
									foreach($data as $key => $user_data){
										?>
										<tr>
											<td><?php echo ($key+1) ?></td>
											<td><?php echo $user_data['full_name'] ?></td>
											<td><?php echo $user_data['full_name'] ?></td>
											<td><?php echo $user_data['email'] ?></td>
											<td><?php echo $user_data['status'] ?></td>
											<td><?php echo ucfirst($user_data['role']) ?></td>
											<td><?php echo $user_data['created_at'] ?></td>
											<td>
												<a href="register.php?id=<?php echo $user_data['id'];?>">
													Edit
												</a>
												<a href="update-delete.php?id=<?php echo $user_data['id'];?>" onclick="return confirm('Are you sure you want to delete this data?')">
													Delete
												</a>
											</td>
										</tr>
										<?php
									}
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>