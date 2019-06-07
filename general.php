<?php
	include_once 'functions.php';

	require_once 'functions.php';

	// date_default_timezone_set('America/Chicago');
	// 2019-05-29 12:06:53 PM

	// January-December -> F
	// Jan-Dec, M
	// 05 => m
	// d => 01- 31
	// j => 1-31
	// l => Sunday - Saturday
	// D => Sun-Sat
	// S => st, nd, rd, th, j
	// z, w

	// h, S, F, Y

	// 29th of May, 2019

	$today = date('Y-m-d h:i:s A');
	
	echo $today;
	echo "<br>";

	$seven_days_later = $today." -200 year";
	// 1970-01-01 00:00:00
	$seven_days_later = date('Y-m-d h:i:s A', strtotime($seven_days_later));
	
	$timezone = date_default_timezone_get();

	echo $timezone;
	
	debug($timezone);

	echo "<br>";

	echo date('Y-m-d', strtotime($seven_days_later));
	echo "<br>";
	echo $seven_days_later;