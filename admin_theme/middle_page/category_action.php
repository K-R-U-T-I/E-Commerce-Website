<?php

	/*Initializing variables*/
	$id = $_POST['id'];
	$action = $_REQUEST['action'];
	$cname = $_POST['cname'];
	$desc = $_POST['desc'];

	$img = $_FILES['image']['name'];
	$temp_img = $_FILES['image']['tmp_name'];

	$status = $_POST['status'];

	switch ($action) {
		
		case 'Insert':	
						move_uploaded_file($temp_img, 'Uploads/category_img/'.$img);

							/*Query for insert*/
						$ins = "INSERT INTO category (`cat_name`,`description`,`cat_img`,`status`) 		VALUES('$cname','$desc','$img','$status')";
						$ins_query = mysqli_query($conn, $ins);

						if ($ins_query) {
								$_SESSION['i_succ'] = "Data has been inserted successfully!!";
								header('location:index.php?link=category_list');
						}
						else{
							echo "<h1> Sorry !! Could not insert data. </h1>";
							/*header('location:index.php?link=category_form');*/
						}
			break;

		case 'Update':

					if ($img!='') {

							/*echo "hii";*/
							$i_sel = "SELECT * FROM category WHERE cat_id='$id'";
							$i_qry = mysqli_query($conn, $i_sel);
							$i_row = mysqli_fetch_assoc($i_qry);

							move_uploaded_file($temp_img, 'Uploads/category_img/'.$img);

							/*Query for update IMAGE*/
							$i_upd = "UPDATE category SET cat_img='$img' WHERE cat_id='$id'";
							$img_qry = mysqli_query($conn, $i_upd);
					}

						/*Query for update DATA*/
						/*echo "hello";*/
		 $update = "UPDATE category SET cat_name='$cname',description='$desc',status='$status' WHERE cat_id='$id'";
					$upd_query = mysqli_query($conn, $update);

					if ($img_qry || $upd_query) {
							$_SESSION['u_succ'] = "Yeahh !! Data has been updated successfully!!";
				 			header('location:index.php?link=category_list');	
			 		}
			 		else
			 		{
			 			echo "<h1> Sorry !! Could not update data. </h1>";
			 		}

			break;
		
		case 'Delete':

						$id = $_GET['c_id'];

						$select = "SELECT * FROM category WHERE cat_id='$id'";
						$qry = mysqli_query($conn, $select);
						$row = mysqli_fetch_assoc($qry);

						/*Query for delete IMAGE*/
						unlink('Uploads/category_img/'.$row['cat_img']);

						/*Query for delete DATA*/
						$del = "DELETE FROM category WHERE cat_id='$id'";
						$del_qry = mysqli_query($conn, $del);

						if ($del_qry) {
							$_SESSION['d_succ'] = "Yeahh !! Data has been deleted successfully.";
							header('location:index.php?link=category_list');
						}
						else{
							echo "<h1> Sorry !! Could not delete data. </h1>";
						}
						
			break;
	}



?>