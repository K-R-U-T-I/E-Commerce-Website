<?php

	@$id = $_GET['p_id'];

	$select = "SELECT * FROM product WHERE pro_id='$id'";
	$query = mysqli_query($conn, $select);
	$row = mysqli_fetch_assoc($query);

	if ($id =='') {
		$action = "Insert";
	}
	else{
		$action = "Update";
	}
?>

<div id="content">		
	<div class="container">		
		<div id="page-title" class="clearfix">			
			<ul class="breadcrumb">
			  <li>
			    <a href="default.html">Home</a> <span class="divider">/</span>
			  </li>
			  <li>
			    <a href="#">Product</a> <span class="divider">/</span>
			  </li>
			  <li class="active">Form</li>
			</ul>			
		</div> <!-- /.page-title -->
		
		<div class="row">			
			<div class="span12">	      		
	      		<div id="horizontal" class="widget widget-form">	      			
	      			<div class="widget-header">	      				
	      				<h3>
	      					<i class="icon-pencil"></i>
	      					Product form	      					
      					</h3>	
      				</div> <!-- /widget-header -->
					
				<div class="widget-content">
						
				<form action="index.php?link=product_action" method="post"
						 enctype="multipart/form-data" class="form-horizontal">

					<fieldset>

						<input type="hidden" name="id" value="<?php echo $row['pro_id']; ?>">
						<input type="hidden" name="action" value="<?php echo $action; ?>">

						<div class="control-group">
					            <label class="control-label" for="select01">Category</label>
					            <div class="controls">
					              <select id="select01" name="cat_id">
					                <option value="">Select Category</option>
					                <?php 
					                		$sel="SELECT * FROM category WHERE status='active'";
					                		$qry = mysqli_query($conn,$sel);
					                		while($result=mysqli_fetch_assoc($qry)){
													
					                 ?>

					                <option value="<?php echo $result['cat_id'];  ?>"><?php echo $result['cat_name']; ?></option>
					                <?php }?>
					              </select>
					            </div>
					    </div>

					    <div class="control-group">
					            <label class="control-label" for="select01">Sub-Category</label>
					            <div class="controls">
					              <select id="select01" name="sub_cat_id">
					                <option value="">Select Sub-Category</option>
					                <?php
					                	$select = "SELECT * FROM sub_category WHERE status='active'";
					                	$query = mysqli_query($conn, $select);
					                	while ($res=mysqli_fetch_assoc($query)) {
					                		
					                ?>
					                <option value="<?php echo $res['sub_cat_id']; ?>"><?php echo $res['sub_cat_name']; ?></option>

					            <?php }?>
					              </select>
					            </div>
					    </div>
					          
			          <div class="control-group">
			            <label class="control-label" for="input01">Product Name</label>
			            <div class="controls">
			              <input type="text" name="pname" value="<?php echo $row['pro_name']; ?>" 
			              		class="input-large" id="input01">
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label" for="input01">Amount</label>
			            <div class="controls">
			              <input type="text" name="amount" value="<?php echo $row['amount']; ?>"
			              	 class="input-large" id="input01">
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label" for="input01">Quantity</label>
			            <div class="controls">
			              <input type="text" name="quantity" value="<?php echo $row['quantity']; ?>"
			              		 class="input-large" id="input01">
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label" for="textarea">Description</label>
			            <div class="controls">
			              <textarea class="input-large" name="desc" id="textarea" rows="4">
			              	<?php echo $row['description']; ?>
			              </textarea>
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label" for="fileInput">Product image
			            </label>
			            <div class="controls">
			              <input class="input-file" name="image" id="fileInput" type="file">
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label">Status</label>
			            <div class="controls">
			              <label class="radio">
			                <input type="radio" name="status" value="Active"> 
			                <!-- value="<?php echo $row['status']; ?>" -->
			                Active
			              </label>
			              <label class="radio">
			                <input type="radio" name="status" value="Inactive">
			                Inactive
			              </label>
			            </div>
			          </div>
        
			         <div class="form-actions">
			            <button type="submit" name="submit" value="" class="btn btn-primary btn-large">Save</button>
			            <button class="btn btn-large">Cancel</button>
			          </div>
		        </fieldset>
		      </form>	
						
					</div> <!-- /widget-content -->
						
				</div>				
				
		    </div> <!-- /span8 -->		    
		    
		</div> <!-- /row -->		
		
	</div> <!-- /.container -->
	
</div> <!-- /#content -->
