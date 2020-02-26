<?php 
include('security.php');

 
 
 
 $output="";
$departid = $_POST['sort'];
$search=$_POST['search'];
if($departid!='' && $search!='') {
  $q = 'select * from scorecard where Lang_name like "%'.$search.'%" order by score '.$departid;

$qout=mysqli_query($connection,$q);
$output.='
<table class="table align-items-center table-flush display" id="table_id">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">DOB</th>
                    <th scope="col">GRADE</th>
                     <th scope="col">ENDTIME</th>
                    <th scope="col">STARTTIME</th>
                    
                  </tr>
                </thead>
                <tbody>';
                 
                  
                    if (mysqli_num_rows($qout) > 0) {
                                          
                    while($row = mysqli_fetch_array($qout)) 
                     {
                     

                  $output.='<tr>
                    
                    <td>
                      '.$row['user_name'].'
                    </td>
                      <td>
                        '.$row['Lang_name'].' 

                        

                        
                    </td>
                    <td>
                        '.$row['score'].' 

                        

                        
                    </td>
                    <td>
                    '.$row['end_time'].'

                        

                        
                    </td>
                   <td>
                    '.$row['start_time'].'

                        

                        
                    </td>
                  </tr>';

                    
                       
                     }

                    }
                    else
                    {
                      $output.='echo <h4 class="bg-success"> No Record Found</h4>' ;
                    }

                   

                $output.='</tbody>
              </table>';
          }
          elseif ($departid!='' && $search=='') {
            $q = 'select * from scorecard order by score '.$departid;

$qout=mysqli_query($connection,$q);
$output.='
<table class="table align-items-center table-flush display" id="table_id">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">DOB</th>
                    <th scope="col">GRADE</th>
                                     <th scope="col">ENDTIME</th>
                    <th scope="col">STARTTIME</th>
                    
                    
                  </tr>
                </thead>
                <tbody>';
                 
                  
                    if (mysqli_num_rows($qout) > 0) {
                                          
                    while($row = mysqli_fetch_array($qout)) 
                     {
                     

                  $output.='<tr>
                    
                    <td>
                      '.$row['user_name'].'
                    </td>
                      <td>
                        '.$row['Lang_name'].' 

                        

                        
                    </td>
                    <td>
                        '.$row['score'].' 

                        

                        
                    </td>
                    <td>
                    '.$row['end_time'].'

                        

                        
                    </td>
                   <td>
                    '.$row['start_time'].'

                        

                        
                    </td>
                  </tr>';

                    
                       
                     }

                    }
                    else
                    {
                      $output.='echo <h4 class="bg-success"> No Record Found</h4>' ;
                    }

                   

                $output.='</tbody>
              </table>';
  
          }
else
{
  $q="SELECT * FROM scorecard";
$qout=mysqli_query($connection,$q);
$output.='
<table class="table align-items-center table-flush display" id="table_id">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col"></th>
                    <th scope="col">GRADE</th>
                         <th scope="col">ENDTIME</th>
                    <th scope="col">STARTTIME</th>
                    
                  
                  </tr>
                </thead>
                <tbody>';
                 
                  
                    if (mysqli_num_rows($qout) > 0) {
                                          
                    while($row = mysqli_fetch_array($qout)) 
                     {
                     

                  $output.='<tr>
                    
                    <td>
                      '.$row['user_name'].'
                    </td>
                      <td>
                        '.$row['Lang_name'].' 

                        

                        
                    </td>
                    <td>
                       '.$row['score'].'

                        

                        
                    </td>
                    <td>
                        '.$row['end_time'].'

                        

                        
                    </td>
                    <td>
                        '.$row['start_time'].'

                        

                        
                    </td>
                    
                    
                  </tr>';

                    
                       
                     }

                    }
                    else
                    {
                      $output.='echo <h4 class="bg-success"> No Record Found</h4>' ;
                    }

                   

                $output.='</tbody>
              </table>';

}

echo $output;

 ?>