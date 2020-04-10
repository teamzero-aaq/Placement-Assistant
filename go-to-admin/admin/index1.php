 <?php 

 include('security.php'); 
  session_start();
 include('includes/header.php');
 include('includes/navbar.php');
 ?>
 <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.php">Dashboard</a>
    <?php include('includes/navbarend.php'); ?>

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
                      <h5 class="card-title text-uppercase text-muted mb-0">Heading</h5>
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
                    <span class="text-nowrap"></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
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
                    <span class="text-nowrap"></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Heading</h5>
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
                    <span class="text-nowrap"></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Heading</h5>
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
                    <span class="text-nowrap"></span>
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
            <div class="row align-items-center">
            <!-- Button trigger modal -->
                <div class="col">
                  <h3 class="mb-0">User Records</h3>
                </div>
                 
            </div>  


                </div><!-- card-header-->

          
                     
                      <div class="table-responsive">

                            <?php 
                
                $query = "SELECT * FROM register";
                $query_run = mysqli_query($connection,$query);
                ?>
              <table class="table align-items-center table-flush display" id="table_id">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Password</th>
                    <th scope="col">User Type</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                 
                  <?php 
                    if (mysqli_num_rows($query_run) > 0) {
                                          
                    while($row = mysqli_fetch_assoc($query_run)) 
                     {
                     ?>

                  <tr>
                    <th>
                          <span class="mb-0 text-sm"><?php echo $row['name'];?></span>
                    </th>
                    <td>
                      <?php echo $row['username'];?>
                    </td>
                    <td>
                      <?php echo $row['email'];?>
                    </td>
                      <td>
                        <?php   echo $row['contact'];?>
                    </td>
                    <td>
                        <?php echo $row['password'];?>
                    </td>
                    <td>
                        <?php 

                        if ($row['usertype'] ==  1) {
                          echo "Admin";
                        }
                        else if ($row['usertype'] ==  2) {
                           echo "Company"; 
                        }
                        else
                        {
                           echo "Student";
                        }
                        ?>
                    </td>
                    <td class="text-left">
                      <div class="dropdown">
                        <a class="btn btn-md btn-icon-only text-default" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ni ni-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <form action="register_update.php" method="POST">
                            <input type="hidden" name="updateuname" value="<?php echo $row['username'];?>">
                              <!-- Button trigger modal -->
                              <button type="submit" class="dropdown-item" name="updatebtn">
                              <i class="ni ni-fat-add">&nbsp;</i>Update 
                             </button>
                           </form>

                              <form action="verify.php" method="POST">
                            <input type="hidden" name="deluname" value="<?php echo $row['username'];?>">
                          <button type="submit" class="dropdown-item" name="deletebtn">
                           <i class="ni ni-fat-remove">&nbsp;</i>Remove
                         </button> 
                        </form>
                        </div>
                      </div>
                    </td>
                  </tr>

                    <?php
                       
                     }

                    }
                    else
                    {
                      echo '<h4 class="bg-success"> No Record Found</h4>' ;
                    }

                   ?>

                </tbody>
              </table>
            </div>
           


          </div>
        </div>
      </div>




     






  <?php 
 include('includes/script.php');
 include('includes/footer.php');
 ?>