<?php 
session_start(); 
error_reporting(0);
$count1=0;
$count=0;

include('dashboard/db.php');
if (!$_SESSION['username']) {
  header("Location: ./login.php");
}

include('include_root/header.php');
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
     $id=$_GET['id'];
   
     $q="select * from subject where dept_id='$id'";
     $result=mysqli_query($connection,$q);
     if (mysqli_num_rows($result) > 0) {

while($rows=mysqli_fetch_array($result))
 {

 ?>



            <div class="col-xl-4 col-lg-6">
                <div class="dept_card">
                    <div class="dept_img">
                        <?php echo '<img src="dashboard/assets/img/subject/'.$row['sub_img'].'" class="img-responsive dept_img">'?>
                    </div><!-- end dept_img -->
                    <div class="details">
                        <h2><?php echo $rows['department']; ?>
                        </h2>

                        <div class=" row">
                            <div class="col text-center">
                                <form action="" method="POST">
                                    <input type="hidden" name="tempdept" value="<?php echo $row['dept_id'];?>">
                                    <button type="button" class="btn btn-info btn-sm align-item-center practice_subject"
                                        name="subjectbtn" id="<?php echo $rows['department'] ;?>">
                                        <i class="ni ni-fat-add">&nbsp;</i>Give Test
                                    </button>
                                </form>
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

        <div class="col-md-4 sidebar">
            <form method="POST" action="test_temp.php" id="totest">
                <div id=bodybody></div>
            </form>





        </div>



    </div>

    <?php
include('include_root/footer.php');
?>