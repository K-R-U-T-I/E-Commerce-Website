
<!-- echo 	$txn_id=$_REQUEST['txn_id'];
session orserd id update 
		
		Sussion[succ msg ]=your txn siibb 
		unset sessionorsder
		session grand disk_total_space(directory)

		new var =7500;

		update order total = $tal sseyt -->

 <?php 
 		echo $trans_id = $_REQUEST['txn_id'];
 			echo $update="UPDATE `order` SET `trans_id`='$trans_id' WHERE  `ord_id`='".$_SESSION['order_id']."' ";
 			$qry=mysqli_query($conn,$update);
 				if($qry)
 				{
 					//unset($_SESSION['order_id']);
 					//header('location:index.php');

 				}
 				else{
 					echo "not Update";
 				}
?>
 				<div class="space">
				    <style>
				        .space{
				            margin: 150px 0 0 0;
				        }
				    </style>
				</div> 
<?php
 		echo $_SESSION['tnx_msg'] = "<center><h1>Thank U!!</h1></center>";

 		unset($_SESSION['tnx_msg']);


 ?>