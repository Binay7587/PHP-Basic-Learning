<?php 
session_start();

if(!isset($_SESSION, $_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] != 1){
	header('location: ./');
	exit;
}

echo $_SESSION['success'];

?>

<a href="logout.php">
	Logout
</a>