<?php
	/*

		Array(
			[0] => 1,
			[1] => 2,
			[2] => 3,
			[3] => 4
		)
	*/

	/*$person = array( 
					"User one", 
					"Kathmandu", 
					"sandesh@gmail.com", 
					1234567890
				);	// indexive


	$person_1 = ["userone@gmail.com", "User two", "Lalitpur", 9874563210];	// indexive
	$person_2 = ["User Three",  "userone@gmail.com", "Lalitpur",9874563210];	// indexive

*/
	$all_users = array(
			array( 
				'name' =>"User One", 
				'address' => "Kathmandu", 
				'email' => "sandesh@gmail.com", 
				'phone' => 1234567890
			),
			[
				'email' => "userone@gmail.com", 
				'name' => "User two", 
				'address' => "Lalitpur", 
				'phone' => 9874563210
			],
			[
				'name' => "User Three", 
				'email' => "userone@gmail.com",
				'address' =>  "Lalitpur",
				'phone' => 9874563210]
	);
	echo "<pre>";
	// var_dump($all_users);
	print_r($all_users);
	echo "</pre>";

	$bool = false;
	$null = '';
	$num = 0;
	
	?>

<!DOCTYPE html>
<html>
	<head>
		<title>Array PHP</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<table class="table">
						<thead class="thead-dark">
							<th>S.N</th>
							<th>Name</th>
							<th>Address</th>
							<th>Phone</th>
							<th>Email</th>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td><?php echo $all_users[0]['name'];?></td>
								<td><?php echo $all_users[0]['address']; ?></td>
								<td><?php echo $all_users[0]['email']; ?></td>
								<td><?php echo $all_users[0]['phone']; ?></td>
							</tr>
							<tr>
								<td>2</td>
								<td><?php echo $all_users[1]['name'];?></td>
								<td><?php echo $all_users[1]['address']; ?></td>
								<td><?php echo $all_users[1]['email']; ?></td>
								<td><?php echo $all_users[1]['phone']; ?></td>

							</tr>
							<tr>
								<td>3</td>
								<td><?php echo $all_users[2]['name'];?></td>
								<td><?php echo $all_users[2]['address']; ?></td>
								<td><?php echo $all_users[2]['email']; ?></td>
								<td><?php echo $all_users[2]['phone']; ?></td>			
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>