<div id="content">    
  <div class="container">    
    <div id="page-title" class="clearfix">      
      <ul class="breadcrumb">
        <li>
          <a href="../../default.htm">Home</a> <span class="divider">/</span>
        </li>
        <li>
          <a href="#">Admin</a> <span class="divider">/</span>
        </li>
        <li class="active">Table</li>
        <!-- Add new Button   -->
        <a href="index.php?link=admin_form" class="btn btn-primary pull-right">Add New</a>
      </ul>
    </div> <!-- /.page-title -->  
    
    <div class="row">        
        <div class="span12">            
            <div class="widget widget-table">
            
          <div class="widget-header"> 
                   
            <h3>
              <i class="icon-th-list"></i>
              Data List             
            </h3>
            <h4>
                  <h3><?php echo @$_SESSION['i_success'];  unset($_SESSION['i_success']); ?></h3>
                  <h3><?php echo @$_SESSION['u_success'];  unset($_SESSION['u_success']); ?></h3>
                  <h3><?php echo @$_SESSION['d_success'];  unset($_SESSION['d_success']); ?></h3> 
            </h4>   
          </div> <!-- /widget-header -->
          
          <div class="widget-content">  
            
            <table class="table table-striped table-bordered table-highlight" id="example">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Contact No.</th>
                  <th>Profile Image</th>
                  <th>Status</th>
                  <th>Platform(s)</th>
                </tr>
              </thead>

    <?php

      $select = "SELECT * FROM admin";
      @$qry = mysqli_query($conn, $select);
      
      while(@$row=mysqli_fetch_assoc($qry)){

     ?>
              <tbody>
                <tr>
                  <td><?php echo @$no; @$no++; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['password']; ?></td>
                  <td><?php echo @$row['mobile_num']; ?></td>

                  <td><img src="Uploads/admin_img/<?php echo $row['profile_pic']; ?>" height="50" width="50"></td>

                  <td><?php echo $row['status']; ?></td> 

                  <td><a href="index.php?link=admin_form&a_id=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a> <br> <br> 
                  <a href="index.php?link=admin_action&action=delete&a_id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                  <!-- s -->
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



