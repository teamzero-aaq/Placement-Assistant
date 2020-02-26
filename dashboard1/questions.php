<?php 
 include('security.php');
 include('includes/header.php');
 include('includes/navbar.php');
 
 ?>
         <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.php">Add Questions</a>
   
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
                      <h5 class="card-title text-upperc ase text-muted mb-0">Questions</h5>
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
                      <h5 class="card-title text-uppercase text-muted mb-0">Aptitiute</h5>
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
                      <h5 class="card-title text-uppercase text-muted mb-0">Technical</h5>
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
                  <h3 class="mb-0">Questions</h3>
                </div>
                  <div class="col text-right">
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                     <i class="ni ni-fat-add">&nbsp;</i>Add Question 
                    </button>
                  </div>
            </div>  

                   <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                     <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Add Question</h5>
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
                    <input class="form-control" placeholder="Enter Subject" type="text" name="subject" required="">
                  </div>
                </div>

                 <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <textarea class="form-control" placeholder="Enter Question Here..." name="question" required=""></textarea>
                </div>
              </div>

                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Enter Option One" type="text" name="opt1" required="">
                  </div>
                </div>


               
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Enter Option Two" type="text" name="opt2" required="">
                  </div>
                </div>


                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Enter Option Three" type="text" name="opt3" required="">
                  </div>
                </div>


                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Enter Option Four" type="text" name="opt4" required="">
                  </div>
                </div>

                  <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Enter Correct Option" type="text" name="ans" required="">
                  </div>
                </div>

                 <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  placeholder="Enter Solution Here..." name="solution" required=""></textarea>
                </div>
                </div>

                  <div class="custom-control custom-radio mb-3">
                    <input class="custom-control-input" id="customRadio5" checked="" type="radio" name="q_type" value="Aptitute">
                    <label class="custom-control-label" for="customRadio5">Aptitute</label>
                  </div>
                  <div class="custom-control custom-radio mb-3">
                    <input class="custom-control-input" id="customRadio6" type="radio" name="q_type" value="Technical">
                    <label class="custom-control-label" for="customRadio6">Technical</label>
                  </div>

                  <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                   <select name="usertype" required="">
                    <option value="Choose" disabled selected>Choose User Type</option>
                      <option value="2">Student</option>
                      <option value="3">Company</option>
                    </select>
                     </div>
                </div>
               

 		           <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-outline-primary" name="add_question">Add Question</button>
                  </div>
                  </form>
                </div>
              </div>
              </div><!--end register form-->

              	</div>
                </div><!-- card-header-->

          
                     
    <div class="table-responsive">

                            <?php 
                
                $query = "SELECT * FROM questions";
                $query_run = mysqli_query($connection,$query);
                ?>
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Subject</th>
                    <th scope="col">Question</th>
                    <th scope="col">Answer</th>
                    <th scope="col">solution</th>
                    <th scope="col">Type</th>
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
                          <span class="mb-0 text-sm"><?php echo $row['subject'];?></span>
                    </th>
                    <td>
                      <?php echo $row['question'];?>
                    </td>
                    <td>
                      <?php echo $row['ans'];?>
                    </td>
                      <td>
                        <?php   echo $row['solution'];?>
                    </td>
                    <td>
                        <?php echo $row['type'];?>
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