<?php 
	/*
		1. Arithematic Operators
			+, -, *, /, %, ()

		2. Increment or decrement operator
			++, --
		
		3. Assignment Operator
			=, +=, -=, *=, /=, %=, .=

		4. Concatination or sting operator
			.

		5. Comparision Operation
			<, >, <=, >=, !=, <>, ==, ====, !==

		6. Logical Operator
			&&, ||, !

		7. Conditional Or Ternary Operator
			(expr) ? true condition : false condition;


		8. Error Suppressor
		 	@
	*/

		$a = 10;
		$a++;	// 11
		$a--;  // 10

		++$a;
		--$a;

		echo $a++;			// 10
		echo "<br>";
		
		echo $a;			// 11
		echo "<br>";

		echo ++$a;			// 12

		$a += 3; 			// $a = $a +3;


		$first = "Sandesh";
		$last = "Bhattarai";

		$first .= " ".$last;	// Sandesh Bhattarai

		echo $first." ".$last;

		$a = 123;
		$b = '123';

		$result = !(($a === $b) || ($a == $b));		// true, false
		$c = $a+$b;	// 246

		$sum = ($a !== $b) ? ($a+$b) : 0;

		echo ($a / $b >=0) ? "Value of a is either 0 or greater than $b" : "Value of b is greater than a";
		echo "<br>";
		echo "<br>";

		echo @$xyz;	// 
		echo "<br>";
		