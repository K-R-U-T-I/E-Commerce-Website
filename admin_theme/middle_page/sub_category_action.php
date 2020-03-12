<?php

	/*Initializing variables*/
	$id = $_POST['id'];
	$action = $_REQUEST['action'];
	$sname = $_POST['sname'];
	$desc = $_POST['desc'];
	$cat_id = $_POST['cat_id'];

	$img = $_FILES['image']['name'];
	$temp_img = $_FILES['image']['tmp_name'];

	$status = $_POST['status'];

	switch ($action) {
		
		case 'Insert':	
		echo "hey";
						move_uploaded_file($temp_img, 'Uploads/sub-category_img/'.$img);

							/*Query for insert*/
						echo $ins = "INSERT INTO sub_category (`sub_cat_name`,`cat_id`,`description`,`profile`,`status`) VALUES('$sname','$cat_id','$desc','$img','$status')";
						echo $ins_query = mysqli_query($conn, $ins);

						if ($ins_query) {
								$_SESSION['i_succ'] = "Data has been inserted successfully!!";
								header('location:index.php?link=sub_category_list');
						}
						else{
							echo "<h1> Sorry !! Could not insert data. </h1>";
							/*header('location:index.php?link=sub_category_form');*/
						}
			break;

		case 'Update':

					if ($img!='') {

							$i_sel = "SELECT * FROM sub_category WHERE sub_cat_id='$id'";
							$i_qry = mysqli_query($conn, $i_sel);
							$i_row = mysqli_fetch_assoc($i_qry);

							move_uploaded_file($temp_img,'Uploads/sub-category_img/'.$img);

							/*Query for update IMAGE*/
						echo $i_upd = "UPDATE sub_category SET profile='$img' WHERE sub_cat_id='$id'";
							$i_upd_qry = mysqli_query($conn, $i_upd);
					}

						/*Query for update DATA*/
					echo $update = "UPDATE sub_category SET sub_cat_name='$sname', description='$desc',
								status='$status' WHERE sub_cat_id='$id'";
					$upd_query = mysqli_query($conn, $update);

					if ($upd_query || $i_upd_qry) {
							$_SESSION['u_succ'] = "Yeahh !! Data has been updated successfully!!";
				 			header('location:index.php?link=sub_category_list');	
			 		}
			 		else
			 		{
			 			echo "<h1> Sorry !! Could not update data. </h1>";
			 		}

			break;
		
		case 'Delete':

						$id = $_GET['s_id'];

						$select = "SELECT * FROM sub_category WHERE sub_cat_id='$id'";
						$qry = mysqli_query($conn, $select);
						$row = mysqli_fetch_assoc($qry);

						/*Query for delete IMAGE*/
						unlink('Uploads/sub-category_img/'.$row['profile']);

						/*Query for delete DATA*/
						$del = "DELETE FROM sub_category WHERE sub_cat_id='$id'";
						$del_qry = mysqli_query($conn, $del);

						if ($del_qry) {
							$_SESSION['d_succ'] = "Yeahh !! Data has been deleted successfully.";
							header('location:index.php?link=sub_category_list');
						}
						else{
							echo "<h1> Sorry !! Could not delete data. </h1>";
						}
						
			break;
	}



?>