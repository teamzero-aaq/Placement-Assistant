<?php 
 include('security.php');
 include('includes/header.php');
 include('includes/navbar.php');

 ?>

<a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.php">Update HR Interview</a>
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
                      <h5 class="card-title text-uppercase text-muted mb-0">New Admins</h5>
                      <span class="h2 font-weight-bold mb-0">350,897</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Remove Admin</h5>
                      <span class="h2 font-weight-bold mb-0">2,356</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                    <span class="text-nowrap">Since last week</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                      <span class="h2 font-weight-bold mb-0">924</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                    <span class="text-nowrap">Since yesterday</span>
                  </p>
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
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
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
				
                

       


                    <?php 

                if (isset($_POST['hr_update'])) {

                 $up_question = $_POST['up_question'];

                $query = "SELECT * FROM hr WHERE hr_question = '$up_question' ";
                 $query_run = mysqli_query($connection,$query);

                  foreach ($query_run as $row) {
                 ?>
                <form method="POST" action="verify.php" >
                <input type="hidden" name="up_id" value="<?php echo $row['id'];?>">
                <div class="form-group">
                 
                  <div class="input-group-prepend">
                      <label>Question</label>
                    </div>

                  <div class="input-group input-group-alternative mb-3">
                    <textarea class="form-control" placeholder="" name="hr_question" value="" rows="4"><?php echo $row['hr_question'];?></textarea>
                  </div>
                </div>

                  <div class="form-group">
                     <div class="input-group-prepend">
                      <label>Answer</label>
                    </div>
                    
                  <div class="input-group input-group-alternative mb-3">

                   

                    <textarea class="form-control" placeholder="" name="hr_answer" value="" rows="7"><?php echo $row['hr_ans'];?></textarea>
                  </div>
                </div>


               
                <div class="modal-footer">
			 		<a href="gd.php">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
					<button type="submit" class="btn btn-outline-primary" name="updatehr">Update</button>
			      </div>
                 </form>
 				<?php 
                }

               
              }
              else
              	{  
				   
				  echo '<h4> Successfully Updated !!!</h4>';
				   	   ?>
				   	 <a href="gd.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button></a>	<?php 
				   			   	
				
				   
          		}

 ?>
              
			







			    </div>
			  </div>
			</div>
			 
			<!--end register form-->



				</div><!--end fluid container -->
			 




      
  










  <?php 
 include('includes/script.php');
 include('includes/footer.php');
 ?>