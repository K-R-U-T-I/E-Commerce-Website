<?php
	session_start();
	ob_start();
	/*$conn = mysqli_connect('localhost', 'kruti', 'tulika1234', 'eCommerce');*/
	$conn = mysqli_connect('localhost', 'root', '', 'eCommerce');

	if (!$conn) {
		die("SERVER NOT CONNECTED!!" .mysqli_error());
	}

?>