<?php include("dashboard/db.php"); 
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
                    <h1 class="text-uppercase text-white font-weight-bold">Group Discussion</h1>
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5"></p>

                </div>
            </div>
        </div>
    </header>



    <div class="container testsection">
        <div class="row">
            <div class="col-md-8 col-sm-10 left-side">
                <h5>Topics</h5>
                <div class="list-group-flush">
                    <form action="forum.php" method="post" id="view_gd_forum">
                        <ul class="list-group gdlist">
                            <?php 
          //$mysqli = new mysqli("localhost:3306", "bookbech_placement", "placement@123", "bookbech_placement");
    
$result = mysqli_query($connection,'select * from gd_hr where type="gd"');


while($rows=mysqli_fetch_array($result))
 { ?>
                            <li class="list-group-item list-group-item-action"><i class="far fa-folder-open mx-2"></i><a
                                    href="forum.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['question']; ?></a>
                            </li>
                            <?php
       }
       ?>
                        </ul>
                    </form>


                </div>





            </div>








            <div class="col-md-4 col-sm-10 sidebar">

                <div class="sidebar-item">
                    <div class="make-me-sticky">


                        <h3 class="style-title">Points to remember before you participate in this discussion:</h3>
                        <p class="p-style">1. Assume, you one of the member of a real group discussion.</p>
                        <p class="p-style">2. Take the initiative to participate and contribute your thoughts.</p>
                        <p class="p-style">3. Express your positive attitude towards providing the solution.</p>



                    </div>
                </div>

            </div>
            <!--end right coolum-->

        </div>
        <!--end row-->

    </div>
    <!--end container-->



    <?php 
include('include_root/footer.php');
?>