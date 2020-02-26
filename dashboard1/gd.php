<?php 
 include('security.php');
 include('includes/header.php');
 include('includes/navbar.php');
 
 ?>
         <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.php">GD and Interview</a>
   
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
                      <h5 class="card-title text-upperc ase text-muted mb-0">Total GD</h5>
                      <?php 

                      $query = "SELECT id FROM gd ORDER BY id";
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
                      <h5 class="card-title text-uppercase text-muted mb-0">Total HR</h5>
                       <?php 

                      $query = "SELECT id FROM hr ORDER BY id";
                      $query_run = mysqli_query($connection,$query);
                      $row = mysqli_num_rows($query_run);
                      echo ' <span class="h2 font-weight-bold mb-0"> '.$row. '</span>';
                       ?>
                     
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
                  <h3 class="mb-0">GD Record</h3>
                </div>
                  <div class="col text-right">
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                     <i class="ni ni-fat-add">&nbsp;</i>Add GD 
                    </button>
                  </div>

                 
            </div>  

                   <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                     <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Add New GD Quastion</h5>
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
                    <input class="form-control" placeholder="Title" type="text" name="gd_title" required="">
                  </div>
                </div>

                 <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input class="form-control" placeholder="Link" type="text" name="gd_link" required="">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <textarea class="form-control" placeholder="Points" name="gd_point" required=""></textarea> 
                  </div>
                </div>

 		           <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-outline-primary" name="gd_btn">Add</button>
                  </div>
                  </form>
                </div>
              </div>
              </div><!--end register form-->


                




              	</div>
                </div><!-- card-header-->

               

                     
                      <div class="table-responsive">

                            <?php 
                
                $query = "SELECT * FROM gd";
                $query_run = mysqli_query($connection,$query);
               ?>
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Link</th>
                    <th scope="col">Points</th>
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
                            <span class="mb-0 text-sm"><?php echo $row['id'];?></span>
                      </th>
                      <td>
                        <?php echo $row['title'];?>
                      </td>
                      <td>
                        <?php echo $row['link'];?>
                      </td>
                        <td>
                          <?php  echo $row['points'];?>
                    </td>
                    <td class="text-left">
                      <div class="dropdown">
                        <a class="btn btn-md btn-icon-only text-default" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ni ni-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        
                              <!-- Button trigger modal -->
                              <form action="update_gd.php" method="POST">
                                <input type="hidden" name="uptitle" value="<?php echo $row['title'];?>">
                               <button type="submit" name="gd_update" class="dropdown-item">
                               <i class="ni ni-fat-add"></i>  <span>Update</span>
                                </button>
                               </form>

                              <form action="verify.php" method="POST">
                              <input type="hidden" name="deltitle" value="<?php echo $row['title'];?>">
                              <button type="submit" name="gd_remove" class="dropdown-item">
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
      


                 

            <!-- start 2 Table section-->
   
      <!-- Table -->
      <div class="row mt-5">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
            <div class="row align-items-center">
            <!-- Button trigger modal -->
                <div class="col">
                  <h3 class="text-white mb-0">HR Questions Record</h3>
                </div>
                  <div class="col text-right">
                     <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenterhr">
                     <i class="ni ni-fat-add">&nbsp;</i>Add HR 
                    </button>
                  </div>

                 
            </div>  



                      <!-- Modal -->
                <div class="modal fade" id="exampleModalCenterhr" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitlehr" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                     <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitlehr">Add HR Interview Question</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                      </div>
                    <div class="modal-body">



                <!-- Table 2 -->
      
            
                   <form method="POST" action="verify.php">

                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-portrait"></i><span>
                    </div>
                    <textarea class="form-control" placeholder="Question"  name="hr_question" required=""></textarea> 
                  </div>
                </div>

                 <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <textarea class="form-control" placeholder="Answer"  name="hr_answer" required=""></textarea> 
                  </div>
                </div>

               <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-outline-primary" name="hr_btn">Add</button>
                  </div>
                  </form>
                </div>
              </div>
              </div><!--end register form-->
                




                </div>
                </div><!-- card-header-->

          
                     
                      <div class="table-responsive">

                            <?php 

                function limit_words($string, $word_limit)
                {
                    $words = explode(" ",$string);
                    return implode(" ", array_splice($words, 0, $word_limit));
                }


                $query = "SELECT * FROM hr";
                $query_run = mysqli_query($connection,$query);
               ?>
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th class="text-white" scope="col">Id</th>
                    <th class="text-white" scope="col">Questions</th>
                    <th class="text-white" scope="col">Answers</th>
                    <th class="text-white" scope="col">Action</th>
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
                          <span class="mb-0 text-sm"><?php echo $row['id'];?></span>
                    </th>
                    <td>
                      <?php echo $row['hr_question'];?>
                    </td>
                    <td>
                     <?php  $short_ans = limit_words($row['hr_ans'],10);  
                       echo $short_ans; ?>
                    </td>
                     
                    <td class="text-left">
                      <div class="dropdown">
                        <a class="btn btn-md btn-icon-only text-secondary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ni ni-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                           <!-- Button trigger modal -->
                              <form action="update_hr.php" method="POST">
                                <input type="hidden" name="up_question" value="<?php echo $row['hr_question'];?>">
                               <button type="submit" name="hr_update" class="dropdown-item">
                               <i class="ni ni-fat-add"></i>  <span>Update</span>
                                </button>
                               </form>

                              <form action="verify.php" method="POST">
                              <input type="hidden" name="del_question" value="<?php echo $row['hr_question'];?>">
                              <button type="submit" name="hr_remove" class="dropdown-item">
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
             </div><!-- end card footer-->


            <!-- pagination section -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item-dark disabled">
                    <a class="page-link-dark" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item-dark active">
                    <a class="page-link-dark" href="#">1</a>
                  </li>
                  <li class="page-item-dark">
                    <a class="page-link-dark" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item-dark"><a class="page-link-dark" href="#">3</a></li>
                  <li class="page-item-dark">
                    <a class="page-link-dark" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
           


          </div>
        </div>
   </div>



    <!--second table end-->
  <?php 
 include('includes/script.php');
 include('includes/footer.php');
 ?>