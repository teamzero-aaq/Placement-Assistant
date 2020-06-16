<?php 
include('checking.php');
include("database/db.php"); 
date_default_timezone_set('Asia/Kolkata');

$count1=0;
$count=0;

include('include_root/header.php');


//if (!$_SESSION['username']) {
//  header("Location: ./login.php");
//}
?>

<script>

</script>

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



    <div class="container testsection">
        <div class="row">

            <div class="col-md-8 left-side">


                <form action="temp_check.php" method="POST" class="customRadio">

                    <?php
    if(isset($_POST['take_test'])){
  //echo $_POST['take_test']; 
  $testid=trim($_POST['take_test']);
  $r="select * from tests_data where test_id='$testid'";
  $run=mysqli_query($connection,$r);
  $rt=mysqli_fetch_array($run);
  $limit=(int)$rt['no_of_ques'];
  $time_limit=(int)$rt['time_limit'];
$q="SELECT * FROM test_questions where test_id='$testid' ORDER BY RAND() LIMIT ".$limit;
$qr=mysqli_query($connection,$q);
  
$_SESSION['start_time']=date('Y-m-d H:i:s', time());

$_SESSION['row'] = array(); 
$char=array();
//print_r($inner);
//print_r($res);
foreach( range('A', 'Z') as $elements) { 
      
    // Display all alphabetic elements 
    // one after another 
    array_push($char,$elements); 
}
 $count=0;
}

 while($rowr=mysqli_fetch_array($qr))

 {
 	$_SESSION['row'][] = $rowr;
  $count=$count+1;
  ?>
                    <div class="questions">
                        <div class="row">
                            <p><?php echo nl2br($rowr['question']) ; ?></p>
                        </div>
						<?php for ($r=1;$r<=$rowr['num_of_option'];$r++){?>
						<div class="row">
                            <input type="radio" id="<?php echo $char[$r-1].$count; ?>" value="<?php echo $char[$r-1];?>"
                                name="quizcheck[<?php echo $count; ?>]">
                            <label for="<?php echo $char[$r-1].$count; ?>"><?php echo  $rowr['opt'.$r];?></label>
                        </div>
                        
						<?php } ?>
                        
                      


                    </div>
                    <?php } ?>
                    <input type="hidden" name="testid" value=" <?php echo $_POST['take_test']; ?>">
                    <input type="submit" class="btn btn-info btn align-item-center" id="btn" value="Submit Test"
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
<script>
var total_seconds = <?php echo $time_limit ; ?> * 60;
var c_min = parseInt(total_seconds / 60);
var c_sec = parseInt(total_seconds % 60);

function checktime() {

    var time = c_min + ':' + c_sec;
    document.getElementById("MyClockDisplay").innerHTML = time;
    //document.getElementById("MyClockDisplay").innerContent =c_sec;  
    if (total_seconds <= 0) {
        setTimeout(document.getElementById('btn').click(), 1);
    } else {
        {
            total_seconds = total_seconds - 1;
            c_min = parseInt(total_seconds / 60);
            c_sec = parseInt(total_seconds % 60);
            setTimeout('checktime()', 1000);
        }

    }

}
setTimeout('checktime()', 1000);

</script>

    <?php
include('include_root/footer.php');
?>