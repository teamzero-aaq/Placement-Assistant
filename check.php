<?php 
error_reporting(0);
if(isset($_POST['submit_test']))
{
    

    session_start();
    $_SESSION['submit']=true;
    $input=array();
    $input=$_POST['quizcheck'];
    $j=0;
 $count1=0;
 $wrong=0;
 $correct=0;
 $null=0;
 $st="not attempted";
echo '<br><br><br>';

    foreach ($_SESSION['row'] as $row) {
       $j=$j+1;  # code...
     $count=$count+1;
        
        //print_r ($input[$j]);
        echo'<br><br>';
        if(empty($input[$j]))
        {
          $wrong=$wrong+1;
          $null=$null+1;

          ?>
          <div>
            <h2><?php echo $row['question'];?></h2><br><br>
            <p><?php echo 'A)'.$row['OPTA'] ;?></p><br>
             <p><?php echo 'B)'.$row['OPTB'] ;?></p><br>
              <p><?php echo 'C)'.$row['OPTC'] ;?></p><br>
               <p><?php echo 'D)'.$row['OPTD'] ;?></p><br>
          </div>
          <div>
              <?php echo 'YOUR ANSWER:'.$st; ?><br>
              <?php echo 'RIGHT ANSWER:'.$row['ans']; ?><br>
               <?php echo 'EXPLAINATION:'.$row['EXP']; ?><br>
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
             <div>
            <h2><?php echo $row['question'];?></h2><br><br>
           <p><?php echo 'A)'.$row['OPTA'] ;?></p><br>
             <p><?php echo 'B)'.$row['OPTB'] ;?></p><br>
              <p><?php echo 'C)'.$row['OPTC'] ;?></p><br>
               <p><?php echo 'D)'.$row['OPTD'] ;?></p><br>

          </div>
          <div>
              <?php echo 'YOUR ANSWER:'.$input[$j]; ?><br>
              <?php echo 'RIGHT ANSWER:'.$row['ans']; ?><br>
              <?php echo 'EXPLAINATION:'.$row['EXP'];?><br>
              
          </div>   
          
   <?php   }?>
       
      <?php    
    }?>
    <form action="result.php" method="POST">
            <?php  $_SESSION['c']=$correct;
            $_SESSION['n']=$null;
            $_SESSION['w']=$wrong;?>
            <div>
              <input type="submit" name="view_result">
            </div>
          </form>

     <?php  
}?>



       



 