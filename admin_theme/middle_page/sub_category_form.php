<?php

	@$id = $_GET['s_id'];

	$sel = "SELECT * FROM sub_category WHERE sub_cat_id='$id'";
	$qry = mysqli_query($conn, $sel);
	@$row = mysqli_fetch_assoc($qry);

	if ($id =='') {
		$action = 'Insert';
	}
	else{
		$action = 'Update';
	}
?>

<div id="content">		
	<div class="container">		
		<div id="page-title" class="clearfix">			
			<ul class="breadcrumb">
			  <li>
			    <a href="default.htm">Home</a> <span class="divider">/</span>
			  </li>
			  <li>
			    <a href="#">Sub-Category</a> <span class="divider">/</span>
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
	      					Sub-Category form	      					
      					</h3>	
      				</div> <!-- /widget-header -->
					
				<div class="widget-content">
						
				<form action="index.php?link=sub_category_action" method="post" 
						enctype="multipart/form-data" class="form-horizontal">

					<fieldset>

						<input type="hidden" name="id" value="<?php echo $row['sub_cat_id']; ?>">

						<input type="hidden" name="action" value="<?php echo $action; ?>">

						<div class="control-group">
					            <label class="control-label" for="select01">Category</label>
					            <div class="controls">
					              <select id="select01" name="cat_id">
					                <option value="">SELECT Category</option>
					                <?php 
					                		$sel="SELECT * FROM category WHERE status='active'";
					                		$qry = mysqli_query($conn,$sel);
					                		while($result=mysqli_fetch_assoc($qry)){
													
					                 ?>
					                
					                <option value="<?php echo $result['cat_id']; ?>"><?php echo $result['cat_name']; ?></option>
					                <?php }?>
					              </select>
					            </div>
					    </div>

			          <div class="control-group">
			            <label class="control-label" for="input01">Sub-Category Name</label>
			            <div class="controls">
			              <input type="text" name="sname" value="<?php echo $row['sub_cat_name']; ?>" class="input-large" id="input01">
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
			            <label class="control-label" for="fileInput">Sub-Category image
			            </label>
			            <div class="controls">
			              <input type="file" class="input-file" name="image" id="fileInput">
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label">Status</label>
			            <div class="controls">
			              <label class="radio">
			                <input type="radio" name="status" value="Active">
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
