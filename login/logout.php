<?php
	session_start();
	session_destroy();

	if(isset($_COOKIE, $_COOKIE['auth_user'])){
		// cookie destory
		setcookie('auth_user', null, (time()-60), '/php_12');
	}
	header('location: ./');
	exit;