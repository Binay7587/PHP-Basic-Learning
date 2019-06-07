<?php

	$conn = mysqli_connect('localhost', 'root', 'sandesh123') or die('Error establishing database connection');
	// $conn->select_db('php_12_new');

	mysqli_select_db($conn, "php_12_new") or die("Error: ".mysqli_error($conn));