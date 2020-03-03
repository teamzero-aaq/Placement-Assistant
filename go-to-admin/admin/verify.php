<?php  
include('security.php');
//include('db.php');
#session_start();

 #require 'db.php';

#Create ,user,company

if(isset($_POST['register']))
{
	$name =$_POST['name'];
	$username =$_POST['username'];
	$email =$_POST['mailid'];
	$contact =$_POST['contact'];
	$password =$_POST['passadmin'];
	$cpass =$_POST['confirmpass'];
	$type = 1;

	if ($password === $cpass) {
		
	$query = "INSERT INTO `register`(`name`, `contact`, `username`, `password`, `email`, `usertype`) VALUES ('$name','$contact','$username','$password','$email',$type)";
	$query_run = mysqli_query($connection, $query);
		

	  if($query_run)
	  {
	  	
	  	$_SESSION['success'] = "Admin Added Successfully";
	  	header('Location: index.php');  
	  }
	  else
	  {

	  	$_SESSION['status'] = "Admin Profile Not Added";
	  	header('Location: index.php');  
	  }
	}
	else
	{
		$_SESSION['status'] = " Password and Confirm Password Does not Match";
	  	header('Location: index.php');  
	}
}
#create admin,user,company End

if(isset($_POST['login_admin']))
{
	$username =$_POST['username'];
$pass=$_POST['password'];


		$query = "SELECT * FROM register WHERE username = '$username' AND password = '$pass' ";
	
	$query_run = mysqli_query($connection, $query);
	$usertype = mysqli_fetch_array($query_run);

	  if($usertype['usertype']==1)
	  {
	      $_SESSION['usertype']=1;
	  	$_SESSION['username'] = $username ;
	  	header('Location: dashboard.php');  
	  }

	  else
	  {
	  	$_SESSION['status'] = "Username and Password Does not Match";
	  	header('Location: index.php');  
	  }
	
	
}
#create admin,user,company End

if(isset($_POST['submit_file']))
{
	if(!empty($_FILES['file']))
	{
		
                    //Store file in directory "upload" with the name of "uploaded_file.txt"
		    $dept=$_POST['department'];
		    
//		    $q='select * from department where dept_id='.$dept;
//		    $q_run1=mysqli_query($connection,$q);
//		    $row=mysqli_fetch_array($q_run1);
		    $name= $_FILES['file']['name'];
		    $dep=str_replace(".csv","",$name);
		    //echo($dep);
		    $query="insert into subject (dept_id,department) values ('$dept','$dep')";
		    $qrun=mysqli_query($connection,$query);
            $storagename = $_FILES["file"]["name"];
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $storagename);
            $file = fopen("upload/".$_FILES['file']['name'],"r");
            $count=0;
            $start=false;
while(! feof($file))
  {
  	
  $arr=(fgetcsv($file));
  //print_r ($arr);
  if($start&&(!is_null($arr[0])||!is_null($arr[1])||!is_null($arr[3]))){
  $q=$arr[0];
  $a=$arr[1];
  $b=$arr[2];
  $c=$arr[3];
  $d=$arr[4];
  $ans=$arr[5];
  $exp=$arr[6];
  $posts[] = array('question'=> $q, 'opta'=> $a,'optb'=>$b,'optc'=>$c,'optd'=>$d,'ans'=>$ans,'explanation'=>$exp);
  	

  }
  if($arr[0]=='question'&&$arr[1]=='opta'&&$arr[2]=='optb'&&$arr[3]=='optc'&&$arr[4]=='optd'&&$arr[5]=='ans'&&$arr[6]=='exp')
  {
  	$start=true;
  	

  }
  
 
}
$res=array();
$res_im=array();
$res_im=$posts;
$res['test_questions'][0]=$res_im;

fclose($file);
$file_pointer = "../indiabix/Scrape_IndiaBix_QA-master/DB_Collections/temp_jsonfiles/".$_FILES['file']['name'];
unlink($file_pointer); 
$fp = fopen('../../indiabix/Scrape_IndiaBix_QA-master/DB_Collections/temp_jsonfiles/'.$dep.'.json', 'w');
fwrite($fp, json_encode($res));
fclose($fp);
              

	}
	else{
		$_SESSION['success'] = "PLEASE SELECT THE FILE.NO FILE CHOOSEN";
	}
	if($start)
	{
		  	$_SESSION['success'] = "Students Added Successfully";
	}
	else
	{
				  	$_SESSION['success'] = "SORRY CSV FILE SHOULD BE PROPER(name,dob,grade,gender)";

	}


	
