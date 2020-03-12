<?php
	
	if(isset($_POST['register']))
	{
		// initializing variables
			 $id = $_POST['id'];
			 $fname = $_POST['fname'];
			 $mname = $_POST['mname'];
			 $lname = $_POST['lname'];
			 $email = $_POST['email'];
			 $password = $_POST['password'];
			/* $conf_psw = $_POST['conf_psw'];*/
			 $num = $_POST['number'];
			 $bday = $_POST['bday'];
			 $gen = $_POST['gender'];
			 $lang = implode(',',$_POST['lan'] );
			 $country = $_POST['country'];
			
			 echo $pic = $_FILES['image']['name'];
			 echo $temp_pic = $_FILES['image']['tmp_name'];
			 
			 	//extract($_FILES);
			 	//print_r($_FILES);					

						$mail_sel = "SELECT * FROM user WHERE email='$email'";
						$mail_query = mysqli_query($conn, $mail_sel);
						$result = mysqli_fetch_assoc($mail_query);
						$cnt = mysqli_num_rows($mail_query);

					if ($cnt >0)
					{
						foreach ($_POST as $key => $value) {
							$_SESSION [$key]=$value;
								$_SESSION['msg']="Email already Exist";
						}
						$_SESSION['user_id']=$row['user_id'];

						header('location:index.php?page=home');					 	
					}
					else
					{
						move_uploaded_file($temp_pic,'images/UPLOADS/user_profile/'.$pic);
					 	
						/*Query for insert*/
						echo $insert = "INSERT INTO user (`fname`,`mid_name`,`lname`,`email`,`mobile_num`,`password`,`gender`,`language`,`birthday`,`country`,`profile_pic`) VALUES ('$fname','$mname','$lname','$email','$num','$password','$gen','$lang','$bday','$country','$pic')";
						
						$ins_query = mysqli_query($conn, $insert);

							if ($ins_query) 
							{
								$_SESSION['i_success'] = "<h2>Data has been successfully inserted! </h2>";
								header('location:index.php?page=home');
							}
							else
							{
								echo "<h1> Couldn't insert data. </h1>";
							}
						}	
		}
		
 ?>

