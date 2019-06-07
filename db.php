<?php
	/*
		a. Connect with Server, mysql
		b. Select DB from server
		c. Prepare Sql, string php
		d. Execute sql, query run
		e. Fetch data
	*/
	require 'connect.php';
	
	/*

		C => INSERT
		R => SELECT
		U => UPDATE
		D => DELETE


		INSERT
			a. Single Row
				i. INSERT INTO table_name SET 
					column_name_1 = value_1,
					column_name_2 = value_2,
					......,
					column_name_n = value_n

					e.g. 
					INSERT INTO users_table SET
						full_name = 'Sandesh Bhattarai',
						user_name = 'sandesh',
						email = 'sandesh@knockoutsystem.com',
						role = 'admin'

				ii INSERT INTO table_name 
					(column_name_1, column_name_2, .... ,column_name_n)
					VALUES
					(value_1, value_2, ...... ,  value_n)
					
					e.g.
					INSERT INTO users_table
					(full_name,user_name,email,role)
					VALUES
					('Sandesh Bhattarai','sandesh','sandesh@knockoutsystem.com','admin');


			b. Multiple Row
					INSERT INTO table_name 
					(column_name_1, column_name_2, .... ,column_name_n)
					VALUES
					(value_1, value_2, ...... ,  value_n),
					(value_1, value_2, ...... ,  value_n),
					(value_1, value_2, ...... ,  value_n)


		
	*/

	/*echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	exit;*/

	if(isset($_POST['user_id']) && !empty($_POST['user_id'])){
		$sql = "UPDATE users_table SET
							full_name = '".$_POST['full_name']."',
							user_name = '".$_POST['user_name']."',
							email = '".$_POST['email']."',
							role = '".$_POST['role']."' WHERE id = ".(int)$_POST['user_id'];
	} else {	
		$sql = "INSERT INTO users_table SET
							full_name = '".$_POST['full_name']."',
							user_name = '".$_POST['user_name']."',
							email = '".$_POST['email']."',
							role = '".$_POST['role']."'";
	}

	$query = mysqli_query($conn, $sql);	// execute cubrid_query(3)

	if($query){
		// $last_insert = mysqli_insert_id($conn);

		// insert into another table

		header('location: list.php');
		exit;
	} else {
		die(mysqli_error($conn));
	}
/*	echo "<pre>";
	print_r($conn);
	echo "</pre>";*/