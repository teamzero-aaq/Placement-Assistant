<?php 
include('checking.php');

//include('dashboard/security.php');
//session_start();
error_reporting(0);
include('include_root/header.php');
?>


<body>
    <?php
include('include_root/navbar.php');
?>
    <!-- Masthead -->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">Placement Assistant</h1>
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5"></p>

                </div>
            </div>
        </div>
    </header>

    <?php
include('include_root/footer.php');
?>