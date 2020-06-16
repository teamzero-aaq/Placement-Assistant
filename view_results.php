<?php 
include('dashboard/db.php');
session_start();
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
                    <h1 class="text-uppercase text-white font-weight-bold">View Results</h1>
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5"></p>

                </div>
            </div>
        </div>
    </header>



    <div class="container testsection">
	<h3>VIEW RESULTS HERE</h3><br>
	<p>STUDENT NAME: <?php echo $_SESSION['username'] ;?></p>
        <!--end row-->
        <?php 
    $name=$_SESSION['username'];
$q="select * from scorecard where user_name='$name'";
$q_run=mysqli_query($connection,$q);
if(mysqli_num_rows($q_run)==0)
{
  echo 'you have not given any tests yet';
}
else
{
echo '<table class="table">';
 echo '<tr>
    <th>Test ID</th> 
	<th>Test name</th>
	<th>Your Score</th>
    <th>Out of</th>
	<th>Max score</th>
	<th>Min score</th>
	
  </tr>';
  while($rows=mysqli_fetch_array($q_run)){
	  $curr_id=$rows['testid'];
	  $maxq="select max(score) from scorecard where testid='$curr_id'";
	  $qmax=mysqli_query($connection,$maxq);
	  $max=mysqli_fetch_array($qmax);
	 
	   $minq="select min(score) from scorecard where testid='$curr_id'";
	  $qmin=mysqli_query($connection,$minq);
	  $min=mysqli_fetch_array($qmin);
	  $curr=trim($curr_id);
	  $q="select * from tests_data where test_id='$curr'";
	  $qrun=mysqli_query($connection,$q);
	  $test=mysqli_fetch_array($qrun);
   ?>
   <?php 
   if($rows['score']<=$min[0]){?>
        <tr class="table-danger">
            <td><?php echo $rows['testid'] ;?></td>
			<td><?php echo $test['test_name'] ;?></td>
            <td><?php echo $rows['score'] ;?></td>
			<td><?php echo $test['no_of_ques'] ;?></td>
			<td><?php echo $max[0] ;?></td>
			<td><?php echo $min[0] ;?></td>
			

        </tr>
   <?php } else if($rows['score']<=$max[0] && $rows['score']>$min[0] ){?>
    <tr class="table-info">
             <td><?php echo $rows['testid'] ;?></td>
			<td><?php echo $test['test_name'] ;?></td>
            <td><?php echo $rows['score'] ;?></td>
			<td><?php echo $test['no_of_ques'] ;?></td>
			<td><?php echo $max[0] ;?></td>
			<td><?php echo $min[0] ;?></td>
			

   </tr><?php } ?>
        <?php }?>
        <?php
  echo '</table>';
}
     ?>

    </div>
    <!--end container-->


    <?php 
include('include_root/footer.php');
?>