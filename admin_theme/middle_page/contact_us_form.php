<?php
    @$id = $_GET['c_id'];

    $sel = "SELECT * FROM contact_us WHERE id=$id";
    $qry = mysqli_query($conn,$sel);
    @$row = mysqli_fetch_assoc($qry);
    
    if ($id==''){
        $action='insert';
    } 
    else{
        $action='update';
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
			    <a href="#">Contact Us</a> <span class="divider">/</span>
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
	      					Contact Us	      					
      					</h3>	
      				</div> <!-- /widget-header -->
					
				<div class="widget-content">
						
				<form action="index.php?link=contact_us_action" method="post" 
					enctype="multipart/form-data" class="form-horizontal">

					<fieldset>
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>" >

						<input type="hidden" name="action" value="<?php echo $action ?>" >

			          <div class="control-group">
			            <label class="control-label" for="input01">Name</label>
			            <div class="controls">
			              <input type="text" name="name" value="<?php echo $row['name']; ?>" 
			              		class="input-large" id="input01">
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label" for="input01">Email</label>
			            <div class="controls">
			              <input type="email" name="email" value="<?php echo $row['email']; ?>" 
			              		class="input-large" id="input01">
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label" for="input01">Subject</label>
			            <div class="controls">
			              <input type="text" name="sub" value="<?php echo $row['subject']; ?>" 
			              		class="input-large" id="input01">
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label" for="textarea">Message</label>
			            <div class="controls">
			              <textarea class="input-large" name="msg" id="textarea" rows="4"><?php echo $row['message']; ?></textarea>
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label" for="input01">Contact No.</label>
			            <div class="controls">
			              <input type="number" name="number" value="number" class="input-large" id="input01" maxlength="10">
			            </div>
			          </div>

			          <div class="control-group">
					            <label class="control-label" for="select01">Country</label>
					            <div class="controls">
					              <select id="select01">
					                <option>something</option>
					                <option>2</option>
					                <option>3</option>
					                <option>4</option>
					                <option>5</option>
					              </select>
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


