<?php
    @$id = $_GET['b_id'];

    $sel = "SELECT * FROM banner WHERE bann_id=$id";
    $qry = mysqli_query($conn,$sel);
    @$row = mysqli_fetch_assoc($qry);
    
    if ($id==''){
        $action='Insert';
    } 
    else{
        $action='Update';
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
			    <a href="#">Banner</a> <span class="divider">/</span>
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
	      					Banner form	      					
      					</h3>	
      				</div> <!-- /widget-header -->
					
				<div class="widget-content">
						
				<form action="index.php?link=banner_action" method="post" enctype="multipart/form-data" class="form-horizontal">

					<fieldset>

						<input type="hidden" name="id" value="<?php echo $row['bann_id']; ?>" >
						<input type="hidden" name="action" value="<?php echo $action ?>" >

			          <div class="control-group">
			            <label class="control-label" for="input01">Banner Name</label>
			            <div class="controls">
			              <input type="text" name="bname" value="<?php echo $row['bann_name']; ?>"
			              		class="input-large" id="input01">
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label" for="textarea">Description</label>
			            <div class="controls">
			              <textarea class="input-large" name="desc" id="textarea" rows="4">
			              	<?php echo $row['bann_desc']; ?>
			              </textarea>
			            </div>
			          </div>			          
					         
			          <div class="control-group">
			            <label class="control-label" for="fileInput">Banner Image</label>
			            <div class="controls">
			              <input class="input-file"  type="file" name="image" value="<?php echo $row['bann_image']; ?>" id="fileInput">
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label">Status</label>
			            <div class="controls">
			              <label class="radio">
			                <input type="radio" name="status" value="active">
			                Active
			              </label>
			              <label class="radio">
			                <input type="radio" name="status" value="inactive">
			                Inactive
			              </label>
			            </div>
			          </div>
			         		          
			         <div class="form-actions">
			            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-large">Save</button>
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
