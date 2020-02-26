<?php 
include('checking.php');

//include('dashboard/security.php');
//session_start();
error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Placement Assistant | Home </title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>



  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#">Placement Assistant</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Aptitute</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="departments.php?name=goto_practice">Practice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="departments.php?name=temp_practice">Online Test</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Interview</a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item dd js-scroll-trigger" href="hr_main.php">HR Interview</a>
               <a class="dropdown-item dd js-scroll-trigger" href="gd_main.php">Group Discussion</a>
                              <a class="dropdown-item dd js-scroll-trigger" href="tech_questions.php">Technical Questions</a>
             </div>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Company</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">About</a>
          </li>
          
          
            <?php if(isset($_SESSION['username'])&&($_SESSION['username']!=' ')){

              ?>
              <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username']; ?></a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item dd js-scroll-trigger" href="view_results.php">MY RESULTS</a>
               <a class="dropdown-item dd js-scroll-trigger" href="logout.php">LOGOUT</a>
                              
             </div>
          </li>
          
          <?php
          } 
          else {
            ?>
            <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="login.php"><?php echo $_SESSION['username'] ;?> LOGIN</a>
                        </li>
                        <?php 
                        } ?>

          
         
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">We Rank the Best Courses on the Web</h1>
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope.</p>
         
        </div>
      </div>
    </div> 
  </header>

  <!-- About Section -->
  <section class="page-section section1">
    <div class="container">
      <div class="row ">
        <div class="col-sm-6">
          <img src="img/about.webp" class="img-responsive">
        </div>
        <div class="col-sm-6">
        <div class="sec1-content">
          <h2 class="text-dark">Over 2500 Courses from 5 Platform</h2>
          <p class="text-dark">There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station. In the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station.</p>
        </div>
         <a class="btn-xl js-scroll-trigger" href="#services">Get Started!</a>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section -->
    <section class="page-section section2">
    <div class="container">
      <div class="row ">
        <div class="col-sm-6 align-items-center">
          <div class="sec2-content">
          <h2 class="text-dark">This is Why <br>We have Solid Idea</h2>
          <p class="text-dark">There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station. In the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station.</p>
        </div>
         <a class="btn-xl js-scroll-trigger" href="#services">Explore Companies</a>
        </div>
        <div class="col-sm-6">
            <div class="row right-row">
              <div class="col-sm-4 col-xs-12"><img src="img/about.webp" class="img-responsive"></div>
               <div class="col-sm-4 col-xs-12 "><img src="img/about.webp" class="img-responsive"></div>
                <div class="col-sm-4 col-xs-12"><img src="img/about.webp" class="img-responsive"></div>
               <div class="col-sm-4 col-xs-12 "><img src="img/about.webp" class="img-responsive"></div>
              <div class="col-sm-4 col-xs-12"><img src="img/about.webp" class="img-responsive"></div>
               <div class="col-sm-4 col-xs-12 "><img src="img/about.webp" class="img-responsive"></div>

             </div>
      </div>
    </div>
  </section>
  <!-- Feature Section -->
 <section class="page-section section3">
    <div class="container">
      <div class="heading-style">
       <h2 class="text-dark text-center">Features That Make Us Hero</h2>
        <p class="text-dark text-center">If you are looking at blank cassettes on the web, you may be very confused at the difference in price. <br>You may see some for as low as $.17 each.</p>
        </div>
      <div class="row">
        <div class="col-sm-6 align-items-center">
          <div class="sec3-content">
          
          </div>
        </div>
        <div class="col-sm-6">
            <div class="row right-row">
             

             </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Placement Assistant</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


  <!-- Custom scripts for this template -->
  <script src="js/creative.js"></script>
  <script type="text/javascript">
    
  </script>

</body>
<script type="text/javascript">
 
</script>
</html>
