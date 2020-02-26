<?php 
include('checking.php');
date_default_timezone_set('Asia/Kolkata');
//error_reporting(0);
$count1=0;
$count=0;
?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Placement Assistant | Test </title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>



  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.css" rel="stylesheet">
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#">Placement Assistant</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Aptitute</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Practice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active js-scroll-trigger" href="#">Online Test</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Interview</a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item dd js-scroll-trigger" href="#">HR Interview</a>
               <a class="dropdown-item dd js-scroll-trigger" href="#">Group Discussion</a>
             </div>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Company</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Contact</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>



  <!-- Masthead -->
  <header class="mastheader">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Online Test</h1>
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope.</p>
         
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
             <div class="questions" >
                                  <div class="row">
                    <p><?php echo nl2br($inner[$res[$x]]['question']) ; ?></p>
                  </div>
                  <div class="row">
                   <input type="radio"  id="<?php echo 'A'.$count; ?>" value="<?php echo 'A';?>" name="quizcheck[<?php echo $count; ?>]">
                    <label for="<?php echo 'A'.$count; ?>"><?php echo $inner[$res[$x]]['opta'] ?></label>
                  </div>
                  <div class="row">
                    <input type="radio" id="<?php echo 'B'.$count; ?>" value="<?php echo 'B';?>"  name="quizcheck[<?php echo $count; ?>]" >
                    <label for="<?php echo 'B'.$count; ?>"><?php echo $inner[$res[$x]]['optb'] ?></label>
                  </div>
                  <div class="row">
                    <input type="radio" id="<?php echo 'C'.$count; ?>" value="<?php echo 'C'; ?>"   name="quizcheck[<?php echo $count; ?>]" >
                    <label for="<?php echo 'C'.$count; ?>"><?php echo $inner[$res[$x]]['optc'] ?></label>
                  </div>
                  <div class="row">
                    <input type="radio" id="<?php echo 'D'.$count; ?>"value="<?php echo 'D'; ?>"   name="quizcheck[<?php echo $count; ?>]" >
                    <label for="<?php echo 'D'.$count; ?>"><?php echo $inner[$res[$x]]['optd'] ?></label>
                  </div>

               
              </div>
<?php } ?>
        <input type="hidden" name="on" value=" <?php echo $_POST['take_test']; ?>">
       <input type="submit"  id="btn" value="submit test" name="submit_test">
        </form>
      </div>


     
      
    

     <div class="col-md-4 sidebar">
     <div class="sidebar-item">
      <div class="make-me-sticky">
      <h3 class="">Timer</h3>
  
            <div id="MyClockDisplay">
              


            </div><!--end clock div-->
      
       </div>
    </div>

     
</div>
  </div>
  </div>



  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Placement Assistant</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


  <!-- Custom scripts for this template -->
  <script src="js/creative.js"></script>

</body>
<script> 
 
var total_seconds=20*60;
var c_min=parseInt(total_seconds/60);
var c_sec=parseInt(total_seconds%60);  
function checktime(){ 
  
 var time=c_min+':'+c_sec;
document.getElementById("MyClockDisplay").innerHTML = time;  
//document.getElementById("MyClockDisplay").innerContent =c_sec;  
if (total_seconds <= 0) {
setTimeout(document.getElementById('btn').click(),1);
}else{ 
{
        total_seconds=total_seconds-1;
    c_min=parseInt(total_seconds/60);
 c_sec=parseInt(total_seconds%60);
 setTimeout('checktime()',1000);}

 }
    
}
setTimeout('checktime()',1000);  
</script> 
<script type="text/javascript">
  
</script>
</html>