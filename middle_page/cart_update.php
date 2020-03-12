<?php
	include('../include/conn.php');
	
	echo $cart_id=$_POST['id'];
	echo $qty=$_POST['quantity'];
	$ip=$_SERVER['REMOTE_ADDR'];

	$select = "SELECT * FROM cart WHERE cart_id='".$cart_id."' AND ip='".$ip."'";		
		$query = mysqli_query($conn,$select);
		$data = mysqli_fetch_assoc($query);
		$price=$data['price'];
		$total_amount=$qty * $price;

		
		$update_query = "UPDATE `cart` SET quantity='$qty',total_amount='$total_amount' WHERE cart_id='$cart_id' ";
		 		$upd_query = mysqli_query($conn,$update_query);


		 		

 ?>