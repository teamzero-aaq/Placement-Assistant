<?php session_start(); 
error_reporting(0);
$count1=0;
$count=0;
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
                    <h1 class="text-uppercase text-white font-weight-bold">Online Test</h1>
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5">In the history of modern astronomy, there is
                        probably no
                        one greater leap forward than the building and launch of the space telescope.</p>

                </div>
            </div>
        </div>
    </header>



    <div class="container testsection">
        <div class="row">

            <div class="col-md-8 left-side">


                <h2>Bordered Table</h2>
                <p>Use the CSS border property to add a border to the table.</p>

                <table style="width:100%">
                    <tr>
                        <th>CORRECT</th>
                        <th>WRONG</th>
                        <th>NOT ATTEMPTED</th>
                    </tr>
                    <tr>t
                        <td><?php echo $_SESSION['c'];?></td>
                        <td><?php echo $_SESSION['w'];?></td>
                        <td><?php echo $_SESSION['n'];?></td>
                    </tr>

                </table>


            </div>






            <div class="col-md-4 sidebar">







            </div>



        </div>
    </div>



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

</body>

</html>