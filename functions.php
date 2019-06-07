<?php
	function debug($data, $is_exit = false){
		echo "<pre>";
		print_r($data);
		echo "</pre>";
		if($is_exit){
			exit;
		}
	}
/*



	$a = 10; $b = 15;
	// function defination
	function addNumbers(){
		global $a, $b;
		$a = ($a+$b);
	}

	function addTwoNums(&$a, $b){
		$a = $a+$b;
	}

	$array = array("this",'is','a','string','data');

	debug($array);


	sort($array);		// reference


	debug($array);



	addTwoNums($a, $b);

	echo $a;	// 25
*/