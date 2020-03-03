<?php 
 include('security.php'); 
 include('includes/header.php');
 include('includes/navbar.php');
 
 ?>
<a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block">Add New Test</a>

<?php include('includes/navbarend.php'); ?>

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
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

        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Add New Test</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="#!" class="btn btn-sm btn-primary">Edit</a>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <form action="verify.php" method="POST" enctype="multipart/form-data">

                        <?php 
                
                $query = "SELECT * FROM department";
                $query_run = mysqli_query($connection,$query);
                ?>

                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Choose Department</label>
                                        <select id="" name="department" class="form-control  mb-3">
                                            <option value="Choose" disabled selected>Choose Department</option>

                                            <?php
                                          while($row=mysqli_fetch_array($query_run)){
                                            ?>
                                            <option value="<?php echo $row['dept_id'];?>">
                                                <?php echo $row['department']; ?>
                                            </option>

                                            <?php
                                        
                                          }?>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="">Upload CSV File</label>
                                        <div class="custom-file">

                                            <input type="file" class="custom-file-input"
                                                aria-describedby="inputGroupFileAddon01" name="file" value="file"
                                                id="file" required="true">
                                            <label class="custom-file-label" for="file">Select a CSV file to
                                                upload</label>
                                        </div>

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-primary" name="submit_file">Add</button>
                            </div>
                        </div>
                    </form>



                </div>





            </div>
        </div>


    </div>


    <?php 
 include('includes/script.php');
 include('includes/footer.php');
 ?>