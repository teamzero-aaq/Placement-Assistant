<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Placement Assistant</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="apti_practice.php">Aptitute</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="departments.php?name=goto_practice">Practice</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="departments.php?name=temp_practice">Online Test</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Interview</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item dd js-scroll-trigger" href="hr_main.php">HR Interview</a>
                        <a class="dropdown-item dd js-scroll-trigger" href="gd_main.php">Group Discussion</a>
                        <a class="dropdown-item dd js-scroll-trigger" href="tech_questions.php">Technical
                            Questions</a>
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><?php echo $_SESSION['username']; ?></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<?php if($_SESSION['usertype']==1){?>
                        <a class="dropdown-item dd js-scroll-trigger" href="go-to-admin/admin/index.php">Dashboard</a>
					<?php }?>
                        <a class="dropdown-item dd js-scroll-trigger" href="view_results.php">My Results</a>
                        <a class="dropdown-item dd js-scroll-trigger" href="logout.php">Logout</a>

                    </div>
                </li>

                <?php
          } 
          else {
            ?>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="login.php"><?php echo $_SESSION['username'] ;?>
                        LOGIN</a>
                </li>
                <?php 
                        } ?>



            </ul>
        </div>
    </div>
</nav>