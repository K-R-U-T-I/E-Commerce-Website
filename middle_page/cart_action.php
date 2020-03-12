<?php
//echo "hello";

	$product_id=$_REQUEST['product_id'];

	if(isset($product_id))
	{
	 			@$user_id=$_SESSION['user_id'];
				$sel="SELECT * FROM product WHERE pro_id='$product_id'";
				$qry=mysqli_query($conn,$sel);
				$row=mysqli_fetch_assoc($qry);
				
		 $price=$row['amount'];
		//$quantity=;
		$ip=$_SERVER['REMOTE_ADDR'];

		$select = "SELECT * FROM cart WHERE pro_id='".$product_id."' AND ip='".$ip."'";		
		$query = mysqli_query($conn,$select);
		$data = mysqli_fetch_assoc($query);
		$cnt = mysqli_num_rows($query);

		$update_quantity=$data['quantity'] + 1;
		$cart_id=$data['cart_id'];
		echo $total_amount=$update_quantity * $price ; 
		
		if($cnt>=1) {	

				//$total_amount=$update_quantity * $price;
				$update_query = "UPDATE `cart` SET quantity='$update_quantity',total_amount='$total_amount' WHERE cart_id='$cart_id' ";
		 		$upd_query = mysqli_query($conn,$update_query);

		 		if ($upd_query) {
		 			$_SESSION['u_succ'] = "Successfully updated data!!";
		 			header('location:index.php?page=cart');
		 		}
		 		else{
		 				echo "Not UPDATE";

		 		}
		}
		else{	
				//$price=$row['amount'];
			if($quantity==''){

				$quantity=1; }
				else{
					echo $quantity=$_REQUEST['quantity'];
				}
				$total_amount=$quantity * $price;
				
				 echo $cart_insert="INSERT INTO cart (user_id,pro_id,price,quantity,total_amount,ip) VALUES('$user_id','$product_id','$price','$quantity','$total_amount','$ip') ";
				 $cart_qry=mysqli_query($conn,$cart_insert);

				 if($cart_qry){
				 	header('location:index.php?page=cart');
				 }
				 else{
				 	echo "not insert cart";
				 }
			}
	}
	else
	{
		$id = $_GET['cart_id'];

		$delete = "DELETE FROM cart WHERE cart_id='$id'";
		$query = mysqli_query($conn, $delete);

		if ($query) {
			header('location:index.php?page=cart');
		}
		else{
			echo "Not deleted";
		}

	}


 ?>