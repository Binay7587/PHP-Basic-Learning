<!DOCTYPE html>
<html>
	<head>
		<title>First Page</title>
	</head>	
	<body>
		<p style="background-color: <?php echo 'red';?>;">
			<?php 
				echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt architecto tempora ratione tempore eum, laboriosam nam mollitia ab alias optio odio quo tenetur, hic ea, eaque maxime saepe suscipit ex.";


				/*Data types*/
			?>
		</p>

		<p>
			a. String/ text
			b. Numbers 
			c. Array
			d. Object
			e. Boolean
			f. null, '', ""

		<br>
		<br>




	<?php 

		$first_name = "Sandesh";
		$num_1 = 123;

		$num_2 = '123'; // 0

		$sum = $num_1 + $num_2;		// 246

		echo $sum;		// 			246
		echo "<br>";

		echo "$sum";		//  246
		echo "<br>";
		
		echo '$sum';		// $sum
		echo "<br>";

			//	$sum = 246
		$sum  = 1234;

		/*Constants*/
		$val = 9.8;

		const GRAVITY = 9.8;		// error


		define("GRAVITY_1", $val);


		echo $sum*GRAVITY;
		

		/*$firstName
		$_first_name
		$firstName*/
	?>









		</p>

	</body>
</html>