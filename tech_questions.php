<?php 


include('dashboard/db.php');

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
                    <h1 class="text-uppercase text-white font-weight-bold">Group Discussion</h1>
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5">In the history of modern astronomy, there is
                        probably no one greater leap forward than the building and launch of the space telescope.</p>

                </div>
            </div>
        </div>
    </header>



    <div class="container testsection">
        <div class="row">
            <div class="list-group-flush " style="width:100% !important;">
                <ul class=" list-group gdlist">
                    <?php 
$dir='tech';
$file =scandir($dir);
for ($i=2; $i <count($file) ; $i++) { 
	?>

                    <li class="list-group-item list-group-item-action"><i class="far fa-folder-open mx-2"></i><a
                            href="viewquestions.php?name=<?php  echo str_replace(".txt"," ", $file[$i]);?>"><?php echo str_replace(".txt"," ",str_replace("-"," ",ucfirst(($file[$i])))); ?></a>
                    </li>


                    <?php }?>
                </ul>
            </div>

        </div>
        <!--end row-->

    </div>
    <!--end container-->


    <?php
include('include_root/footer.php');
?>