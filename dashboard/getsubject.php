<?php 
 include('security.php');
 $output=''; 
 $query = "SELECT * FROM subject where dept_id ='".$_POST["dept"]."' ORDER BY subject";
echo $query;
 $query_run = mysqli_query($connection,$query);
  $output .='<option value="" disabled selected>Choose Subject</option>';
 	while($row = mysqli_fetch_assoc($query_run))
    	{
    		
   			 $output .='<option value=" '.$row["sub_id"].'">'.$row["subject"].'</option>';
   			 
    	}
    	echo $output;


     ?>
<script type="text/javascript">
	
alert("Hello inside getsubject");

</script>

  <?php 

 include('includes/script.php');

 ?>