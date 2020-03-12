<?php

		// initializing variables
			 $action=$_REQUEST['action'];
			 $id = $_POST['id'];
			 $name = $_POST['name'];
			 $email = $_POST['email'];
			 $sub =$_POST['sub'];
			 $msg = $_POST['msg'];
			 $num = $_POST['number'];
			 $status = $_POST['status'];
			 
		switch ($action) 
		{
			case 'insert':
						/*echo "ins";*/
						$mail_sel = "SELECT * FROM contact_us WHERE email='$email'";
						$mail_query = mysqli_query($conn, $mail_sel);
						$result = mysqli_fetch_assoc($mail_query);
						$cnt = mysqli_num_rows($mail_query);

					if ($cnt >0)
					{
						foreach ($_POST as $key => $value) {
							$_SESSION [$key]=$value;
								$_SESSION['msg']="Email Alrdy Exist";
						}
						header('location:index.php?link=contact_us_form');					 	
					}
					else
					{
						/*Query for insert*/
						echo $insert = "INSERT INTO contact_us (`name`,`email`,`subject`,`message`,`contact_no`,`status`) 
								VALUES ('$name','$email','$sub','$msg','$num','$status')";
						$ins_query = mysqli_query($conn, $insert);

							if ($ins_query) 
							{
								$_SESSION['i_success'] = "Data has been successfully inserted! ";
								header('location:index.php?link=contact_us_list');
							}
							else
							{
								echo "Couldn't insert data.";
							}
						}
					
				break;

				case 'update':

					/*Query for update data */
					$update = "UPDATE contact_us SET name='$name', email='$email', subject='$sub', message='$msg', contact_no='$num', status='$status' WHERE id='$id'";
					$query = mysqli_query($conn, $update);

						if($ui_qry || $query)
				 		{
				 			$_SESSION['u_success'] = "Data has been successfully updated.";
				 			header('location:index.php?link=contact_us_list');	
				 		}
				 		else
				 		{
				 			echo "Could not update data.";
				 		}
					break;

				case 'delete':
					
							$id = $_GET['c_id'];

								/*Query for delete data*/
							$sel="SELECT * FROM contact_us WHERE id='$id'";
							$qry=mysqli_query($conn,$sel);
							$row=mysqli_fetch_assoc($qry);						
							
							$delete = "DELETE FROM contact_us WHERE id='$id'";
							$del_query = mysqli_query ($conn, $delete);

							/*Query for delete image*/
							
							if($del_query)
							{
								$_SESSION['d_success'] = "Data has been successfully deleted.";
								header('location:index.php?link=contact_us_list');
							}
							else{
								echo "Data deletetion FAILED.";
							}
						break;
				}
				

?>
