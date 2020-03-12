<?php

		/*Initializing variables*/
		$action = $_REQUEST['action'];
		$id = $_POST['id'];
		$pname = $_POST['pname'];
		$cat_id = $_POST['cat_id'];
		$sub_cat_id = $_POST['sub_cat_id'];
		$amt = $_POST['amount'];
		$qnt = $_POST['quantity'];
		$desc = $_POST['desc'];

		$img = $_FILES['image']['name'];
		$temp_img = $_FILES['image']['tmp_name'];

		$status = $_POST['status'];

	switch ($action) {
		
		case 'Insert':	
						move_uploaded_file($temp_img, 'Uploads/product_img/'.$img);

							/*Query for insert*/
						$ins = "INSERT INTO product (`pro_name`,`cat_id`,`sub_cat_id`,`amount`,`quantity`,`description`,`pro_img`,`status`) VALUES('$pname','$cat_id','$sub_cat_id','$amt','$qnt','$desc','$img','$status')";
						$ins_query = mysqli_query($conn, $ins);

						if ($ins_query) {
								$_SESSION['i_succ'] = "<h2>Data has been inserted successfully!!</h2>";
								header('location:index.php?link=product_list');
						}
						else{
							echo "<h1> Sorry !! Could not insert data. </h1>";
							header('location:index.php?link=product_form');
						}
			break;

		case 'Update':
					echo "Update";

					if ($img!='') {

							$i_sel = "SELECT * FROM product WHERE pro_id='$id'";
							$i_qry = mysqli_query($conn, $i_sel);
							$i_row = mysqli_fetch_assoc($i_qry);

							move_uploaded_file($temp_img, 'Uploads/product_img/'.$img);

							/*Query for update IMAGE*/
							echo $i_upd = "UPDATE product SET pro_img='$img' WHERE pro_id='$id'";
							$i_upd_qry = mysqli_query($conn, $i_upd);

					}

						/*Query for update DATA*/
					$update = "UPDATE product SET pro_name='$pname', amount='$amt', quantity='$qnt', description='$desc', pro_img='$img', status='$status' WHERE pro_id='$id'";
					$upd_query = mysqli_query($conn, $update);

					if ($i_upd_qry && $upd_query) {
							$_SESSION['u_succ'] = "<h2>Yeahh !! Data has been updated successfully!!</h2>";
				 			header('location:index.php?link=product_list');	
			 		}
			 		else
			 		{
			 			echo "<h1> Sorry !! Could not update data. </h1>";
			 		}

			break;
		
		case 'Delete':

						$id = $_GET['p_id'];

						$select = "SELECT * FROM product WHERE pro_id='$id'";
						$qry = mysqli_query($conn, $select);
						$row = mysqli_fetch_assoc($qry);

						/*Query for delete IMAGE*/
						unlink('Uploads/product_img/'.$row['pro_img']);

						/*Query for delete DATA*/
						$del = "DELETE FROM product WHERE pro_id='$id'";
						$del_qry = mysqli_query($conn, $del);

						if ($del_qry) {
						$_SESSION['d_succ'] = "<h2> Yeahh !! Data has been deleted successfully.</h2>";
							header('location:index.php?link=product_list');
						}
						else{
							echo "<h1> Sorry !! Could not delete data. </h1>";
						}
						
			break;
		}
		
?>