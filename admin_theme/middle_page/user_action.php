<?php

		// initializing variables
			echo $action=$_REQUEST['action'];
			 $id = $_POST['id'];
			 $fname = $_POST['fname'];
			 $mname = $_POST['mname'];
			 $lname = $_POST['lname'];
			 $email = $_POST['email'];
			 /*$psw = md5($_POST['password']);
			 $f_psw = md5($psw);*/
			 $psw = base64_encode($_POST['password']);
			 $f_psw = base64_decode($psw);
			 $num = $_POST['number'];
			 $bday = $_POST['bday'];
			 $gen = $_POST['gender'];
			 $lan = implode(',', $_POST['lan']);
			 $status = $_POST['status'];

			 $img = $_FILES['image'] ['name'];
			 $temp_image = $_FILES['image'] ['tmp_name'];
			 
		switch ($action) 
		{
			case 'insert':

						$mail_sel = "SELECT * FROM user WHERE email='$email'";
						$mail_query = mysqli_query($conn, $mail_sel);
						$result = mysqli_fetch_assoc($mail_query);
						$cnt = mysqli_num_rows($mail_query);

					if ($cnt >0)
					{
						foreach ($_POST as $key => $value) {
							$_SESSION [$key]=$value;
								$_SESSION['msg']="Email Alrdy Exist";
						}
						header('location:index.php?link=user_form');					 	
					}
					else
					{
						move_uploaded_file($temp_image,'Uploads/user_img/'.$img);
					 	
						/*Query for insert*/
						echo $insert = "INSERT INTO user (`fname`,`mid_name`,`lname`,`email`,`mobile_num`,`password`,`gender`,`language`,`birthday`,`profile_pic`,`status`) VALUES ('$fname','$mname','$lname','$email','$num','$f_psw','$gen','$lan','$bday','$img','$status')";
						$ins_query = mysqli_query($conn, $insert);

							if ($ins_query) 
							{
								$_SESSION['i_success'] = "<h2>Data has been successfully inserted! </h2>";
								header('location:index.php?link=user_list');
							}
							else
							{
								echo "<h1> Couldn't insert data. </h1>";
							}
						}
					
				break;

				case 'update':

					if ($img!='') 
					{
						echo $select = "SELECT * FROM user WHERE user_id=$id ";
						$qry = mysqli_query($conn, $select);
						$img_row = mysqli_fetch_assoc($qry);

	   					move_uploaded_file($temp_image,'Uploads/user_img/'.$img);
					 	
	   					/*Query for update image */
	   					echo $i_update = "UPDATE user SET profile_pic='$img' WHERE user_id=$id";
	   					$ui_qry=mysqli_query($conn, $i_update);
					}
					/*Query for update data */
					echo $update = "UPDATE user SET fname='$fname', mid_name='$mname', lname='$lname', email='$email', mobile_num='$num', password='$psw', gender='$gen', language='$lan', birthday='$bday', status='$status' WHERE user_id='$id'";
					$query = mysqli_query($conn, $update);

						if($ui_qry || $query)
				 		{
				 			$_SESSION['u_success'] = "<h2> Data has been successfully updated.</h2>";
				 			header('location:index.php?link=user_list');	
				 		}
				 		else
				 		{
				 			echo "<h1> Could not update data. </h1>";
				 		}
					break;

				case 'delete':
					
							$id = $_GET['u_id'];

								/*Query for delete data*/
							$sel="SELECT * FROM user WHERE user_id=$id";
							$qry=mysqli_query($conn,$sel);
							$row=mysqli_fetch_assoc($qry);

							/*Query for delete image*/
							unlink('Uploads/user_img/'.$row['profile_pic']);							
							
							 $delete = "DELETE FROM user WHERE user_id=$id";
							$del_query = mysqli_query ($conn, $delete);
							
							if($del_query)
							{
								$_SESSION['d_success'] = "<h2>Data has been successfully deleted.</h2>";
								header('location:index.php?link=user_list');
							}
							else{
								echo "<h1>Data deletetion FAILED.</h1>";
							}
						break;
				}
				

?>
