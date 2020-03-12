<?php
		
		$user_name = $_POST['email'];
		$psw = $_POST['password'];

		$select = "SELECT * FROM user WHERE email='$user_name' AND password='$psw'";
		$query = mysqli_query($conn, $select);
		$count = mysqli_num_rows($query);

		if ($count>0) {

			$row = mysqli_fetch_assoc($query);
			echo $_SESSION['user_id']=$row['user_id'];
			header('location:index.php');
		}
		else{
			header('location:index.php?page=login');
		}

?>