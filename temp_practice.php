<?php 
session_start(); 
error_reporting(0);
$count1=0;
$count=0;

include('database/db.php');
include('database/security.php');
// if (!$_SESSION['username']) {
//   header("Location: ./login.php");
// }

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
                    <p class="text-white-75 font-weight-light mb-5"></p>

                </div>
            </div>
        </div>
    </header>



    <div class="container pb-8 pt-5">
        <div class="row align-item-center">





            <?php
     $id=$_GET['id'];
   
     $q="select * from tests_data where department='$id'";
     $result=mysqli_query($connection,$q);
     if (mysqli_num_rows($result) > 0) {

while($rows=mysqli_fetch_array($result))
 {

 ?>



            <div class="col-xl-4 col-lg-6">
                <div class="dept_card">
                    <div class="dept_img">
                        <!-- <?php echo '<img src="go-to-admin/admin/assets/img/subject/'.$row['sub_img'].'" class="img-responsive dept_img">'?> -->
                        <img src="go-to-admin/admin/assets/img/subject/subject.jpeg" class="img-responsive dept_img">
                    </div><!-- end dept_img -->
                    <div class="details">
                        <h2><?php echo $rows['test_name']; ?>
                        </h2>
                        
                        <div class=" row">
                            <div class="col text-center">
                                <form action="" method="POST">
                                    <?php $bool=$rows['pass'];
									if($bool!='no'){
										$bool='yes';
									}
									?>
										
                                    <button type="button" class="btn btn-info btn-sm align-item-center practice_subject"
                                        name="subjectbtn" id="<?php echo $rows['test_id'] ;?>" data-toggle="modal"
                                        data-target="#myModal" data-id="<?php echo $bool; ?>">
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

        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">TEST INSTRUCTIONS</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                        <p>Evaluation will be out of 20 Marks</p>
                        <p>1. Test will be of 20 Minutes</p>
                        </p class="text-red">2. Do not Minimize or Exit Full Screen. If done so Test will be Submitted
                        </p>
						<p>Please enter password for following test id</p>
						
						<div id="here"></div>
							
                    </div>
                    <div class="modal-footer">
                        <form method="POST" action="test_temp.php" id="totest">
                            <div id=bodybody></div>
                        </form </div>
                    </div>

                </div>
            </div>



        </div>
<script>

</script>
        <?php
include('include_root/footer.php');
?>