header('Location: addtest.php');

}


if(isset($_POST['submit_file_prac']))
{
	if(!empty($_FILES['file_prac']))
	{
		
                    //Store file in directory "upload" with the name of "uploaded_file.txt"
		    $dept=$_POST['department'];
		    $newsub_id=$_POST['sub'];
		    
		    if($newsub_id=="-1")
		    {
		        $newsub=$_POST['new_sub'];
		        mkdir("../indiabix/Scrape_IndiaBix_QA-master/DB_Collections/".$newsub, 0755);
		        $sql_q="insert into subject (dept_id,department) values('$dept','$newsub')";
		        $slq_qq=mysqli_query($connection,$sql_q);
		        
		        
		    }
		    else
		    {
		        $s="select department from subject where sub_id=".$newsub_id;
		        $s_run=mysqli_query($connection,$s);
		        $row=mysqli_fetch_array($s_run);
		       
		        $newsub=$row['department'];
		    }
		    
//		    $q='select * from department where dept_id='.$dept;
//		    $q_run1=mysqli_query($connection,$q);
//		    $row=mysqli_fetch_array($q_run1);
		    $name= $_FILES['file_prac']['name'];
		    $dep=str_replace(".csv","",$name);
		    //echo($dep);
		    $query="insert into sub_courses (name1,name2) values ('$newsub','$dep')";
		    $qrun=mysqli_query($connection,$query);
            $storagename = $_FILES["file_prac"]["name"];
            move_uploaded_file($_FILES["file_prac"]["tmp_name"], "upload/" . $storagename);
            $file = fopen("upload/".$_FILES['file_prac']['name'],"r");
            $count=0;
            $start=false;
while(! feof($file))
  {
  	
  $arr=(fgetcsv($file));
  //print_r ($arr);
  if($start&&(!is_null($arr[0])||!is_null($arr[1])||!is_null($arr[3]))){
  $q=$arr[0];
  $a=$arr[1];
  $b=$arr[2];
  $c=$arr[3];
  $d=$arr[4];
  $ans=$arr[5];
  $exp=$arr[6];
  $posts[] = array('question'=> $q, 'opta'=> $a,'optb'=>$b,'optc'=>$c,'optd'=>$d,'ans'=>$ans,'explanation'=>$exp);
  	

  }
  if($arr[0]=='question'&&$arr[1]=='opta'&&$arr[2]=='optb'&&$arr[3]=='optc'&&$arr[4]=='optd'&&$arr[5]=='ans'&&$arr[6]=='exp')
  {
  	$start=true;
  	

  }
  
 
}
$res=array();
$res_im=array();
$res_im=$posts;

$res['test_questions'][0]=$res_im;

fclose($file);
$file_pointer = "../indiabix/Scrape_IndiaBix_QA-master/DB_Collections/temp_jsonfiles/".$_FILES['file_prac']['name'];
unlink($file_pointer); 
$fp = fopen('../../indiabix/Scrape_IndiaBix_QA-master/DB_Collections/'.$newsub.'/'.$dep.'.json', 'w');
fwrite($fp, json_encode($res));
fclose($fp);
              

	}
	else{
		$_SESSION['success'] = "PLEASE SELECT THE FILE.NO FILE CHOOSEN";
	}
	if($start)
	{
		  	$_SESSION['success'] = "Students Added Successfully";
	}
	else
	{
				  	$_SESSION['success'] = "SORRY CSV FILE SHOULD BE PROPER(name,dob,grade,gender)";

	}


	
header('Location: addpractice.php');

}






#update ,user,company

if (isset($_POST['updateregister'])) {
    
	$name =$_POST['upname'];
	$username =$_POST['upusername'];
	$email =$_POST['upmailid'];
	$contact =$_POST['upcontact'];
	$password =$_POST['uppassadmin'];
	$type = $_POST['type'];
    //echo $name;
    //echo $type;
	$query = "UPDATE `register` SET `name`='$name',`contact` ='$contact',`username`='$username',`password` ='$password',`email` ='$email',`usertype` = $type WHERE `username` = '$username' ";
	$query_run = mysqli_query($connection,$query);

	if ($query_run) {
		$_SESSION['success'] =   "Successfully Update User";
		header('Location: register_update.php'); 
	}
	else
	{
		$_SESSION['status'] = "Please Select User for Update";  
		header('Location: error.php'); 
	}
}

