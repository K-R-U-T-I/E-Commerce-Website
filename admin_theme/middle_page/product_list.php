<div id="content">		
	<div class="container">		
		<div id="page-title" class="clearfix">			
			<ul class="breadcrumb">
			  <li>
			    <a href="../../default.htm">Home</a> <span class="divider">/</span>
			  </li>
			  <li>
			    <a href="#">Product</a> <span class="divider">/</span>
			  </li>
			  <li class="active">Table</li>
				<!-- Add new Button   -->
        		<a href="index.php?link=product_form" class="btn btn-primary pull-right">Add New Data</a>
			</ul>			
		</div> <!-- /.page-title -->
		
		<div class="row">		    
		    <div class="span12">	      		
	      		<div class="widget widget-table">						
					<div class="widget-header">						
						<h3>
							<i class="icon-th-list"></i>
							Product List :->							
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
							<th>Category</th>
							<th>Sub-Category</th>
							<th>Product Name</th>
							<th>Amount</th>
							<th>Quantity</th>
							<th>Description</th>
							<th>Product Image</th>
							<th>Status</th>
							<th>Platform(s)</th>
						</tr>
					</thead>

			<?php

				$sel = "SELECT * FROM product";
				@$qry = mysqli_query($conn, $sel);
				
				while(@$row = mysqli_fetch_assoc($qry)){

			?>
					<tbody>
						<tr>
							<td><?php echo @$no; @$no++; ?></td>
							<!-- <td><?php //echo $row['cat_id']; ?></td> -->
							<td>
							<?php
								$select = "SELECT * FROM category WHERE cat_id='".$row['cat_id']."' AND status='active'"; 
								/*$select = "SELECT * FROM category WHERE cat_id='$id'";*/

								$query = mysqli_query($conn, $select);
								$result=mysqli_fetch_assoc($query);

								echo $result['cat_name'];

							?> </td>

							<!-- <td><?php //echo $row['sub_cat_id']; ?></td> -->
							<td>
								<?php
									$selec = "SELECT * FROM sub_category WHERE sub_cat_id='".$row['sub_cat_id']."' AND status='active'";
									$que = mysqli_query($conn, $selec);
									$res = mysqli_fetch_assoc($que);

									echo $res['sub_cat_name'];

								?>
							</td>
							<td><?php echo $row['pro_name'];  ?></td>
							<td><?php echo $row['amount'];  ?></td>
							<td><?php echo $row['quantity'];  ?></td>
							<td><?php echo $row['description'];  ?></td>
							
							<td><img src="Uploads/product_img/<?php echo $row['pro_img']; ?>" height='70' width='70'></td>

							<td><?php echo $row['status']; ?></td>
						
							<td><a href="index.php?link=product_form&p_id=<?php echo $row['pro_id']; ?>" 			class="btn btn-info">Edit</a> <br> <br> 
							<a href="index.php?link=product_action&action=Delete&p_id=<?php echo $row['pro_id']; ?>" class="btn btn-danger">Delete </a>
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

