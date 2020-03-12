<?php

		/*Initializing variables*/
		$action = $_REQUEST['action'];
		$id = $_POST['id'];
		$bname = $_POST['bname'];
		$desc = $_POST['desc'];

		$img = $_FILES['image']['name'];
		$temp_img = $_FILES['image']['tmp_name'];

		$status = $_POST['status'];

	switch ($action) {
		
		case 'Insert':	
						move_uploaded_file($temp_img, 'Uploads/banner_img/'.$img);

							/*Query for insert*/
						$ins = "INSERT INTO banner (`bann_name`,`bann_desc`,`bann_image`,`status`) VALUES('$bname','$desc','$img','$status')";
						$ins_query = mysqli_query($conn, $ins);

						if ($ins_query) {
								$_SESSION['i_succ'] = "<h2>Data has been inserted successfully!!</h2>";
								header('location:index.php?link=banner_list');
						}
						else{
							echo "<h1> Sorry !! Could not insert data. </h1>";
							header('location:index.php?link=banner_form');
						}
			break;

		case 'Update':
					echo "Update";

					if ($img!='') {

							$i_sel = "SELECT * FROM banner WHERE bann_id=$id";
							$i_qry = mysqli_query($conn, $i_sel);
							$i_row = mysqli_fetch_assoc($i_qry);

							move_uploaded_file($temp_img, 'Uploads/banner_img/'.$img);

							/*Query for update IMAGE*/
							echo $i_upd = "UPDATE banner SET bann_image='$img' WHERE bann_id=$id";
							$i_upd_qry = mysqli_query($conn, $i_upd);

					}

						/*Query for update DATA*/
					echo $update = "UPDATE banner SET bann_name='$bname', bann_desc='$desc', status='$status' WHERE bann_id= $id";
					$upd_query = mysqli_query($conn, $update);

					if ($upd_query || $i_upd_qry) {
							$_SESSION['u_succ'] = "<h2>Yeahh !! Data has been updated successfully!!</h2>";
				 			header('location:index.php?link=banner_list');	
			 		}
			 		else
			 		{
			 			echo "<h1> Sorry !! Could not update data. </h1>";
			 		}

			break;
		
		case 'Delete':

						$id = $_GET['b_id'];

						$select = "SELECT * FROM banner WHERE bann_id=$id";
						$qry = mysqli_query($conn, $select);
						$row = mysqli_fetch_assoc($qry);

						/*Query for delete IMAGE*/
						unlink('Uploads/banner_img/'.$row['bann_img']);

						/*Query for delete DATA*/
						$del = "DELETE FROM banner WHERE bann_id=$id";
						$del_qry = mysqli_query($conn, $del);

						if ($del_qry) {
							$_SESSION['d_succ'] = "<h2>Yeahh !! Data has been deleted successfully.</h2>";
							header('location:index.php?link=banner_list');
						}
						else{
							echo "<h1> Sorry !! Could not delete data. </h1>";
						}
						
			break;
		}
		
?>