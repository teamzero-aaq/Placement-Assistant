<?php session_start(); 
error_reporting(0);
$count1=0;
$count=0;
include("database/db.php"); 
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
                    <h1 class="text-uppercase text-white font-weight-bold">Practice Test</h1>
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


                

                    <?php
    if(isset($_GET['id'])){
      
    
error_reporting(0);
$c=$_GET['id'];
$sub=$_GET['cat'];
$sql="select * from practice_questions where type='technical' and dept_id='$c' and subtype='$sub'";
$run=mysqli_query($connection,$sql);
if(mysqli_num_rows($run)>0){


$inner=(array)($inner_arr[0]);
//print_r($inner_arr);
$char=array();
foreach( range('A', 'Z') as $elements) { 
      
    // Display all alphabetic elements 
    // one after another 
    array_push($char,$elements); 
}
 $count=0;
 while($row=mysqli_fetch_array($run)){
$count=$count+1;


 
 
  ?>
                    <div class="questions">
                        <div class="row">
                            <p><?php echo 'Q.'.$count.') '.(nl2br($row['question'])) ; ?></p>
                        </div>
						<?php for ($r=1;$r<=$row['no_of_option'];$r++){?>
                        <div class="row">

                            <label for="option<?php echo $r ;?>"><?php echo $char[$r-1].') '.$row['opt'.$r]; ?></label>
                        </div>
						<?php } ?>
                        
                        <p>
                            <button class="btn btn-outline-info btn-sm" type="button" data-toggle="collapse"
                                data-target="#collapseExample<?php echo $count; ?>" aria-expanded="false"
                                aria-controls="collapseExample">
                                View Solution
                            </button></p>
                        <div class="collapse" id="collapseExample<?php echo $count;?>">
                            <div class="card card-body">

                                <p class="ans">Answer: Option <?php echo $row['ans'] ;?></p>
                                <p class="ans">Explanation:</p>
                                <p>
                                    <?php echo $row['explaination']; ?>

                                </p>

                            </div>
                        </div>


                    </div>
                    <?php } ?>

	<?php }} ?>
                
            </div>






            <div class="col-md-4 sidebar">
            </div>



        </div>
    </div>




    <?php 
include('include_root/footer.php');
?>