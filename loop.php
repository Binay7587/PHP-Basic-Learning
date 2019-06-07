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
									'first' => array( 
										'name' =>"User One", 
										'address' => "Kathmandu", 
										'email' => "sandesh@gmail.com", 
										'phone' => 1234567890
									),
									'second' =>[
										'email' => "userone@gmail.com", 
										'name' => "User two", 
										'address' => "Lalitpur", 
										'phone' => 9874563210
									],
									'third' =>[
										'name' => "User Three", 
										'email' => "userone@gmail.com",
										'address' =>  "Lalitpur",
										'phone' => 9874563210
									],
									'fourth' =>[
										'name' => "User Four", 
										'email' => "userfour@gmail.com",
										'address' =>  "Bhaktapur",
										'phone' => 7894561230
									]
							);
							$length = count($all_users);		// length of the array
							$i=0;			// last = size -1 
							while($i < $length){
							?>	
							<tr>
								<td><?php echo ($i+1); ?></td>
								<td><?php echo $all_users[$i]['name'] ?></td>
								<td><?php echo $all_users[$i]['address'] ?></td>
								<td><?php echo $all_users[$i]['phone'] ?></td>
								<td><?php echo $all_users[$i]['email'] ?></td>
							</tr>
							<?php
								$i++;
							}


							$i=0;			// last = size -1 
							do{
							?>	
							<tr>
								<td><?php echo ($i+1); ?></td>
								<td><?php echo $all_users[$i]['name'] ?></td>
								<td><?php echo $all_users[$i]['address'] ?></td>
								<td><?php echo $all_users[$i]['phone'] ?></td>
								<td><?php echo $all_users[$i]['email'] ?></td>
							</tr>
							<?php
								$i++;
							}while($i < $length);


							for($i=0; $i<$length; $i++){
							?>	
							<tr>
								<td><?php echo ($i+1); ?></td>
								<td><?php echo $all_users[$i]['name'] ?></td>
								<td><?php echo $all_users[$i]['address'] ?></td>
								<td><?php echo $all_users[$i]['phone'] ?></td>
								<td><?php echo $all_users[$i]['email'] ?></td>
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


<?php
	$i = 11;

	while($i <=10){
		echo $i++;	// 1
		echo "&nbsp;";
	}

	echo "<br>";
	$i = 11;

	do{
		echo $i++;	// 1
		echo "&nbsp;";
	}while($i <=10);


	echo "<br>";
	for($i=1; $i<=10; $i++){
		echo $i;
		echo "&nbsp;";
	}


