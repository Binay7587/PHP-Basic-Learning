<?php
	require 'connect.php';

	/*
		UPDATE query
			UPDATE table SET 
				column_name = value,
				column_name = value,...., 
				column_name_n = value_n
			WHERE clause


		DROP TABLE table_name; 
		DROP DATABASE db_name;


		DELETE FROM table 
			WHERE clause;

		DELETE FROM table;	=>
		TRUNCATE table;
	*/

	if(isset($_GET, $_GET['id']) && !empty($_GET['id'])){
		$id = (int)$_GET['id'];

		if($id <= 0){
			header('location: list.php');
			exit;
		}

		$sql = "SELECT * FROM users_table WHERE id = ".$id;
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <= 0){
			header('location: list.php');
			exit;	
		}

		$sql = "DELETE FROM users_table WHERE id = ".$id;
		$query = mysqli_query($conn, $sql);
		if($query){
			header('location: list.php');
			exit;
		} else {
			header('location: list.php');
			exit;
		}
	} else {
		header('location: list.php');
		exit;
	}