#update ,user,company End



#delete ,user,company

if (isset($_POST['deletebtn'])) {


	$username = $_POST['deluname'];


	$query = "DELETE FROM `register` WHERE `username`='$username' ";
	$query_run = mysqli_query($connection,$query);

	if ($query_run) {
		$_SESSION['success'] =   "Successfully Delete !!";
		header('Location: index.php'); 
	}
	else
	{
		$_SESSION['status'] = "Not Deleted";  
		header('Location: index.php'); 
	}
}

#delete ,user,company End

#Create GD QUESTIONs

if (isset($_POST['gd_btn'])) {


	$gd_title = $_POST['gd_title'];
	$gd_link = $_POST['gd_link'];
	$gd_point = $_POST['gd_point'];


	$query = "INSERT INTO `gd`(`title`, `link`, `points`) VALUES ('$gd_title','$gd_link','$gd_point')";
	$query_run = mysqli_query($connection, $query);

	if ($query_run) {
		$_SESSION['success'] =   "Successfully Added GD !!";
		header('Location: gd.php'); 
	}
	else
	{
		$_SESSION['status'] = "Not Added";  
		header('Location: gd.php'); 
	}
}

#Create GD QUESTIONs End



#Update GD



if (isset($_POST['updategd'])) {

	$id = $_POST['upid'];
	$gd_title = $_POST['updatetitle'];
	$gd_link  = $_POST['uplink'];
	$gd_point = $_POST['uppoints'];


	$query = "UPDATE `gd` SET `title` = '$gd_title', `link` = '$gd_link', `points` = '$gd_point' WHERE `id` = '$id' ";
	$query_run = mysqli_query($connection, $query);


	if ($query_run) {
		$_SESSION['success'] =   "";
		header('Location: update_gd.php'); 
	}
	else
	{
		$_SESSION['status'] = "Please Select User for Update";  
		header('Location: update_gd.php'); 
	}
}
#Update GD End

#delete GD

if (isset($_POST['gd_remove'])) {


	$deltitle = $_POST['deltitle'];


	$query = "DELETE FROM `gd` WHERE `title`='$deltitle' ";
	$query_run = mysqli_query($connection,$query);

	if ($query_run) {
		$_SESSION['success'] =   "Successfully Delete !!";
		header('Location: gd.php'); 
	}
	else
	{
		$_SESSION['status'] = "Not Deleted";  
		header('Location: gd.php'); 
	}
}

#delete GD End


#Create HR Interview

if (isset($_POST['hr_btn'])) {

	
	$hr_question = $_POST['hr_question'];
	$hr_answer = $_POST['hr_answer'];

	$query = "INSERT INTO `hr`(`hr_question`, `hr_ans`) VALUES ('$hr_question','$hr_answer')";
	$query_run = mysqli_query($connection, $query);

	if ($query_run) {
		$_SESSION['success'] =   "Successfully Added HR !!";
		header('Location: gd.php'); 
	}
	else
	{
		$_SESSION['status'] = "Not Added";  
		header('Location: gd.php'); 
	}
}

#Create HR Interview End


#Update Interview



if (isset($_POST['updatehr'])) {

	$id = $_POST['up_id'];
	$hr_question = $_POST['hr_question'];
	$hr_answer = $_POST['hr_answer'];

	$query = "UPDATE `hr` SET `hr_question` = '$hr_question' , `hr_ans` = '$hr_answer' WHERE `id` = '$id' ";
	$query_run = mysqli_query($connection, $query);

	if ($query_run) {
		$_SESSION['success'] =   "";
		header('Location: update_hr.php'); 
	}
	else
	{
		$_SESSION['status'] = "Please Select User for Update";  
		header('Location: update_hr.php'); 
	}
}
#Update Interview End

#delete Interview

if (isset($_POST['hr_remove'])) {


	$delq = $_POST['del_question'];


	$query = "DELETE FROM `hr` WHERE `hr_question`='$delq' ";
	$query_run = mysqli_query($connection,$query);

	if ($query_run) {
		$_SESSION['success'] =   "Successfully Delete !!";
		header('Location: gd.php'); 
	}
	else
	{
		$_SESSION['status'] = "Not Deleted";  
		header('Location: gd.php'); 
	}
}

#delete Interview End



#Add Question

