<div id="content">		
	<div class="container">		
		<div id="page-title" class="clearfix">			
			<ul class="breadcrumb">
			  <li>
			    <a href="../../default.htm">Home</a> <span class="divider">/</span>
			  </li>
			  <li>
			    <a href="#">Banner</a> <span class="divider">/</span>
			  </li>
			  <li class="active">Table</li>
				<!-- Add new Button   -->
        		<a href="index.php?link=banner_form" class="btn btn-primary pull-right">Add New Data</a>
			</ul>			
		</div> <!-- /.page-title -->
		
		<div class="row">		    
		    <div class="span12">	      		
	      		<div class="widget widget-table">						
					<div class="widget-header">						
						<h3>
							<i class="icon-th-list"></i>
							Banner List :->							
						</h3>
						<h3>
							<?php echo @$_SESSION['i_succ']; unset($_SESSION['i_succ']); ?>
							<?php echo @$_SESSION['u_succ']; unset($_SESSION['u_succ']); ?>
							<?php echo @$_SESSION['d_succ']; unset($_SESSION['d_succ']); ?>
						</h3>
					</div> <!-- /widget-header -->
					
			<div class="widget-content">				
				<table class="table table-striped table-bordered table-highlight" id="example">
					<thead>
						<tr>
							<th>#</th>
							<th>Banner Name</th>
							<th>Description</th>
							<th>Banner Image</th>
							<th>Status</th>
							<th>Platform(s)</th>
						</tr>
					</thead>

			<?php

				$sel = "SELECT * FROM banner";
				@$qry = mysqli_query($conn, $sel);
				
				while(@$row = mysqli_fetch_assoc($qry)){

			?>
					<tbody>
						<tr>
							<td><?php echo @$no; @$no++; ?></td>
							<td><?php echo $row['bann_name'];  ?></td>
							<td><?php echo $row['bann_desc'];  ?></td>
							
							<td><img src="Uploads/banner_img/<?php echo $row['bann_image']; ?>" height='70' width='70'></td>

							<td><?php echo $row['status']; ?></td>
						
							<td><a href="index.php?link=banner_form&b_id=<?php echo $row['bann_id']; ?>" 			class="btn btn-info">Edit</a> <br> <br> 
							<a href="index.php?link=banner_action&b_id=<?php echo $row['bann_id']; ?>&action=Delete " class="btn btn-danger">Delete </a>
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

