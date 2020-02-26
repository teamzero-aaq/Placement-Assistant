<?php 
 include('security.php'); 
 
 include('includes/header.php');
 include('includes/navbar.php');
 
 ?>
         <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block">Add User</a>
   
    <?php include('includes/navbarend.php'); ?>


<!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">

          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-upperc ase text-muted mb-0">Admin Registered</h5>
                      <?php 

                      $query = "SELECT username FROM register ORDER BY username";
                      $query_run = mysqli_query($connection,$query);
                      $row = mysqli_num_rows($query_run);
                      echo ' <span class="h2 font-weight-bold mb-0"> '.$row. '</span>';
                       ?>
                     
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Company Registered</h5>
                      <span class="h2 font-weight-bold mb-0">2,356</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Student Registered</h5>
                      <span class="h2 font-weight-bold mb-0">924</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                      <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-percent"></i>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>

                    <div class="col mt-5">
                        <?php 

                              if (isset($_SESSION['success']) && $_SESSION['success'] != '')
                              {
                                
                               echo  '<div class="alert alert-success" role="alert"> '.$_SESSION['success'].' </div>';
                              unset($_SESSION['success']);
                               }
                              if (isset($_SESSION['status']) && $_SESSION['status'] != '')
                               {
                                echo  '<div class="alert alert-danger" role="alert"> '.$_SESSION['status'].' </div>';
                              unset($_SESSION['status']);
                               }


                                ?>
                                  </div>

          </div>
        </div>
      </div>
    </div>
       <!-- start Table section-->
    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
				    </div>
            <!-- card-header-->

          
                     
                      <div class="table-responsive">

                            <?php 
                
                $query = "SELECT * FROM department";
                $query_run = mysqli_query($connection,$query);
                ?>
              
              <form action="verify.php" method="POST" enctype='multipart/form-data'>
<p>SELECT DEPARTMENT</p>
<select name="department" id="department">
  <?php
while($row=mysqli_fetch_array($query_run)){
  ?>
<option value="<?php echo $row['dept_id'];?>"><?php echo $row['department']; ?></option>

  <?php
}
   ?>
    

</select><br><br>
<p>SELECT SUBJECT</p>
<select name="sub" id="sub">
    
</select>
<br></br>
<p>NEW SUBJECT(WRITE DOWN BELOW)</p>
<input type="text" name="new_sub" id="new_sub" placeholder="SUBJECT NAME">

<br><br>
<input type="file" name="file_prac" value="file" id="file_prac" required="true">
<label for="fileupload"> Select a file to upload</label>
<input type="submit" name="submit_file_prac">
</form>


            </div>
            <!-- pagination section -->
            <!-- end card footer-->


          </div>
        </div>
      </div>

</div>


  <?php 
 include('includes/script.php');
 include('includes/footer.php');
 ?>