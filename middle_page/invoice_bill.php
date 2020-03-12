<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="space">
    <style>
        .space{
            margin: 150px 0 0 0;
        }
    </style>
    </div>    

<?php 
        $u_id = $_SESSION['user_id'];
        $or_id = $_SESSION['order_id'];

        $select1 = "SELECT * FROM `shipping` WHERE user_id='$u_id' AND order_id='$or_id'";
        $query1 = mysqli_query($conn, $select1);
        $row1 = mysqli_fetch_assoc($query1);

        $select2 = "SELECT * FROM `order` WHERE ord_id='".$row1['order_id']."'";
        $query2 = mysqli_query($conn, $select2);
        $row2 = mysqli_fetch_assoc($query2);

        $select5 = "SELECT * FROM `user` WHERE user_id='$u_id'";
        $query5 = mysqli_query($conn, $select5);
        $row5 = mysqli_fetch_assoc($query5);        

        /*$select6 = "SELECT * FROM `product` WHERE ";
        $query6 = mysqli_query($conn, $select6);
        $row6 = mysqli_fetch_assoc($query6);*/
?>       

    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Invoice Bill</h2><h3 class="pull-right">Order # <?php echo $row2['ord_id']; ?></h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Billed To:</strong><br>
    					Mr./Miss <?php echo $row5['fname']; ?><br>
    					
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>Shipped To:</strong><br>
    					<?php 
                            echo $row1['address1'];
                        ?>
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Payment Method:</strong><br>
    					PayPal<br>
    					<?php echo $row5['email']; ?>
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date And Time:</strong><br><br>
    					<?php echo date('l jS \of F Y h:i:s A');
                               ?>                            
                        <br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>


    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<!-- <td><strong>Item</strong></td> -->
                                    <td class="text-center"><strong>Product Image</strong></td> 
                                    <td class="text-center"><strong>Product Name</strong></td> 
                                    <td class="text-center"><strong>Price</strong></td>
        							<td class="text-center"><strong>Quantity</strong></td>
        							<td class="text-right"><strong>Totals</strong></td>
                                </tr>
    						</thead>
                         
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->

<?php 
        $select3 = "SELECT * FROM `cart` WHERE `ord_id`='".$row1['order_id']."' AND `user_id`='$u_id'";
        $query3 = mysqli_query($conn, $select3);
        while($row3 = mysqli_fetch_assoc($query3)){
            
        $select4 = "SELECT * FROM `product` WHERE pro_id='".$row3['pro_id']."'";
        $query4 = mysqli_query($conn, $select4);
        @$row4 = mysqli_fetch_assoc($query4);

?>

    							<tr>
                                    <td class="text-center"><img src="admin_theme/Uploads/product_img/<?php echo $row4['pro_img']; ?>" height="50" width="50">
                                    </td>  
                                    <!-- <td class="text-center"><?php //echo $row4['pro_name']; ?></td>   -->
                                    <td class="text-center"><?php echo $row4['pro_name']; ?></td>  
    								<td class="text-center"><?php echo $row3['price']; ?></td>
    								<td class="text-center"><?php echo $row3['quantity']; ?></td>
    								<td class="text-right"><?php echo $row3['total_amount']; ?></td>
    							</tr>

                            <?php } ?>
                        
    							<tr>
                                    <td></td>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right">
                                        <?php echo $_SESSION['grand_total']; ?></td>
    							</tr>
    							<tr>
                                    <td></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Shipping</strong></td>
    								<td class="no-line text-right">
                                        <?php 
                                            if ($_SESSION['grand_total']>=500000) {
                                                echo $shipping = 500;
                                            }
                                            else{
                                                echo $shipping = 200;
                                            }
                                        ?>
                                    </td>
    							</tr>
    							<tr>
                                    <td></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right">
                                        <?php
                                                $f_total = $shipping + $_SESSION['grand_total'];
                                                echo $f_total; 

                                                if (isset($f_total)){
                                                    
/*UPDATE `order` SET `total_amount`='".$f_total."' WHERE `ord_id`='".$_SESSION['order_id']."'*/ 
          $upd = "UPDATE `order` SET `total_amount`='$f_total' WHERE `ord_id`='".$_SESSION['order_id']."'";

          //$upd = "UPDATE `order` SET `total_amount`='$f_total'";
                                                    $qry = mysqli_query($conn,$upd); 
                                                }
                                                else{

                                                }


                                        ?>
                                    </td>
    							</tr>

                                <tr>
                                    <td>
                                        <a href="index.php?page=paypal" style="color: purple; 
                                        font-family: Century Schoolbook;"><h2>Payment</h2></a>
                                    </td>
                                </tr>

    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>