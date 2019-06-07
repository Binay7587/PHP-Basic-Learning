<!DOCTYPE html>
<html>
	<head>
		<title>Loop</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
		
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h4 class="text-center">User List</h4>
					<hr>
				</div>
				<div class="col-12">
					<table class="table ">
						<thead class="thead-dark">
							<th>S.N</th>
							<th>Name</th>
							<th>Address</th>
							<th>Phone</th>
							<th>Email</th>
						</thead>
						<tbody>
							<?php
								$all_users = array(
									array( 
										'name' =>"User One", 
										'address' => "Kathmandu", 
										'email' => "sandesh@gmail.com", 
										'phone' => 1234567890
									),
									array(
										'email' => "userone@gmail.com", 
										'name' => "User two", 
										'address' => "Lalitpur", 
										'phone' => 9874563210
									),
									[
										'name' => "User Three", 
										'email' => "userone@gmail.com",
										'address' =>  "Lalitpur",
										'phone' => 9874563210
									],
									[
										'name' => "User Four", 
										'email' => "userfour@gmail.com",
										'address' =>  "Bhaktapur",
										'phone' => 7894561230
									]
							);

/*								$array = array(
										array(),
										[],
										[],
										[]
								);
*/								foreach($all_users as $key => $user_info){
								?>
								<tr>
									<td><?php echo $key+1 ?></td>
									<td><?php echo $user_info['name'] ?></td>
									<td><?php echo $user_info['address'] ?></td>
									<td><?php echo $user_info['phone'] ?></td>
									<td><?php echo $user_info['email'] ?></td>
								</tr>
								<?php
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>


