<div id="content">		
	<div class="container">		
		<div id="page-title" class="clearfix">			
			<ul class="breadcrumb">
			  <li>
			    <a href="../../default.htm">Home</a> <span class="divider">/</span>
			  </li>
			  <li>
			    <a href="#">Contact Us</a> <span class="divider">/</span>
			  </li>
			  <li class="active">Table</li>
			  <!-- Add new Button   -->
        		<a href="index.php?link=contact_us_form" class="btn btn-primary pull-right">Add New</a>
			</ul>			
		</div> <!-- /.page-title -->
		
		<div class="row">		    
		    <div class="span12">	      		
	      		<div class="widget widget-table">						
					<div class="widget-header">						
						<h3>
							<i class="icon-th-list"></i>
							Contact Us List :->							
						</h3>
					<h2>
	                  	<?php echo @$_SESSION['i_success'];  unset($_SESSION['i_success']); ?>
	                  	<?php echo @$_SESSION['u_success'];  unset($_SESSION['u_success']); ?>
	                  	<?php echo @$_SESSION['d_success'];  unset($_SESSION['d_success']); ?> 
	            	</h2>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">	
						<table class="table table-striped table-bordered table-highlight" id="example">
							
				<thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th>Contact No.</th>
                  <th>Status</th>
                  <th>Platform(s)</th>
                </tr>
              </thead>

        <?php

		    $select = "SELECT * FROM contact_us";
		    @$qry = mysqli_query($conn, $select);
		      
		    while(@$row=mysqli_fetch_assoc($qry)){

     ?>
              <tbody>
                <tr>
                  <td><?php echo @$no; @$no++; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['subject']; ?></td>
                  <td><?php echo $row['message']; ?></td>
                  <td><?php echo @$row['contact_no']; ?></td>
                  <td><?php echo $row['status']; ?></td>               

                  <td><a  class="btn btn-info" href="index.php?link=contact_us_form&c_id=<?php echo $row['id']; ?>">Edit</a> <br> <br>
                   <a class="btn btn-danger" href="index.php?link=contact_us_action&c_id=<?php echo $row['id']; ?>&action=delete ">Delete</a></td>                  
                </tr>    

                <?php }?>
                </tbody>

			</table>

					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->	
				
		    </div> <!-- /span12 -->
		    
		</div> <!-- /row -->

	</div> <!-- /.container -->
	
</div> <!-- /#content -->
