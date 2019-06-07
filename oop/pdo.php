<?php
	/*
		PHP Data object
	
		a. Connect
		b. Sql query
		c. PDO, prepare Stmnt
			value binding
		d. Stmt => execute
			fetch data

	*/

	try{

		$conn = new PDO("mysql:host=loclhost;dbname=php_12_new;", "root","sandesh123");	// connect
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	// sets attribute

		$id = 4;
		$status = 'active';

		$sql = "SELECT * FROM users_table WHERE id = :key AND status = :key_1";
		$sql = "SELECT * FROM users_table WHERE id = 1";

		// mysqli_real_escape_string($str);

		$stmt = $conn->prepare($sql);	// PDO Statment
		
		/*$stmt->bindValue(":key", $id, PDO::PARAM_INT);
		$stmt->bindValue(":key_1", $status, PDO::PARAM_STR);	// PARAM_BOOL, PARAM_NULL*/

		$stmt->execute();	// stmnt run

		$data = $stmt->fetchAll(PDO::FETCH_OBJ);

		if(!$data){
			throw new Exception('Data not found.');
		}	

		echo "<pre>";
		print_r($data);
	} catch(PDOException $e){
		// 0-4, 2 not used

		error_log($e->getMessage()."\r\n",3,'error.log');

		echo "PDO: ".$e->getMessage();
	} catch(Exception $e){
		echo "General: ".$e->getMessage();
	} finally{
		echo "Here";
	}


	echo "Here";