if (isset($_POST['add_question'])) {

	$q_dept = $_POST['dept'];
	$q_subject = $_POST['subject'];
	$q_question = $_POST['question'];
	$q_opt1 = $_POST['opt1'];
	$q_opt2 = $_POST['opt2'];
	$q_opt3 = $_POST['opt3'];
	$q_opt4 = $_POST['opt4'];
	$q_ans = $_POST['ans'];
	$q_sol = $_POST['solution'];
	$q_type = $_POST['q_type'];
	

	$query = "INSERT INTO `questions` (`department` , `subject`, `question`, `op1`, `op2`, `op3`, `op4`, `ans`, `solution`, `type`) VALUES ('$q_dept','$q_subject','$q_question', '$q_opt1','$q_opt2','$q_opt3','$q_opt4','$q_ans','$q_sol', '$q_type')";
	
	$query_run = mysqli_query($connection, $query);

	if ($query_run) {
		$_SESSION['success'] =   "Successfully Question Added !!";
		header('Location: questions.php'); 
	}
	else
	{
		$_SESSION['status'] = "Not Added";  
		header('Location: questions.php'); 
	}
}

#Add Question End


#Update Question



if (isset($_POST['questionup'])) {
	
	$q_subject = $_POST['upsubject'];
	$q_question = $_POST['updatequestion'];
	$q_opt1 = $_POST['upopt1'];
	$q_opt2 = $_POST['upopt2'];
	$q_opt3 = $_POST['upopt3'];
	$q_opt4 = $_POST['upopt4'];
	$q_ans = $_POST['upans'];
	$q_sol = $_POST['upsolution'];
	$q_type = $_POST['upq_type'];
	

	$query = "UPDATE `questions` SET `subject` = '$q_subject', `question` ='$q_question',`op1` = '$q_opt1' , `op2` = '$q_opt2', `op3` = '$q_opt3', `op4` = '$q_opt4', `ans` = '$q_ans', `solution` = '$q_sol', `type` = '$q_type' WHERE `question` = '$q_question'";
	
	$query_run = mysqli_query($connection, $query);

	if ($query_run) {
		$_SESSION['success'] =   "Successfully Updated Question !!!";
		header('Location: questions.php'); 
	}
	else
	{
		$_SESSION['status'] = "Not Added";  
		header('Location: questions.php'); 
	}


}
#Update Questionf

#delete Question

if (isset($_POST['deleteq'])) {


	$del_q = $_POST['delq'];


	$query = "DELETE FROM `questions` WHERE `question`='$del_q' ";
	$query_run = mysqli_query($connection,$query);

	if ($query_run) {
		$_SESSION['success'] =   "Successfully Delete !!";
		header('Location: questions.php'); 
	}
	else
	{
		$_SESSION['status'] = "Not Deleted";  
		header('Location: questions.php'); 
	}
}

#delete 


#Approve Company

if (isset($_POST['approve_status'])) {


	$cname = $_POST['companyname'];


	$query = "UPDATE `company` SET `status` = 1 WHERE `company_name` = '$cname' ";
	
	$query_run = mysqli_query($connection,$query);

	if ($query_run) {
		$_SESSION['success'] =   "Successfully Approved";
		header('Location: companies.php'); 
	}
	else
	{
		$_SESSION['status'] = "Company Not Found";  
		header('Location: companies.php'); 
	}
}

#end Approve Company

#reject Company

if (isset($_POST['reject_status'])) {


	$cname = $_POST['companyname'];


	$query = "UPDATE `company` SET `status` = 2 WHERE `company_name` = '$cname' ";
	
	$query_run = mysqli_query($connection,$query);

	if ($query_run) {
		$_SESSION['success'] =   "Successfully Rejected";
		header('Location: companies.php'); 
	}
	else
	{
		$_SESSION['status'] = "Company Not Found";  
		header('Location: companies.php'); 
	}
}

#end reject Company




#Insert Department

if (isset($_POST['adddept'])) {


	$dname = $_POST['deptname'];
	$image = $_FILES["deptfile"]['name'];

		if (file_exists("assets/img/departments/" . $_FILES["deptfile"]["name"])) 
		{
			$store = $_FILES["deptfile"]["name"];
			$_SESSION['status'] = "Image already exists. '.$store.'";
			header('Location: department.php');
		}
		else
		{

			$query = "INSERT INTO `department` (`department`, `bg_link`) VALUES ('$dname', '$image')";
			$query_run = mysqli_query($connection, $query);

			if ($query_run) {
				move_uploaded_file($_FILES["deptfile"]["tmp_name"], "assets/img/departments/".$_FILES["deptfile"]["name"]);
				$_SESSION['success'] =   "Successfully Added Department !!";
				header('Location: department.php'); 
			}
			else
			{
				$_SESSION['status'] = "not Added";  
				header('Location: department.php'); 
			}
		}


	}

