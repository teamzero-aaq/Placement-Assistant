<?php 
include('checking.php');
date_default_timezone_set('Asia/Kolkata');
//session_start(); 
//error_reporting(0);
$count1=0;
$count=0;
include('dashboard/db.php');
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
                        probably no
                        one greater leap forward than the building and launch of the space telescope.</p>

                </div>
            </div>
        </div>
    </header>



    <div class="container testsection">
        <div class="row">

            <div class="col-md-8 left-side">


                <?php 
error_reporting(0);
if(isset($_POST['submit_test']))
{
    

    
    $_SESSION['submit']=true;
    $input=array();
    //print_r($_SESSION['row']);
    
    $input=$_POST['quizcheck'];
    //var_dump($input);
    $j=0;
 $count1=0;
 $wrong=0;
 $correct=0;
 $null=0;
 $st="not attempted";


    foreach ($_SESSION['row'] as $row) {
       $j=$j+1;  # code...
     $count=$count+1;
        
        //print_r ($input[$j]);
        
        if(empty($input[$j]))
        {
          $wrong=$wrong+1;
          $null=$null+1;

          ?>
                <div class="questions">
                    <div class="row">
                        <p><?php echo 'Q) '.nl2br($row['question']) ; ?></p>
                    </div>
                    <div class="row">

                        <label for="optionA"><?php echo 'A) '.$row['opta']; ?></label>
                    </div>
                    <div class="row">

                        <label for="optionB"><?php echo 'B) '.$row['optb']; ?></label>
                    </div>
                    <div class="row">

                        <label for="optionC"><?php echo 'C) '.$row['optc']; ?></label>
                    </div>
                    <div class="row">

                        <label for="optionD"><?php echo 'D) '.$row['optd']; ?></label>
                    </div>
                    <p>
                        <button class="btn btn-outline-info btn-sm" type="button" data-toggle="collapse"
                            data-target="#collapseExample<?php echo $j; ?>" aria-expanded="false"
                            aria-controls="collapseExample">
                            View Solution
                        </button></p>
                    <div class="collapse" id="collapseExample<?php echo $j ;?>">
                        <div class="card card-body">
                            <p><?php echo 'YOUR ANSWER:'.$st; ?></p>
                            <p class="ans">Answer: Option <?php echo $row['ans'] ;?></p>
                            <p class="ans">Explanation:</p>
                            <p>
                                <?php echo $row['explanation']; ?>

                            </p>

                        </div>
                    </div>


                </div>

                <?php  
        }

        else
         { 
          if(!strcmp($input[$j],$row['ans']))
{
  $correct=$correct+1;
}
else
{
  $wrong=$wrong+1;
}

        ?>
                <div class="questions">
                    <div class="row">
                        <p><?php echo 'Q) '.nl2br($row['question']) ; ?></p>
                    </div>
                    <div class="row">

                        <label for="optionA"><?php echo 'A) '.$row['opta']; ?></label>
                    </div>
                    <div class="row">

                        <label for="optionB"><?php echo 'B) '.$row['optb']; ?></label>
                    </div>
                    <div class="row">

                        <label for="optionC"><?php echo 'C) '.$row['optc']; ?></label>
                    </div>
                    <div class="row">

                        <label for="optionD"><?php echo 'D) '.$row['optd']; ?></label>
                    </div>
                    <p>
                        <button class="btn btn-outline-info btn-sm" type="button" data-toggle="collapse"
                            data-target="#collapseExample<?php echo $j; ?>" aria-expanded="false"
                            aria-controls="collapseExample">
                            View Solution
                        </button></p>
                    <div class="collapse" id="collapseExample<?php echo $j ;?>">
                        <div class="card card-body">
                            <p><?php echo 'YOUR ANSWER:'.$input[$j]; ?></p>
                            <p class="ans">Answer: Option <?php echo $row['ans'] ;?></p>
                            <p class="ans">Explanation:</p>
                            <p>
                                <?php echo $row['explanation']; ?>

                            </p>

                        </div>
                    </div>


                </div>


                <?php   }?>

                <?php    
    }?>


                <?php  
}?>


            </div>






            <div class="col-md-4 sidebar">

                <h2>YOUR RESULT IS></h2>


                <table style="width:100%">
                    <tr>
                        <th>CORRECT</th>
                        <th>WRONG</th>
                        <th>NOT ATTEMPTED</th>
                    </tr>
                    <tr>
                        <td><?php echo $correct;?></td>
                        <td><?php echo $wrong;?></td>
                        <td><?php echo $null;?></td>
                    </tr>

                </table>


                <?php 
$uname=$_SESSION['username'];
$on=$_POST['on'];
$s_time=$_SESSION['start_time'];
$e_time=date('Y-m-d H:i:s', time());
$q="insert into scorecard (user_name,Lang_name,score,start_time,end_time) values('$uname','$on','$correct','$s_time','$e_time')" ;
$q_run=mysqli_query($connection,$q);
?>
                <br><br><br>
                <a href="index.php">GO BACK</a>




            </div>



        </div>
    </div>


    <?php
include('include_root/footer.php');
?>