<?php 
 include('security.php'); 
 include('includes/header.php');
 include('includes/navbar.php');
 
 ?>
<a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block">Subject</a>

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
                            <h3 class="mb-0">Subjects</h3>
                        </div>
                        <div class="col text-right">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                <i class="ni ni-fat-add">&nbsp;</i>Add Subject
                            </button>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Add New Subject</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">


                                    <!-- Table -->
                                    <?php 

                  if (isset($_POST['subjectbtn'])) {
                    $dept = $_POST['tempdept'];

                    $getname = "SELECT * FROM department where dept_id = '$dept' ";
                    $getname_run = mysqli_query($connection,$getname);
                    $r = mysqli_fetch_assoc($getname_run);

                }
                 ?>


                                    <form method="POST" action="verify.php" enctype="multipart/form-data">


                                        <input class="form-control" placeholder="" type="hidden" name="dept_id"
                                            value="<?php echo $dept;?>">

                                        <input class="form-control" placeholder="" type="hidden" name="deptname"
                                            value="<?php echo $r['department'];?>">


                                        <div class="form-group">
                                            <div class="input-group input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-portrait"></i><span>
                                                </div>
                                                <input class="form-control" placeholder="Enter Subject" type="text"
                                                    name="subject" required="">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="input-group input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                                </div>
                                                <textarea class="form-control" placeholder="Reference..."
                                                    name="subject_ref" required=""></textarea>
                                            </div>
                                        </div>


                                        <div class="form-group">

                                            <div class="custom-file">

                                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                    aria-describedby="inputGroupFileAddon01" name="subfile">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose Subject
                                                    Image</label>
                                            </div>

                                        </div>


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-outline-primary"
                                                name="addsubject">Add</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--end register form-->

                    </div>
                </div><!-- card-header-->



                <div class="table-responsive">

                    <?php 
                
                $query = "SELECT * FROM subject where dept_id = '$dept' ";
                $query_run = mysqli_query($connection,$query);
                ?>
                    <table class="table align-items-center table-flush display" id="table_id">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Subject</th>
                                <th scope="col">Refernce</th>
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
                                    <?php echo $row['reference'];?>
                                </td>
                                <td class="text-left">
                                    <div class="dropdown">
                                        <a class="btn btn-md btn-icon-only text-default" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ni ni-settings"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <form action="update_subject.php" method="POST">
                                                <input type="hidden" name="updatesub"
                                                    value="<?php echo $row['subject'];?>">
                                                <!-- Button trigger modal -->
                                                <button type="submit" class="dropdown-item" name="updatesubject">
                                                    <i class="ni ni-fat-add">&nbsp;</i>Update
                                                </button>
                                            </form>

                                            <form action="verify.php" method="POST">
                                                <input type="hidden" name="delsub"
                                                    value="<?php echo $row['subject'];?>">
                                                <button type="submit" class="dropdown-item" name="deletesub">
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