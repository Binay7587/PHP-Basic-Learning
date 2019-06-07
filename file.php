<?php	
	require 'functions.php';

	$file = 'user.json';

	$form_data = $_POST;

	$data = array();
	$data[] = $form_data;
	$json_string = json_encode($data);

	if(file_exists($file)){
		$old_data = file_get_contents($file); // old
		if($old_data){
			$old_data = json_decode($old_data, true);	// covert json string to array
			$old_data[] = $form_data;
			$json_string = json_encode($old_data);
		}
	}

	$success = file_put_contents($file, $json_string);	// bool

	if($success){
		echo "Data stored successfully.";
	} else {
		echo "Error storing data.";
	}