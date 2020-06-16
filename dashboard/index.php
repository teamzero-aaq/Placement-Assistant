<?php 

 include('includes/header.php');
 include('includes/navbar.php');
 include('db.php');
 ?>
<?php


$primary_key="";
if(isset($_SESSION['username'])){
    $primary_key = $_SESSION['username'];
}
//$primary_key="vatsal.pathak003@somaiya.edu";



####if-else




    {
    
//echo $_SESSION['username'];
if($connection)

{
	echo "fetching data";
    $Fname="";
    $Lname="";
    $Rno="";
    $dept="";
    $Email="";
    $contact="";
    $query="select * from `personal` where Email='$primary_key'";

 $result=mysqli_query($connection,$query);
    {

        if(mysqli_num_rows($result)>0)
        {
			//echo "query inside";

            //$qrun=mysqli_query($connection,$q);
            if(mysqli_num_rows($result)>0){
                while($row1=mysqli_fetch_array($result)){
				//	print_r( $row1);
					echo "RESULT";
                    $Fname=$row1['Fname'];
                    $Lname=$row1['Lname'];
                    $Rno=$row1['Rno'];
                    $dept=$row1['dept'];
                    $Email=$row1['Email'];
                    $contact=$row1['contact'];
                    }
            }


        }
        
    }
   
        
}
    
    

else
{
  die("connection failed because ".mysqli_connect_error() );
}
    }

  
    
    
    

 


 ?>



  <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block">Profile</a>
 <?php include('includes/navbarend.php'); ?>
    <!-- Header -->

    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello Jesse</h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            <a href="#!" class="btn btn-info">profile Picture</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        
        <div class="col-xl-12 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="container">
        <!-- Navigation -->

        
      <div class="py-5 text-center">
        <legend>Personal Profile</legend>
      </div>
<div id="error" align="center"></div>
      <div class="row justify-content-xl-center">
          
        <div class="col-md-8 order-md-1">
          
           
          <form class="needs-validation cst-bclass" id="qwerq" method ="post" action="data_fetch.php">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control"  name="firstName"  id="firstName" value="<?php echo htmlspecialchars($Fname);?>" placeholder="Your First Name" required>
                <div id="error1" style="color:#f23a3a;" ><?php// echo $error1; ?></div>
                  <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" name="lastName" id="lastName" value="<?php echo htmlspecialchars($Lname);?>" placeholder="Your Last Name" required>
                <div id="error2" style="color:#f23a3a;" ><?php global $erro2;echo $erro2; ?></div>
                  <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="rno">Roll Number</label>
              <div class="input-group">
                <input type="number" class="form-control" name="rno" id="rno" placeholder="Roll Number" value="<?php echo htmlspecialchars($Rno);?>" required>
                <div id="error3" style="color:#f23a3a;" ><?php global $erro3;echo $erro3; ?></div>
                  <div class="invalid-feedback" style="width: 100%;">
                  Your Roll Number is required.
                </div>
              </div>
            </div>


            <div class="mb-3">
              <label for="dpt">Department&nbsp</label>
  

                  <select class="form-control" name="dept" id="dept" id="sel1" >
                    <option <?php if($dept=='Computer'){ echo htmlspecialchars("selected");} ?>>Computer</option>
                    <option <?php if($dept=='Mechanical'){ echo htmlspecialchars("selected");} ?>>Mechanical</option>
                    <option <?php if($dept=='Electronics'){ echo htmlspecialchars("selected");} ?>>Electronics</option>
                    <option <?php if($dept=='I.T.'){ echo htmlspecialchars("selected");} ?>>I.T.</option>
                    <option <?php if($dept=='EXTC'){ echo htmlspecialchars("selected");} ?>>EXTC</option>
                  </select>
                            
            </div>

              
            <div class="mb-3">
              <label for="email">Somaiya Email ID<span class="text-muted"></span></label>
              <input type="email" class="form-control" name="email" id="email" value="<?php echo htmlspecialchars($Email);?>" placeholder="you@somaiya.edu">
              <div id="error4" style="color:#f23a3a;" ><?php global $erro4; echo $erro4; ?></div>
                <div class="invalid-feedback">
                Please enter a valid email address .
              </div>
            </div>             

            <div class="mb-3">
              <label for="phn">Contact Number </label>
              <input type="tel" name="phn" class="form-control" id="phn" value="<?php echo htmlspecialchars($contact);?>" placeholder="Contact Number" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" required>
                <div id="error5" style="color:#f23a3a;" ><?php global $erro5;echo $erro5; ?></div>
            </div>
              
              <div class="invalid-feedback">
                Please enter a valid Contact Number .
              </div>

            
            <hr class="mb-4">
            <button class=" col-md-6 mb-3 btn btn-primary btn-lg btn-block" name="submit_personal"  value="submit" type="submit">Save and Proceed</button>
          </form>
               
        </div>
      </div>


</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="C:\Users\Administrator\Desktop\form\template\bootstrap-4.3.1-dist\js" ></script>
        <script src="form-validation.js"></script>
          </div>
        </div>
      </div>
        
  <script type="text/javascript">
      
      $("#qwerq").submit(function (e){
          
          //e.preventDefault();
          var check=0;
          
          if($("#firstName").val() == "")
              {
                  var error="";
                  check=1;
                  error+= "<p >*First name cannot be empty.</p>";
                  $("#error1").html('<div style="color:#f23a3a;" class="alert " role="alert">'+error+'</div>');
                            

              }
          else
              {
                 $("#error1").remove(); 
              }
          if($("#lastName").val() == "")
              {
                  var error="";
                  check=1;
                  error+= "<p >*Last name cannot be empty.</p>";
                  $("#error2").html('<div style="color:#f23a3a;" class="alert " role="alert">'+error+'</div>');
              }
          else
              {
                 $("#error2").remove(); 
              }
          if($("#rno").val() == "")
              {
                  var error="";
                  check=1;
                  error+= "<p>*Roll number is required.</p>";
                  $("#error3").html('<div style="color:#f23a3a;" class="alert " role="alert">'+error+'</div>');
              }
          else
              {
                 $("#error3").remove(); 
              }
          if($("#email").val() == "")
              {
                  var error="";
                  check=1;
                  error+= "<p>*Somaiya Email ID is required.</p>";
                  $("#error4").html('<div style="color:#f23a3a;" class="alert " role="alert">'+error+'</div>');
              } 
          else
              {
                 $("#error4").remove(); 
              }
          if($("#phn").val() == "")
              {
                  var error="";
                  check=1;
                  error+= "<p>*Contact is required.</p>";
                  $("#error5").html('<div style="color:#f23a3a;" class="alert " role="alert">'+error+'</div>');
              }
          else
              {
                 $("#error5").remove(); 
              }
          if(check!=1){
              
           //$("#qwerq").unbind('submit').submit() ;
            //$("#qwerq").bind("submit") ;
              $("#qwerq").submit();
              //$("#qwerq").trigger('submit', [true]);
         //.submit()
          }
          else {
              return false;
          }
          
          
          //$("#error").html('<div style="color:#f23a3a;" class="alert " role="alert"><p><strong>Errors found in form:</strong></p>'+error+'</div>');
          
      });
        
        
        
        
        
    </script>  
          
  <?php 
 //include('includes/script.php');
 include('includes/footer.php');
 ?>