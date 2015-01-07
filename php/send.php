<?php

	$emailSubject = 'Email from Website!';
	$webMaster = 'richardschmidt07@gmail.com';

	function died($error) {

		// Error codes goes here

		echo "We are sorry, but there were errors found";
		echo "These errors appear below<br><br>";
		echo $error."<br><br>";
		echo "Please go back and fix these errors.<br><br>";
		die();
	}

	$nameField = $_POST ['contact-name'];
	$emailField = $_POST ['contact-email'];
	$msgField = $_POST ['contact-msg'];

	$body = <<<EOD
	<br><hr><br>
	Name: $nameField <br>
	Email: $emailField <br>
	Message: $msgField <br>
	EOD;

	$headers ="From: $email\r\n"; // This takes the email and displays it as who this email is from.
	$headers .="Content-type: text/html\r\n"; //This tells the server to turn the coding into text
	$success = mail($webMaster, $emailSubject, $body, $headers); //This tells the server what to do.
	

?>