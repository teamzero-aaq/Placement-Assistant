<?php session_start(); 
error_reporting(0);


include('dashboard/db.php');
include('dashboard/security.php');
include('include_root/header.php');


//if (!$_SESSION['username']) {
//  header("Location: ./login.php");
//}
?>


<body>
    <?php
include('include_root/navbar.php');
?>


    <!-- Masthead -->
    <header class="mastheader">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">Online Test</h1>
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5">In the history of modern astronomy, there is
                        probably no one greater leap forward than the building and launch of the space telescope.</p>

                </div>
            </div>
        </div>
    </header>



    <div class="container pb-8 pt-5">


        <div class="row align-item-center">




            <?php 
                
                $query = "SELECT * FROM department";
                $query_run = mysqli_query($connection,$query);
                 if (mysqli_num_rows($query_run) > 0) {
                    while($row = mysqli_fetch_assoc($query_run)) 
                    {
                     ?>

            <div class="col-xl-4 col-lg-6">
                <div class="dept_card">
                    <div class="dept_img">
                        <?php echo '<img src="go-to-admin/admin/assets/img/departments/'.$row['bg_link'].'" class="img-responsive dept_img">'?>
                    </div><!-- end dept_img -->
                    <div class="details">
                        <h2><?php echo $row['department'] ?></h2>

                        <div class="row">
                            <div class="col text-center">

                                <input type="hidden" name="tempdept" value="<?php echo $row['dept_id'];?>">
                                <a href="<?php echo $_GET['name'] ?>.php?id=<?php echo $row['dept_id'];?>">
                                    <button type="submit" class="btn btn-info btn-sm align-item-center"
                                        name="subject_btn">
                                        <i class="ni ni-fat-add">&nbsp;</i>Subject
                                    </button></a>

                            </div>



                        </div>




                    </div>
                    <!--details-->
                </div><!-- end dept card -->
            </div><!-- end column-->

            <?php
                       
                    }

                    }
                    else
                    {
                      echo '<h4 class="bg-success"> No Record Found</h4>' ;
                    }

                   ?>

        </div>






    </div>





    </div>
    </div>

    <?php
include('include_root/footer.php');
?>