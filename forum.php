<?php include("dashboard/db.php"); 
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
            <div class="col-md-8 col-sm-10 left-side">


                <h3>Answers</h3>
                <?php {
        
        
$result = mysqli_query($connection,'select * from forum where id='.$_GET['id'].'');
}

while($rows=mysqli_fetch_array($result))
      {  ?>

                <div class="right-content-q">
                    <p><strong><?php echo $rows['username']; ?></strong> said:</p>
                    <p><?php echo nl2br($rows['response']); ?></p>

                </div><br><br>
                <?php
   }?>
            </div>
            <!--content end-->










            <div class="col-md-4 col-sm-10 sidebar">

                <div class="sidebar-item">
                    <div class="make-me-sticky">


                        <h3 class="style-title">Points to remember before you participate in this discussion:</h3>
                        <p class="p-style">1. Assume, you one of the member of a real group discussion.</p>
                        <p class="p-style">2. Take the initiative to participate and contribute your thoughts.</p>
                        <p class="p-style">3. Express your positive attitude towards providing the solution.</p>

                        <div>

                            <form action="verify_user.php" method="POST" id="user_thoughts">
                                <p class="p-style">Post your answer</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                                        placeholder="Your name..">
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
                                        placeholder="name@example.com">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" name="response" id="exampleFormControlTextarea1"
                                        rows="3"></textarea>
                                </div>
                                <button type="submit" value="<?php echo $_POST['view_gd'] ?>" form="user_thoughts"
                                    name="user_response" class="btn btn-info">Submit</button>
                            </form>

                        </div>
                        <!--end form section-->

                    </div>
                    <!--end sticky me-->
                </div>
                <!--end sidebar-item-->

            </div>
            <!--end right coolum-->

        </div>
        <!--end row-->

    </div>
    <!--end container-->


    <?php 
include('include_root/footer.php');
?>