<!DOCTYPE html>
<html>
	<head>
		<title>File Upload</title>
	</head>
	<body>
		
		<form action="multi-upload.php" method="post" enctype="multipart/form-data">
			Dir Name: <input type="text" name="dir" required>
			Image Upload: <input type="file" name="image[]" multiple accept="image/*">
			<br>
			<button type="submit">
				Submit
			</button>
		</form>
	</body>
</html>