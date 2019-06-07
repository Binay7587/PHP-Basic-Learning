<?php
	/*
		1. if-else condition
		2. else-if condition
		3. switch-cases
			break, continue
		4. loop
			a. while
			b. do-while 
			c. for
			d. foreach
	*/ 

	// $a = true;
	// $a = 123;
	// $a = "this is tring";
	// $a = -123123;

	$a = 0;
	$a = false;
	$a = '';

	if($a){
		echo "This is if statement.";
		// if - body
	} else {
		echo "This is else statement";
		// else - body
	}

	echo "<br>";


	if($a):
		echo "This is if statement.";
		// if - body
	endif;

	echo "<br>";
	$y = null;
	if($a):
		$y = 123123123;
		// if - body
	endif;

	echo $y;


	$act = "update";			// add, edit, delete, read, update

	if($act == 'add'){
		echo "The value of act is add";
	} else {
		if($act == 'edit'){
			echo "The value of act is edit";
		} else {
			if($act == 'delete'){
				echo "The value of act is delete.";
			} else {
				if($act == 'read'){
					echo "The value of act is read";
				} else {
					echo "The value of act is Update";
				}
			}
		}
	}



	echo "<br>";

	if($act == 'add'){
		echo "The value of act is add";
	} else if($act == 'edit'){
		echo "The value of act is edit";
	} else if($act =='delete'){
		echo "the value of act is delete";
	} else if($act == 'read'){
		echo "The value of act is read";
	} else {
		echo "The value of act is update";
	}

	echo "<br>";
	if($act == 'add'):
		echo "The value of act is add";
	elseif($act == 'edit'):
		echo "The value of act is edit";
	elseif($act =='delete'):
		echo "the value of act is delete";
	elseif($act == 'read'):
		echo "The value of act is read";
	else:
		echo "The value of act is update";
	endif;

	$marks = 480;
	$total = 800;
	$percentage = $marks/$total*100;

	if($percentage >= 80){
		echo "Passed in distincition";
	} else if($percentage >= 60 && $percentage < 80){
		echo "Passed in first division";
	} else if($percentage >= 45 && $percentage < 60){
		echo "Passed in second division";
	} else if($percentage >= 35 && $percentage < 45){
		echo "Passed in third division";
	}else {
		echo "Sorry! You are failed";
	}




	/*
		$percentage >= 80 => Passed in distincition
		$percentage >=60 & < 80 => Passed in first div
		$percentage >=45 & < 60 => Passed in second div
		$percentage >=35 & < 45 => Passed in third div
		$percentage < 35 => sorry you are failed
	*/

		switch($percentage){
			case ($percentage >= 80):
				echo "Passed in distincition";
				break;
			case ($percentage >= 60 && $percentage < 80):
				echo "Passed in first division";
				break;
			case ($percentage >= 45 && $percentage < 60):
				echo "Passed in second division";
				break;
			case ($percentage >= 35 && $percentage < 45):
				echo "Passed in third division";
				break;	
			default:
				echo "Sorry! You are failed.";
				break;
		}