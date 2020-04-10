<?php 
 include('security.php');
 include('includes/header.php');
 include('includes/navbar.php');
 
 ?>
         <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block">Companies</a>
   
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
				    <div class="row align-items-center">
						<!-- Button trigger modal -->
                <div class="col">
                  <h3 class="mb-0">Companies Records</h3>
                </div>
                  <div class="col text-right">
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                     <i class="ni ni-fat-add">&nbsp;</i>Add Companiy 
                    </button>
                  </div>
            </div>  

                   <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                     <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Add New Company</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                      </div>
                    <div class="modal-body">
        
      	
                <!-- Table -->
      
            
                   <form method="POST" action="verify.php">

                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-portrait"></i><span>
                    </div>
                    <input class="form-control" placeholder="Name" type="text" name="name" required="">
                  </div>
                </div>

                 <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input class="form-control" placeholder="Username" type="text" name="username" required="">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email" name="mailid" required="">
                  </div>
                </div>

 			        	<div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                    </div>
                    <input class="form-control" placeholder="Contact" type="tel" name="contact" required="">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="passadmin" required="">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Confirm Password" type="password" name="confirmpass" required="">
                  </div>
                </div>


 		           <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-outline-primary" name="register">Add</button>
                  </div>
                  </form>
                </div>
              </div>
              </div><!--end register form-->

              	</div>
                </div><!-- card-header-->

          
                     
                      <div class="table-responsive">

                            <?php 
                
                $query = "SELECT * FROM company";
                $query_run = mysqli_query($connection,$query);
                ?>
              <table class="table align-items-center table-flush display" id="table_id">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Website</th>
                    <th scope="col">Status</th>
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
                          <span class="mb-0 text-sm"><?php echo $row['company_name'];?></span>
                    </th>
                    <td>
                      <?php echo $row['company_website'];?>
                    </td>
                      <td>
                        <?php   

                        if ($row['status'] ==  0) {
                          echo '<span style="color:#e67e22;">Pending</span>';
                        }
                        else if ($row['status'] ==  1) {
                           echo '<span style="color:#2ecc71;">Approved</span>';
                        }
                        else if ($row['status'] ==  2) {
                          echo '<span style="color:#e74c3c;">Rejected</span>';
                        }

                        ?>
                    </td>
                    <td class="text-left">
                      <div class="dropdown">
                        <a class="btn btn-md btn-icon-only text-default" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ni ni-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <form action="verify.php" method="POST">
                            <input type="hidden" name="companyname" value="<?php echo $row['company_name'];?>">
                              <!-- Button trigger modal -->
                              <button type="submit" class="dropdown-item" name="approve_status">
                              <i class="ni ni-fat-add">&nbsp;</i>Approve
                             </button>
                           </form>

                           <form action="verify.php" method="POST">
                            <input type="hidden" name="companyname" value="<?php echo $row['company_name'];?>">
                              <!-- Button trigger modal -->
                              <button type="submit" class="dropdown-item" name="reject_status">
                              <i class="ni ni-fat-add">&nbsp;</i>Reject
                             </button>
                           </form>

                           <form action="verify.php" method="POST">
                            <input type="hidden" name="delcomp" value="<?php echo $row['company_name'];?>">
                            <button type="submit" class="dropdown-item" name="deletecomp">
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
            <!-- pagination section -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div><!-- end card footer-->


          </div>
        </div>
      </div>




  <?php 
 include('includes/script.php');
 include('includes/footer.php');
 ?>