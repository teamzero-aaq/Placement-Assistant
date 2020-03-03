<?php session_start(); 
error_reporting(0);
$count1=0;
$count=0;
include("dashboard/db.php"); 
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



    <div class="container testsection">
        <div class="row">

            <div class="col-md-8 left-side">


                <form action="temp_check.php" method="POST">

                    <?php
    if(isset($_GET['course'])&&isset($_GET['subcourse'])){
      
    
error_reporting(0);
$c=$_GET['course'];
$sub=$_GET['subcourse'];
$link=$c.'/'.$sub;

$data = file_get_contents('./indiabix/Scrape_IndiaBix_QA-master/DB_Collections/'.$link.'.json');
$json = json_decode($data,true);
$inner_arr=(array)($json['test_questions']);

$inner=(array)($inner_arr[0]);
print_r($inner_arr);

 }
 for($x = 0; $x <count($inner) ;$x++)


 {
 
  ?>
                    <div class="questions">
                        <div class="row">
                            <p><?php echo 'Q) '.(nl2br($inner[$x]['question'])) ; ?></p>
                        </div>
                        <div class="row">

                            <label for="optionA"><?php echo 'A) '.$inner[$x]['opta']; ?></label>
                        </div>
                        <div class="row">

                            <label for="optionB"><?php echo 'B) '.$inner[$x]['optb']; ?></label>
                        </div>
                        <div class="row">

                            <label for="optionC"><?php echo 'C) '.$inner[$x]['optc']; ?></label>
                        </div>
                        <div class="row">

                            <label for="optionD"><?php echo 'D) '.$inner[$x]['optd']; ?></label>
                        </div>
                        <p>
                            <button class="btn btn-outline-info btn-sm" type="button" data-toggle="collapse"
                                data-target="#collapseExample<?php echo $x; ?>" aria-expanded="false"
                                aria-controls="collapseExample">
                                View Solution
                            </button></p>
                        <div class="collapse" id="collapseExample<?php echo $x ;?>">
                            <div class="card card-body">

                                <p class="ans">Answer: Option <?php echo $inner[$x]['ans'] ;?></p>
                                <p class="ans">Explanation:</p>
                                <p>
                                    <?php echo $inner[$x]['explanation']; ?>

                                </p>

                            </div>
                        </div>


                    </div>
                    <?php } ?>


                </form>
            </div>






            <div class="col-md-4 sidebar">
            </div>



        </div>
    </div>




    <?php 
include('include_root/footer.php');
?>