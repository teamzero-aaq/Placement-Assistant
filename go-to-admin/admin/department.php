<?php 
 include('security.php');
 include('includes/header.php');
 include('includes/navbar.php');
 
 ?>
        

   

             <div class="col">
                                      <!-- Button trigger modal -->
                  <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter">
                    Add Department
                  </button>
 
                




              </div>







   
    <?php include('includes/navbarend.php'); ?>




                <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Add Department</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          
               <form method="POST" action="verify.php" enctype="multipart/form-data">

                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-portrait"></i><span>
                    </div>
                    <input class="form-control" placeholder="Enter Department Name" type="text" name="deptname" required="">
                  </div>
                </div>


            

                  <div class="form-group">
                   
                    <div class="custom-file">

                      <input type="file" class="custom-file-input" id="inputGroupFile01"
                        aria-describedby="inputGroupFileAddon01" name="deptfile">
                      <label class="custom-file-label" for="inputGroupFile01">Choose Depertment Image</label>
                    </div>
                
                  </div>

               <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-outline-primary" name="adddept">Add</button>
                  </div>
                  </form>

                        </div>
                      </div>
                    </div>
                  </div>
              <!--end model-->



<!-- Header -->
    <div class="header bg-gradient-primary pb-4 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
 
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

                      


          
        </div> <!-- end header body -->
      </div>
    </div>
       <!-- start Table section-->





    <div class="container-fluid pb-8 pt-5">
     
  

   <!-- Card stats --> 
        
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
                         <div class="dept_img" > 
                          <?php echo '<img src="assets/img/departments/'.$row['bg_link'].'" class="img-responsive dept_img">'?>
                         </div><!-- end dept_img -->
                         <div class="details">
                          <h2><?php echo $row['department'];?></h2>                       

                            <div class="row justify-content-md-center">
                            <div class="col col-md-auto"> 
                             <form action="subject.php" method="POST">
                             <input type="hidden" name="tempdept" value="<?php echo $row['dept_id'];?>">
                             <button type="submit" class="btn btn-primary btn-sm" name="subjectbtn">
                              <i class="ni ni-fat-add">&nbsp;</i>Subject
                             </button>
                             </form></div>
                            <div class="col col-md-auto">
                              <form action="department_setting.php" method="POST">
                              <input type="hidden" name="settingdept" value="<?php echo $row['department'];?>">
                             <button type="submit" class="btn btn-secondary btn-sm text-right" name="deldept">
                              <i class="ni ni-fat-add">&nbsp;</i>Setting
                             </button>
                             </form></div>
                            </div>


                          
                         </div><!--details-->
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

            </div><!-- end row-->
            


                
 


  <?php 
 include('includes/script.php');
 include('includes/footer.php');
 ?>