<?php 

	/*echo "<pre>";
	print_r($_FILES);
	echo "</pre>";*/

	$allowed = array('jpg','jpeg','png','gif','bmp','svg');
	$loc = "uploads/".$_POST['dir']."/";
	if(!is_dir($loc)){
		mkdir($loc, 0777, true);
	}

	$file = $_FILES['image'];
	$size = count($file['name']);

	for($i=0; $i<$size; $i++){
		if($file['error'][$i] == 0){
			if($file['size'][$i] <= 30000000){
				$ext = pathinfo($file['name'][$i], PATHINFO_EXTENSION);
				if(in_array($ext, $allowed)){
					$file_name = "Image-".date('Ymdhis').rand(0,999).".".$ext;
					$success = move_uploaded_file($file['tmp_name'][$i], $loc.$file_name);
					if($success){
						echo "<img src='".$loc.$file_name."' style='max-width: 150px' />";
						// unlink($loc.$file_name);	// deletes file from server
						// rmdir();
					} else {

						echo "Error uploading File.<br>";
					}
				} else {
					echo "File format not supported. <br>";
				}
			} else {
				echo "File size should be less than or equal to 3MB. <br>";
			}
		} else {
			echo "Error in file. <br>";
		}
	}