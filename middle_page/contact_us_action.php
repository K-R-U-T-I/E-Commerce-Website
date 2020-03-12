<?php
	
		// initializing variables
			 $id = $_POST['id'];
			 $name = $_POST['name'];
			 $email = $_POST['email'];
			 $sub =$_POST['sub'];
			 $msg = $_POST['msg'];
			 $num = $_POST['num'];			 						

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
						header('location:index.php?page=contact_us');					 	
					}
					else
					{
						/*Query for insert*/
						echo $insert = "INSERT INTO contact_us (`name`,`email`,`subject`,`message`,`contact_no`) VALUES ('$name','$email','$sub','$msg','$num')";
						$ins_query = mysqli_query($conn, $insert);

							if ($ins_query) 
							{
								$_SESSION['i_success'] = "Data has been successfully inserted! ";
								header('location:index.php?page=home');
							}
							else
							{
								echo "Couldn't insert data.";
							}
						}
		
	?>