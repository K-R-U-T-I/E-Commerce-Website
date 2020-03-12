<?php

	$user_id = $_SESSION['user_id'];

	/*$sel = "SELECT * FROM `order` WHERE $user_id='$user_id'";
	$qry = mysqli_query($conn, $sel);
	$row = mysqli_fetch_assoc($qry);

	$order_id = $row['ord_id'];*/

	$order_id = $_SESSION['order_id'];

	$id=$_POST['id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$cname = $_POST['cname'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$adr1 = $_POST['adr1'];
	$pCode1 = $_POST['pin1'];
	$city1 = $_POST['city1'];

	$adr2 = $_POST['adr2'];
	$pCode2 = $_POST['pin2'];
	$city2 = $_POST['city2'];

	if (isset($_POST['create'])) {
		
		$insert = "INSERT INTO shipping (`user_id`,`order_id`,`fname`,`lname`,`company_name`,`email`,`contact_no`,`address1`,`pin1`,`address2`,`pin2`,`country`,`city`) VALUES ('$user_id','$order_id','$fname','$lname','$cname','$email','$number','$adr1','$pCode1','$adr2','$pCode2','$','$city')";
		$query = mysqli_query($conn, $insert);

		if ($query) {
			
			header('location:index.php?page=invoice_bill');
		}
		else
		{
			echo "<h1> Not </h1>";
		}
	}







?>