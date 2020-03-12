<div id="content">		
	<div class="container">		
		<div id="page-title" class="clearfix">			
			<ul class="breadcrumb">
			  <li>
			    <a href="../../default.htm">Home</a> <span class="divider">/</span>
			  </li>
			  <li>
			    <a href="#">Sub-Category</a> <span class="divider">/</span>
			  </li>
			  <li class="active">Table</li>
				<!-- Add new Button   -->
        		<a href="index.php?link=sub_category_form" class="btn btn-primary pull-right">Add New Data</a>
			</ul>			
		</div> <!-- /.page-title -->
		
		<div class="row">		    
		    <div class="span12">	      		
	      		<div class="widget widget-table">						
					<div class="widget-header">						
						<h3>
							<i class="icon-th-list"></i>
							Sub-Category List :->							
						</h3>
						<h2>
							<?php echo @$_SESSION['i_succ']; unset($_SESSION['i_succ']); ?>
							<?php echo @$_SESSION['u_succ']; unset($_SESSION['u_succ']); ?>
							<?php echo @$_SESSION['d_succ']; unset($_SESSION['d_succ']); ?>
						</h2>
					</div> <!-- /widget-header -->
					
			<div class="widget-content">						
				
				<table class="table table-striped table-bordered table-highlight" id="example">
					<thead>
						<tr>
							<th>#</th>
							<th>Category Name</th>
							<th>Sub-Category Name</th>
							<th>Description</th>
							<th>Profile</th>
							<th>Status</th>
							<th>Platform(s)</th>
						</tr>
					</thead>

			<?php

				$sel = "SELECT * FROM sub_category";
				@$qry = mysqli_query($conn, $sel);
				
				while(@$row = mysqli_fetch_assoc($qry)){

			?>
					<tbody>
						<tr>
							<td><?php echo @$no; @$no++; ?></td>
							<!-- <td><?php //echo $row['cat_id'];  ?></td> -->
							<td>
							<?php
								$select = "SELECT * FROM category WHERE cat_id='".$row['cat_id']."' AND status='active'"; 
								/*$select = "SELECT * FROM category WHERE cat_id='$id'";*/

								$query = mysqli_query($conn, $select);
								$result=mysqli_fetch_assoc($query);

								echo $result['cat_name'];

							?> </td>
							
							<td><?php echo $row['sub_cat_name'];  ?></td>
							<td><?php echo $row['description'];  ?></td>							
							
							<td><img src="Uploads/sub-category_img/<?php echo $row['profile']; ?>" height='70' width='70'></td>

							<td><?php echo $row['status']; ?></td>
						
						<td>
					<a href="index.php?link=sub_category_form&s_id=<?php echo $row['sub_cat_id'];?>" 		class="btn btn-info">Edit</a> <br> <br> 
					<a href="index.php?link=sub_category_action&s_id=<?php echo $row['sub_cat_id']; ?>&action=Delete" class="btn btn-danger">Delete </a>
							</td>
						</tr>

				<?php } ?>
						
					</tbody>

				</table>
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->	
				
		    </div> <!-- /span12 -->
		    
		</div> <!-- /row -->

	</div> <!-- /.container -->
	
</div> <!-- /#content -->

