<?php 
session_start();
ob_start();
include('db.php');
function valid_email($str) {
return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@(somaiya\.)+(edu)$/ix", $str)) ? FALSE : TRUE;
}
if (isset($_POST['submit_personal'])){
    //print_r($_POST);
$primary_key=$_SESSION['username'];
    $erro4="";

    if (!($_POST['email'] && valid_email($_POST["email"]))) {

        //echo "die".
        $erro4 .= "Enter a valid somaiya Email ID!<br>";

    }
    else
    
  


{
    
//    $query="INSERT INTO 'personal' ('Fname','Lname','Rno','dept','Email','contact') VALUES ('".mysqli_real_escape_string($connection,$_POST['firstName'])."','".mysqli_real_escape_string($connection,$_POST['lastName'])."','".mysqli_real_escape_string($connection,$_POST['rno'])."','".mysqli_real_escape_string($connection,$_POST['dept'])."','".mysqli_real_escape_string($connection,$_POST['email'])."','".mysqli_real_escape_string($connection,$_POST['phn'])."')";
    
    
   // $query="INSERT INTO 'personal' ('Fname','Lname','Rno','dept','Email','contact') VALUES ('".$_POST['firstName']."','".$_POST['lastName']."','".$_POST['rno']."','".$_POST['dept']."','".$_POST['email']."','".$_POST['phn']."')";

     //$query="INSERT INTO `personal` (`Fname`,`Lname`,`Rno`,`dept`,`Email`,`contact`) VALUES (`vatsal`,`pathak`,33,`Computer`,`vatsal.gamil`,9993)";
    
    //$query="INSERT INTO `personal` (`Fname`,`Lname`,`Rno`,`dept`,`Email`,`contact`) VALUES ('".$_POST['firstName']."','".$_POST['lastName']."','".$_POST['rno']."','".$_POST['dept']."','".$_POST['email']."','".$_POST['phn']."')";
    
    $query="DELETE FROM `personal` WHERE Email='$primary_key'";
    if(!mysqli_query($connection,$query))
    {
        echo "cant delete";
    }
    
    $query="INSERT INTO `personal` (`Fname`,`Lname`,`Rno`,`dept`,`Email`,`contact`) VALUES ('".mysqli_real_escape_string($connection,$_POST['firstName'])."','".mysqli_real_escape_string($connection,$_POST['lastName'])."','".mysqli_real_escape_string($connection,$_POST['rno'])."','".mysqli_real_escape_string($connection,$_POST['dept'])."','".mysqli_real_escape_string($connection,$_POST['email'])."','".mysqli_real_escape_string($connection,$_POST['phn'])."')";

    if(mysqli_query($connection,$query))
    {
        echo "Submitted";
    }
    else
    {
        echo "cant change";
    }
    

    
    


    }
    
    echo 'next line redirect';
header('Location: index.php');
    }

//ALTER TABLE technical_skills
//ADD CONSTRAINT PK_Person PRIMARY KEY (Email,skillinfo);

