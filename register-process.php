
<?php
ob_start();
if(isset($_POST) && !empty($_POST)){
		if($_FILES['image']['error'] == 0){
		$allowed = array('jpg','png','bmp','jpeg','gif','svg');

		$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);	
		if(in_array($ext, $allowed)){
			if($_FILES['image']['size'] <= 3000000000){
				// Image-20190524123305123.png
				$loc = "uploads/images/";
				
				if(!is_dir($loc)){
					mkdir($loc, 0777, true);
				}
				$file = "Image-".date('Ymdhis').rand(0,999).".".$ext;
				$success =	move_uploaded_file($_FILES['image']['tmp_name'], $loc.$file);
				if($success){
					?>
					<img src="http://localhost/php_12/<?php echo $loc.$file;?>" alt="">
					<?php
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
} else {
	@header('location: register.php');
	exit;
}

ob_flush();