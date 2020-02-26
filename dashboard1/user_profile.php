
 <?php 
 include('security.php');
 include('includes/header.php');
 include('includes/navbar.php');

 ?>

<a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.php">Update Admid</a>
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

                 

                 $username = $_SESSION['username'];
                 echo $username;
                $query = "SELECT * FROM user_profile WHERE username = '$username' ";
                 $query_run = mysqli_query($connection,$query);
                 $num=mysqli_num_rows($query_run);

                 if($num==1)
                 {
                  $row=mysqli_fetch_array($query_run);
                 	?>
                 	

                  
                <form method="POST" action="verify.php" >

                    <div class="form-group">
                      <label>Username</label>
                    <input class="form-control" placeholder="" type="text" name="username" value="<?php echo $username;?>" disabled>
                
                </div>
                
                <div class="form-group">
                  <label>First Name</label>
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-portrait"></i><span>
                    </div>
                    <input class="form-control" placeholder="" type="text" name="fname" value="<?php echo $row['first_name'];?>">
                  </div>
                </div>

                <div class="form-group">
                  <label>Last name</label>
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <input class="form-control" placeholder="" type="text" name="lname" value="<?php echo $row['last_name'];?>">
                  </div>
                </div>

 			        	<div class="form-group">
                  <label>College name</label>
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <input class="form-control" placeholder="" type="text" name="cname" value="<?php echo $row['college_name'];?>">
                  </div>
                </div>

                <div class="form-group">
                  <label>Department</label>
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <input class="form-control" placeholder="" type="text" name="dname" value="<?php echo $row['department'];?>">
                  </div>
                </div>
                
                <div class="form-group">
                  <label>Address</label>
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <textarea name="address" style="width:2000px;height:150px;"><?php echo $row['address'] ?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label>Skills</label>
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <textarea name="skill_set" style="width:2000px;height:150px;"><?php echo $row['skills'] ?></textarea>
                  </div>
                </div>


                <div class="form-group">
                  <label>Industry knowledge</label>
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <textarea name="ind_k" style="width:2000px;height:150px;"><?php echo $row['industry'] ?></textarea>
                  </div>
                </div>


                <div class="form-group">
                  <label>Notable Projects</label>
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                   <textarea name="projects" style="width:2000px;height:150px;"><?php echo $row['project'] ?></textarea>
                  </div>
                </div>


                <div class="form-group">
                  <label>Any internship or other work experience</label>
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <textarea name="intern" style="width:2000px;height:150px;"><?php echo $row['intern'] ?></textarea>
                  </div>
                </div>

                 <div class="modal-footer">
             <button type="submit" class="btn btn-outline-primary" name="update_user_update">Update</button>
                         
                  </div>
                 </form>
                
                 
 				<?php 
                }

               
              
              

 
                 	
                 else
                 {
                 	?>
                 	 <form method="POST" action="verify.php" >

                    <div class="form-group">
                      <label>Username</label>
                    <input class="form-control" placeholder="" type="text" name="upusername" value="<?php echo $username ?>" disabled>
                
                </div>
                
                <div class="form-group">
                  <label>First Name</label>
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-portrait"></i><span>
                    </div>
                    <input class="form-control" placeholder="first name" type="text" name="fname" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label>Last name</label>
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <input class="form-control" placeholder="last name" type="text" name="lname" value="">
                  </div>
                </div>

 			        	<div class="form-group">
                  <label>College name</label>
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <input class="form-control" placeholder="college name" type="text" name="cname" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label>Department</label>
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <input class="form-control" placeholder="Department name eg:computer engineering" type="text" name="dname" value="">
                  </div>
                </div>
                
                <div class="form-group">
                  <label>Address</label>
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <textarea name="address" placeholder=" your current address" style="width:2000px;height:150px;"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label>Skills</label>
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <textarea name="skill_set" placeholder="your skills like java, c++ etc" style="width:2000px;height:150px;"></textarea>
                  </div>
                </div>


                <div class="form-group">
                  <label>Industry knowledge</label>
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <textarea name="ind_k" placeholder="eg:IOT,Machine learning etc" style="width:2000px;height:150px;"></textarea>
                  </div>
                </div>


                <div class="form-group">
                  <label>Notable Projects</label>
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                   <textarea name="projects" placeholder="your projects description " style="width:2000px;height:150px;"></textarea>
                  </div>
                </div>


                <div class="form-group">
                  <label>Any internship or other work experience</label>
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <textarea name="intern" placeholder=" any work exprience or internships" style="width:2000px;height:150px;"></textarea>
                  </div>
                </div>

                 <div class="modal-footer">
             <button type="submit" class="btn btn-outline-primary" name="update_user_create">Create</button>
                         
                  </div>
                 </form>

    <?php               

                 }
                 ?>
                 
                 	

              
			






<!--end fluid container -->
			 




      
  










  <?php 
 include('includes/script.php');
 include('includes/footer.php');
 ?>