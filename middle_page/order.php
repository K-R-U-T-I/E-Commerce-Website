<?php

	$user_id = $_SESSION['user_id'];

	if ($user_id=='') {
		header('location:index.php?page=login');
	}
	else{
			$sel = "SELECT * FROM `cart` WHERE user_id='$user_id'";
			$qry = mysqli_query($conn, $sel);			
			$count=mysqli_num_rows($qry);

			//echo $cart_id = $row['cart_id'];
			echo $tl_amount = $_SESSION['grand_total'];

			while ($row = mysqli_fetch_assoc($qry)) {

				$cart_id.= $row['cart_id'].',';
			}

			if($qry){

					echo $insert = "INSERT INTO `order` (`user_id`,`cart_id`,`total_amount`) VALUES('$user_id','$cart_id','$tl_amount')";
					echo $query = mysqli_query($conn, $insert);

					if ($query) {

						$order_id = mysqli_insert_id($conn);
						$_SESSION['order_id'] = $order_id;

						echo $new_order = mysqli_query($conn,"UPDATE `cart` SET `ord_id`='$order_id' WHERE user_id='".$_SESSION['user_id']."'");

						header('location:index.php?page=check_out');						
					}
					else{
						echo "not ins";
					}
			}
			else{
				echo "php";
			}
}
?>