<?php

	include ('../include/conn.php');

	if (isset($_POST['submit'])) {

		 $id = $_POST['id'];
		 $uname = $_POST['username'];
		 $psw =md5($_POST['password']);
		/*$status = $_POST['status'];*/
		
			 $select = "SELECT * FROM admin WHERE email='$uname' AND password='$psw'";
			$query = mysqli_query($conn, $select);
			 $count=mysqli_num_rows($query);
			if ($count>0) {

				$row = mysqli_fetch_assoc($query);
			    $_SESSION['admin_id']=$row['id'];
				header('location:index.php');


			}
			else{
				header('location:login.php');

				echo "Not";
			}	
	}

?>