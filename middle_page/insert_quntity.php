<?php
	include('../include/conn.php');
	
	echo $product_id=$_POST['id'];
	echo $qty=$_POST['quantity'];
	$ip=$_SERVER['REMOTE_ADDR'];

		$select = "SELECT * FROM `product` WHERE `pro_id`='".$product_id."'";		
		$query = mysqli_query($conn,$select);
		$data = mysqli_fetch_assoc($query);
		echo $price=$data['amount'];
		echo $total_amount=$qty * $price;
		echo $pro_name=$data['pro_name'];

		
		echo $update_query = "INSERT INTO `cart` (quantity,total_amount,pro_id,price,ip)VALUES('$qty','$total_amount','$product_id','$price','$ip') ";
		 		$upd_query = mysqli_query($conn,$update_query);


		 		

 ?>