if (isset($_POST['submit_skills']))
{
	$primary_key=$_SESSION['username'];
   
    if($connection)

    {
		    $query="DELETE FROM `certified courses` WHERE Email='$primary_key'";
            if(!mysqli_query($connection,$query))
            {
                echo "cant delete";
            }
        
		    $query="DELETE FROM `technical_skills` WHERE Email='$primary_key'";
            if(!mysqli_query($connection,$query))
            {
                echo "cant delete";
            }
		####first check if there is data is present in both tables below for the email id if yes delete all entries . if no means its first time user is filling the form
       
		foreach ($_FILES["coursect"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $tmp_name = $_FILES["coursect"]["tmp_name"][$key];
                
                // basename() may prevent filesystem traversal attacks;
                // further validation/sanitation of the filename may be appropriate
                $name = basename($_FILES["coursect"]["name"][$key]);
                $mypath='users/'.$primary_key.'/course_certificate/';
                if (file_exists($mypath) && is_dir($mypath)) 
                { 
                    //echo "The  folder exists. </br>"; 
                } 
                else 
                { 
                   // echo "The folder does not exists. New Folder created.</br>"; 
                    mkdir($mypath, 0777, true);
                } 
                $mypath.="$name";
                if(move_uploaded_file($tmp_name, $mypath))
                {
                    //echo "success";

                    $query="INSERT INTO `certified courses`(`Email`, `coursettl`, `coursedsc`, `coursect`) VALUES ('".mysqli_real_escape_string($connection,$primary_key)."','".mysqli_real_escape_string($connection,$_POST['coursettl'][$key])."','".mysqli_real_escape_string($connection,$_POST['coursedsc'][$key])."','".mysqli_real_escape_string($connection,$mypath)."')";
                    
                    
                    
                     

                    if(mysqli_query($connection,$query))
                    {
                        echo "Submitted";
                    }
                    else
                    {
                        echo "cant change";
                    }

                
                
                }
            }
        }
        foreach ($_POST["skillinfo"] as $key => $value) {
            if($_POST['skilllvl'][$key]>10)
            {
                $_POST['skilllvl'][$key]=10;
            }
            if($_POST['skilllvl'][$key]<10)
            {
                $_POST['skilllvl'][$key]=1;
            }            
            $query="INSERT INTO `technical_skills`(`Email`, `skillinfo`, `skilllvl`, `skilltype`) VALUES ('".mysqli_real_escape_string($connection,$primary_key)."','".mysqli_real_escape_string($connection,$_POST['skillinfo'][$key])."','".mysqli_real_escape_string($connection,$_POST['skilllvl'][$key])."','".mysqli_real_escape_string($connection,$_POST['skilltype'][$key])."')";
                    
                   
                    
                     

                    if(mysqli_query($connection,$query))
                    {
                        echo "Submitted";
                    }
                    else
                    {
                        echo "cant change";
                    }
            
            
            
        }
        
        
    }
    else
    {
      die("connection failed because ".mysqli_connect_error() );
    }
    header("LOCATION:0222.php");
}
    
	
	if (isset($_POST['submit_industry']))
{
	$primary_key=$_SESSION['username'];
   
    if($connection)

    {
		    $query="DELETE FROM `internships` WHERE Email='$primary_key'";
            if(!mysqli_query($connection,$query))
            {
                echo "cant delete";
            }
        
		    $query="DELETE FROM `industrial knowledge` WHERE Email='$primary_key'";
            if(!mysqli_query($connection,$query))
            {
                echo "cant delete";
            }
        foreach ($_FILES["ict"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $tmp_name = $_FILES["ict"]["tmp_name"][$key];
                
                // basename() may prevent filesystem traversal attacks;
                // further validation/sanitation of the filename may be appropriate
                $name = basename($_FILES["ict"]["name"][$key]);
                $mypath='users/'.$primary_key.'/internship_certificate/';
                if (file_exists($mypath) && is_dir($mypath)) 
                { 
                    //echo "The  folder exists. </br>"; 
                } 
                else 
                { 
                   // echo "The folder does not exists. New Folder created.</br>"; 
                    mkdir($mypath, 0777, true);
                } 
                $mypath.="$name";
                if(move_uploaded_file($tmp_name, $mypath))
                {
                    //echo "success";
                    echo $key."=".$_POST['itp'][$key];
                    $query="INSERT INTO `internships`(`Email`, `itp`, `ittl`, `idsc`, `ict`) VALUES ('".mysqli_real_escape_string($connection,$primary_key)."','".mysqli_real_escape_string($connection,$_POST['itp'][$key])."','".mysqli_real_escape_string($connection,$_POST['ittl'][$key])."','".mysqli_real_escape_string($connection,$_POST['idsc'][$key])."','".mysqli_real_escape_string($connection,$mypath)."')";
                    
                    
                     

                    if(mysqli_query($connection,$query))
                    {
                        //echo "Submitted";
                    }
                    else
                    {
                        echo "cant change";
                    }

                
                
                }
            }
        }
        foreach ($_POST["ik"] as $key => $value) {
            $query="INSERT INTO `industrial knowledge`(`Email`, `ik`) VALUES('".mysqli_real_escape_string($connection,$primary_key)."','".mysqli_real_escape_string($connection,$_POST['ik'][$key])."')";
                    
              
                    
                     

                    if(mysqli_query($connection,$query))
                    {
                        //echo "Submitted";
                    }
                    else
                    {
                        echo "cant change";
                    }
            
            
            
        }
        
        
    }
    else
    {
      die("connection failed because ".mysqli_connect_error() );
    }
    header("LOCATION:033.php");
}
        
if (isset($_POST['submit_others']))
{
	$primary_key=$_SESSION['username'];
  
    if($connection)

    {
        $query="DELETE FROM `Projects` WHERE Email='$primary_key'";
            if(!mysqli_query($connection,$query))
            {
                echo "cant delete";
            }
        
		    $query="DELETE FROM `other profiles` WHERE Email='$primary_key'";
            if(!mysqli_query($connection,$query))
            {
                echo "cant delete";
            }
        foreach ($_POST["prlnk"] as $key => $value) {
              
            $query="INSERT INTO `Projects`(`Email`, `prttl`, `prdsc`, `prlnk`) VALUES ('".mysqli_real_escape_string($connection,$primary_key)."','".mysqli_real_escape_string($connection,$_POST['prttl'][$key])."','".mysqli_real_escape_string($connection,$_POST['prdsc'][$key])."','".mysqli_real_escape_string($connection,$_POST['prlnk'][$key])."')";
                    
                   
                    
                     

                    if(mysqli_query($connection,$query))
                    {
                        echo "Submitted";
                    }
                    else
                    {
                        echo "cant change";
                    }
            
            
            
        }
        foreach ($_POST["proflnk"] as $key => $value) {
            
            $query="INSERT INTO `other profiles`(`Email`, `proflnk`) VALUES ('".mysqli_real_escape_string($connection,$primary_key)."','".mysqli_real_escape_string($connection,$_POST['proflnk'][$key])."')";
                    
                   
                    
                     

                    if(mysqli_query($connection,$query))
                    {
                        echo "Submitted";
                    }
                    else
                    {
                        echo "cant change";
                    }
            
            
            
        }
        
        
    }
    else
    {
      die("connection failed because ".mysqli_connect_error() );
    }
    header("LOCATION:044.php");
}


?>