#end Insert Department



#Update Department

if (isset($_POST['update_department'])) {


	$up_deptid = $_POST['up_deptid'];
	$up_dept = $_POST['up_dept'];
	$updeptfile = $_FILES["updeptfile"]['name'];

	

			$query = "UPDATE `department` SET `department` = '$up_dept' , `bg_link` = '$updeptfile' where  dept_id = '$up_deptid' ";
			$query_run = mysqli_query($connection, $query);

			if ($query_run) {
				move_uploaded_file($_FILES["updeptfile"]["tmp_name"], "assets/img/departments/".$_FILES["updeptfile"]["name"]);
				$_SESSION['success'] =   "Successfully Updated";
				header('Location: department.php'); 
			}
			else
			{
				$_SESSION['status'] = "not Added";  
				header('Location: department.php'); 
			}
		


	}

#end Update Department

#delete Department
if (isset($_POST['delete_department'])) {


	$de_deptid = $_POST['delete_deptid'];

	

	$query = "DELETE FROM `department` WHERE `dept_id` = '$de_deptid' ";
	$query_run = mysqli_query($connection,$query);

	if ($query_run) {
		$_SESSION['success'] =   "Successfully Delete !!";
		header('Location: department.php'); 
	}
	else
	{
		$_SESSION['status'] = $query; 
		header('Location: department.php'); 
	}
		


	}
#end Delete Department


#Insert Subject

if (isset($_POST['addsubject'])) {


	$dept_id = $_POST['dept_id'];
	$deptname = $_POST['deptname'];
	$sub = $_POST['subject'];
	$ref = $_POST['subject_ref'];
	$subfile = $_FILES["subfile"]['name'];

	if (file_exists("assets/img/subject/" . $_FILES["subfile"]["name"])) 
		{
			$store = $_FILES["subfile"]["name"];
			$_SESSION['status'] = "Image already exists. '.$store.'";
			header('Location: subject.php');
		}
	else
	{

		$query = "INSERT INTO `subject` (`dept_id` , `department`, `subject` , `reference`,`sub_img`) VALUES ('$dept_id','$deptname', '$sub', '$ref', '$subfile')";
		$query_run = mysqli_query($connection, $query);

			if ($query_run) {
				move_uploaded_file($_FILES["subfile"]["tmp_name"], "assets/img/subject/".$_FILES["subfile"]["name"]);
				$_SESSION['success'] =   "Successfully Added Subject";
				header('Location: subject.php'); 
			}
			else
			{
				$_SESSION['status'] =  "Not Added";

				header('Location: subject.php'); 
			}
		
		}

	}

#end Insert Subject


#Update Subject



if (isset($_POST['update_sub'])) {

	$upid = $_POST['up_subid'];
	$up_sub = $_POST['up_sub'];
	$up_ref = $_POST['up_ref'];
	$updept = $_POST['up_dptid'];

	 $getname = "SELECT * FROM department where dept_id = '$updept' ";
     $getname_run = mysqli_query($connection,$getname);
     $r = mysqli_fetch_assoc($getname_run);
     $d_name = $r['department'];

	$query = "UPDATE `subject` SET `dept_id` = '$updept' , `department` = '$d_name' , `subject` = '$up_sub' , `reference` = '$up_ref' WHERE `sub_id` = '$upid' ";
	$query_run = mysqli_query($connection, $query);

	if ($query_run) {
		$_SESSION['success'] =   $query;
		header('Location: subject.php'); 
	}
	else
	{
		$_SESSION['status'] = $query;  
		header('Location: subject.php'); 
	}
}
#Update Subject End


#delete Subject

if (isset($_POST['deletesub'])) {


	$del_sub = $_POST['delsub'];


	$query = "DELETE FROM `subject` WHERE `subject`='$del_sub' ";
	$query_run = mysqli_query($connection,$query);

	if ($query_run) {
		$_SESSION['success'] =   "Successfully Delete !!";
		header('Location: subject.php'); 
	}
	else
	{
		$_SESSION['status'] = "Not Deleted";  
		header('Location: subject.php'); 
	}
}

#delete Subject End

 ?>