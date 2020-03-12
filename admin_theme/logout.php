<?php
	session_start();
	session_destroy();
	 //$_SESSION['admin_id'];
	 header('location:login.php');


 ?>