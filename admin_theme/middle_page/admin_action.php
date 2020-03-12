<?php

	// initializing variables	
			$action=$_REQUEST['action'];

			$id = $_POST['id'];
			$name = $_POST['name'];
			$email = $_POST['email'];
			$num = $_POST['number'];
			$password = md5($_POST['password']);
			$status = $_POST['status'];

			$profile_pic = $_FILES['image']['name'];
			$temp_pic = $_FILES['image']['tmp_name'];
			/*print_r($_POST);*/

	switch ($action) {

		case 'insert':

				move_uploaded_file($temp_pic,'Uploads/admin_img/'.$profile_pic);

				/*Query for insert*/
				$insert = "INSERT INTO admin (`name`,`email`,`password`,`mobile_num`,`profile_pic`,`status`) VALUES('$name','$email','$password','$num','$profile_pic','$status')";
				$insert_query = mysqli_query($conn, $insert);

					if ($insert_query) 
					{
						$_SESSION['i_success'] = "<h2> Data has been successfully inserted! </h2>";
						header('location:index.php?link=admin_list');
					}
					else
					{
						echo "<h1> Could not insert data. </h1>";
					}

			break;

		case 'update':

					if ($profile_pic!='') 
					{
						$select = "SELECT * FROM admin WHERE id=$id";
						$qry = mysqli_query($conn, $select);
						$img_row = mysqli_fetch_assoc($qry);

	   					move_uploaded_file($temp_pic,'Uploads/admin_img/'.$profile_pic);
					 	
	   					//Query for update image 
	   					$i_update = "UPDATE admin SET profile_pic='$profile_pic' WHERE id=$id";
	   					$ui_qry=mysqli_query($conn, $i_update);
					}

					//Query for update data 
					$update = "UPDATE admin SET name='$name', email='$email',password='$password',  mobile_num='$num', status='$status' WHERE id='$id'";
					$query = mysqli_query($conn, $update);

						if($ui_qry || $query)
				 		{
				 			$_SESSION['u_success'] = "<h2>Data has been successfully updated.</h2>";
				 			header('location:index.php?link=admin_list');	
				 		}
				 		else
				 		{
				 			echo "<h1> Could not update data. <h1>";
				 		}

				 	break;

		case 'delete':	

							$id = $_GET['a_id'];

								/*Query for delete data*/
							$sel="SELECT * FROM admin WHERE id=$id";
							$qry=mysqli_query($conn,$sel);
							$result=mysqli_fetch_assoc($qry);

							unlink('Uploads/admin_img/'.$result['profile_pic']);
														
							echo $delete = "DELETE FROM admin WHERE id=$id";
							$del_query = mysqli_query ($conn, $delete);

							/*Query for delete image*/
							
							if($del_query)
							{
							$_SESSION['d_success'] = "<h2>Data has been successfully deleted.</h2>";
								header('location:index.php?link=admin_list');
							}
							else{
								echo "<h1> Data deletation FAILED. </h1>";
							}

				break;
		
	}


?>