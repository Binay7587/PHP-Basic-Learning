<?php

	$headers = "MIME-Version: 1.0 \r\n";
	$headers .= "Content-type:text/html; charset=utf8; \r\n";
	$headers .= "From: sandesh.bhattarai79@gmail.com \r\n";
	// $headers .= "Cc: binay7587@gmail.com \r\n";
	// $headers .= "Bcc: "

	$message = '<p style="color: red;">Test Message</p>';

	$bool = mail('pujanpoudelofficial@gmail.com', 'Test Email', $message, $headers);

	if($bool){
		echo "Email Sent";
	} else {
		echo "Error while sending email.";
	}