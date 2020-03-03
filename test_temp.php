<?php 
include('checking.php');
date_default_timezone_set('Asia/Kolkata');
//error_reporting(0);
$count1=0;
$count=0;

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



    <div class="container testsection">
        <div class="row">

            <div class="col-md-8 left-side">


                <form action="temp_check.php" method="POST" class="customRadio">

                    <?php
    if(isset($_POST['take_test'])){
   
      $data = file_get_contents('./indiabix/Scrape_IndiaBix_QA-master/DB_Collections/temp_jsonfiles/'.$_POST['take_test'].'.json');
      $json = json_decode($data,true);
//echo $_POST['take_test'];
$inner_arr=(array)($json['test_questions']);

$inner=(array)($inner_arr[0]);
$_SESSION['start_time']=date('Y-m-d H:i:s', time());

$_SESSION['row'] = array(); 
$random=range(0,count($inner));
$res=array_rand($random,20);
//print_r($inner);
//print_r($res);
}
 for($x = 0; $x <count($res) ;$x++)

 {
 	$_SESSION['row'][] = $inner[$res[$x]];
  $count=$count+1;
  ?>
                    <div class="questions">
                        <div class="row">
                            <p><?php echo nl2br($inner[$res[$x]]['question']) ; ?></p>
                        </div>
                        <div class="row">
                            <input type="radio" id="<?php echo 'A'.$count; ?>" value="<?php echo 'A';?>"
                                name="quizcheck[<?php echo $count; ?>]">
                            <label for="<?php echo 'A'.$count; ?>"><?php echo $inner[$res[$x]]['opta'] ?></label>
                        </div>
                        <div class="row">
                            <input type="radio" id="<?php echo 'B'.$count; ?>" value="<?php echo 'B';?>"
                                name="quizcheck[<?php echo $count; ?>]">
                            <label for="<?php echo 'B'.$count; ?>"><?php echo $inner[$res[$x]]['optb'] ?></label>
                        </div>
                        <div class="row">
                            <input type="radio" id="<?php echo 'C'.$count; ?>" value="<?php echo 'C'; ?>"
                                name="quizcheck[<?php echo $count; ?>]">
                            <label for="<?php echo 'C'.$count; ?>"><?php echo $inner[$res[$x]]['optc'] ?></label>
                        </div>
                        <div class="row">
                            <input type="radio" id="<?php echo 'D'.$count; ?>" value="<?php echo 'D'; ?>"
                                name="quizcheck[<?php echo $count; ?>]">
                            <label for="<?php echo 'D'.$count; ?>"><?php echo $inner[$res[$x]]['optd'] ?></label>
                        </div>


                    </div>
                    <?php } ?>
                    <input type="hidden" name="on" value=" <?php echo $_POST['take_test']; ?>">
                    <input type="submit" class="btn btn-info btn align-item-center" id="btn" value="submit test"
                        name="submit_test">
                </form>
            </div>






            <div class="col-md-4 sidebar">
                <div class="sidebar-item">
                    <div class="make-me-sticky">
                        <h3 class="">Remaining Time</h3>

                        <div id="MyClockDisplay">



                        </div>
                        <!--end clock div-->

                    </div>
                </div>


            </div>
        </div>
    </div>


    <?php
include('include_root/footer.php');
?>