<?php
    $id = $_GET['u_id'];

    $sel = "SELECT * FROM user WHERE user_id=$id";
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
			    <a href="#">User</a> <span class="divider">/</span>
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
	      					User form	      					
      					</h3>	
      				</div> <!-- /widget-header -->
					
				<div class="widget-content">
						
				<form action="index.php?link=user_action" method="post" enctype="multipart/form-data" class="form-horizontal">

					<fieldset>

						<input type="hidden" name="id" value="<?php echo $row['user_id']; ?>" >
						<input type="hidden" name="action" value="<?php echo $action; ?>" >

			          <div class="control-group">
			            <label class="control-label" for="input01">First Name</label>
			            <div class="controls">
			              <input type="text" name="fname" value="<?php echo $row['fname'];  ?>"
			              		class="input-large" id="input01">
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label" for="input01">Middle Name</label>
			            <div class="controls">
			              <input type="text" name="mname" value="<?php echo $row['mid_name'];  ?>"
			              		 class="input-large" id="input01">
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label" for="input01">Last Name</label>
			            <div class="controls">
			              <input type="text" name="lname" value="<?php echo $row['lname'];  ?>"
			              		class="input-large" id="input01">
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label" for="input01">Email</label>
			            <div class="controls">
			              <input type="email" name="email" value="<?php echo $row['email'];  ?>"
			              		 class="input-large" id="input01">
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label" for="input01">Password</label>
			            <div class="controls">
			              <input type="password" name="password" value="<?php echo $row['password'];  ?>"
			              		class="input-large" id="input01">
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label" for="input01">Mobile No.</label>
			            <div class="controls">
			              <input type="number" name="number" value="<?php echo $row['mobile_num'];  ?>"
			              		 class="input-large" id="input01" maxlength="10">
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label" for="input01">Birthday</label>
			            <div class="controls">
			              <input type="date" name="bday" value="<?php echo $row['birthday'];  ?>">
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label">Gender</label>
			            <div class="controls">
			              <label class="radio">
			                <input type="radio" name="gender" value="Female">
			                Female
			              </label>
			              <label class="radio">
			                <input type="radio" name="gender" value="Male">
			                Male
			              </label>
			              <label class="radio">
			                <input type="radio" name="gender" value="Other">
			                Other
			              </label>
			            </div>
			          </div>

			          <div class="control-group">
				            <label class="control-label">Languages known</label>
				            <div class="controls">
				              <label class="checkbox inline">
				                <input type="checkbox" name="lan[]" id="inlineCheckbox1" value="Gujarati"> Gujarati
				              </label>
				              <label class="checkbox inline">
				                <input type="checkbox" name="lan[]" id="inlineCheckbox2" value="English"> English
				              </label>
				              <label class="checkbox inline">
				                <input type="checkbox" name="lan[]" id="inlineCheckbox3" value="Hindi"> Hindi
				              </label>
				              <label class="checkbox inline">
				                <input type="checkbox" name="lan[]" id="inlineCheckbox3" value="French"> French
				              </label>
				              <label class="checkbox inline">
				                <input type="checkbox" name="lan[]" id="inlineCheckbox3" value="Chinese"> Chinese
				              </label>
				         </div>
				         </div>

				        <div class="control-group">
					            <label class="control-label" for="multiSelect">Country</label>
					            <div class="controls">
					              <select multiple="multiple" id="multiSelect">
					                <option>1</option>
					                <option>2</option>
					                <option>3</option>
					                <option>4</option>
					                <option>5</option>
					              </select>
					            </div>
					    </div>			        
					         
			          <div class="control-group">
			            <label class="control-label" for="fileInput">Profile Pic</label>
			            <div class="controls">
			              <input class="input-file"  type="file" name="image" id="fileInput">
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

  </body>
</html>
