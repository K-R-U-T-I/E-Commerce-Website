<body class="fullwidth">
<!-- Page Content -->
			<main class="page-main">
				<div class="block">
					<div class="container">

						<div class="space">			<!-- For space between header & mid-page content-->
						    <style>
						        .space{
						            margin: 150px 0 0 0;
						        }
						    </style>
						</div>						<!-- /space -->

						<ul class="breadcrumbs">
							<li><a href="index.php"><i class="fa fa-home"></i></a></li>
							<li>/<span>Shopping Cart</span></li>
						</ul>
					</div>
				</div>
				<div class="block">
					<div class="container">
						<div class="cart-table">
							<div class="table-header">
								<div class="photo">
									Product Image
								</div>
								<div class="name">
									Product Name
								</div>
								<div class="price">
									Unit Price
								</div>
								<div class="qty">
									Qty
								</div>
								<div class="subtotal">
									Subtotal
								</div>
								<div class="remove">
									<span class="hidden-sm hidden-xs">Remove</span>
								</div>
							</div>

<?php
		$ip=$_SERVER['REMOTE_ADDR'];

		$select = "SELECT * FROM cart WHERE ip='$ip'AND ord_id='0'";
		$query = mysqli_query($conn, $select);
		while ($row=mysqli_fetch_assoc($query)) {			
?>

							<div class="table-row">
<?php
		//$sel = "SELECT * FROM product WHERE pro_id=$row['pro_id'] AND status='active'";
		//$prod_id=$row['pro_id'];
		$sel = "SELECT * FROM product WHERE pro_id='".$row['pro_id']."'";
		$qry = mysqli_query($conn, $sel);
		$result = mysqli_fetch_assoc($qry);
?> 
								<div class="photo">
									<a href="#">
									<img src="admin_theme/Uploads/product_img/<?php echo $result['pro_img'] ?>" alt=""> 
									</a> 
								</div>
								<div class="name">
									<a href="#"><?php echo $result['pro_name']; ?></a>
								</div>
								<div class="price">
									<?php echo $result['amount'];
									 $cart_id=$row['cart_id'];
									 ?>
								</div>
								<div class="qty qty-changer">
									<fieldset>
										<input type="button"  onclick="Update_Quantity(<?php echo $row['quantity']-1; ?>,<?php echo $cart_id ?>);" value="&#8210;" class="decrease">

										<input type="text" class="qty-input" name="quantity" onchange="Update_Quantity(this.value,<?php echo $cart_id ?>);" value="<?php echo $row['quantity']; ?>" data-min="1" data-max="">

										<input type="button" onclick="Update_Quantity(<?php echo $row['quantity']+1; ?>,<?php echo $cart_id ?>);" name="quantity" id="" value="+"  class="increase">
									</fieldset>
								</div>
								<div class="subtotal">
									<?php /*$sub_total = $row['quantity'] * $result['amount'] ;
											echo $sub_total;*/
											echo $row['total_amount'];
									?>
								</div>
								<div class="remove">
									<a href="index.php?page=cart_action&cart_id=<?php echo $row['cart_id']; ?>" class="fa fa-close"></a>
								</div>
							</div>
						<?php	 @$gr_total+=$row['total_amount'];
									$_SESSION['grand_total']=$gr_total;
						 }?>

							<div class="table-footer">
								<!-- <button class="btn btn-alt">CONTINUE SHOPPING</button> -->
								<!-- <button class="btn btn-alt pull-right"><i class="fa fa-bin"></i><span>Clear Shopping Cart</span></button>
								<button class="btn btn-alt pull-right"><i class="fa fa-sync"></i><span>UPDATE</span></button> -->
							</div>
						</div>

						<div class="row">
							<div class="col-md-3 total-wrapper">
								<table class="total-price">									
									<tr class="total">
										<td>Grand Total</td>
										<td><?php
												//$sub_total = $row['quantity'] * $result['amount'] ;
												//$grnd_total =$grnd_total + $sub_total;
											echo $_SESSION['grand_total']  ?></td>
									</tr>
								</table>
								<div class="cart-action">
									<div>
										<a href="index.php?page=order" class="btn">Proceed To Checkout</a>
									</div>
									<!-- <a href="#">Checkout with Multiple Addresses</a> -->
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</main>
			<!-- /Page Content -->
		</body>
		
		<script type="text/javascript">
				
				function Update_Quantity(quantity,cart_id) 
				{
					//alert(quantity);
					$.ajax({
					url:'middle_page/cart_update.php',
					type:'post',
					data:{quantity:quantity,id:cart_id},
					dataType:'text',

					success: function(data)
            		{
            		//alert(data);            
            		window.location="index.php?page=cart";
            		},

	            	 error: function(errorThrown)
	            	 {
	       				alert('request failed');
	    			 }	
				});

}
		</script>