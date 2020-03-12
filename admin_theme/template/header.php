<div id="header">
	
	<div class="container">			
		
		<h1><a href="#">ECommerce Admin</a></h1>
		<h1><a href="#">Admin</a></h1>			
		
		<div id="info">				
			
			<a href="javascript:;" id="info-trigger">
				<i class="icon-cog"></i>
			</a>
			
			<div id="info-menu">
				
				<div class="info-details">
<?php

    $admin_id=$_SESSION['admin_id'];

       $select = "SELECT * FROM admin WHERE id='$admin_id'";
      $qry = mysqli_query($conn, $select);
      
     $row=mysqli_fetch_assoc($qry);


				 ?>
					<h4>Welcome back, <?php echo $row['name']; ?>.</h4>
					
					<p>
						Logged in as Admin. 
						<br>
						
					</p>
					
				</div> <!-- /.info-details -->
				
				<div class="info-avatar">
					<img src="Uploads/admin_img/<?php echo $row['profile_pic']; ?>" height="60" width="70" alt="avatar">
					
				</div> <!-- /.info-avatar -->
				
			</div> <!-- /#info-menu -->
			
		</div> <!-- /#info -->
		
	</div> <!-- /.container -->

</div> <!-- /#header -->