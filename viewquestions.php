<?php 
include('dashboard/db.php');

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
                    <h1 class="text-uppercase text-white font-weight-bold">Group Discussion</h1>
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5">In the history of modern astronomy, there is
                        probably no one greater leap forward than the building and launch of the space telescope.</p>

                </div>
            </div>
        </div>
    </header>



    <div class="container testsection">
        <div class="row">
            <?php $out=file_get_contents('tech/'.$_GET['name'].'.txt');
//exec('python codeforce.py 1283/F \\user\\D.java',$output);
//$Str1 = preg_replace('/[\x00-\x1F\x7F-\xFF]/', '', $out);

echo '<ul style="list-style: none;">';
echo (($out));
echo '</ul>';?>
        </div>
        <!--end row-->

    </div>
    <!--end container-->


    <?php 
include('include_root/footer.php');
?>