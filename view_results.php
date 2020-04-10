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
echo '<table>';
 echo '<tr>
    <th>SUBJECT</th> 
    <th>SCORE</th>
  </tr>';
  while($rows=mysqli_fetch_array($q_run)){
   ?>
        <tr>
            <td><?php echo $rows['Lang_name'] ;?></td>
            <td><?php echo $rows['score'] ;?></td>

        </tr>
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