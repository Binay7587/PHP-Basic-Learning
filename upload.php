<?php
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";


	if($_FILES['image']['error'] == 0){

		$allowed = array('jpg','jpeg','png','gif','bmp','svg');

		$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
		
		if(in_array($ext, $allowed)){
			if($_FILES['image']['size'] <= 3000000){

				// Image-20190524123305123.png
				$loc = "uploads/".$_POST['dir']."/";

				if(!is_dir($loc)){
					mkdir($loc, 0777, true);
				}

				$file = "Image-".date('Ymdhis').rand(0,999).".".$ext;

				$success =	move_uploaded_file($_FILES['image']['tmp_name'], $loc.$file);

				if($success){
					echo "File uploaded";
				} else {
					echo "Error uploading file.";
				}
			} else {
				echo "File size exceeds 3MB.";
			}
		}	else {
			echo "File format not supported.";
		}	
	} else {
		echo "There is error in file.";
	}