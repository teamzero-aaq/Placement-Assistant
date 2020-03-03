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
$(".subClass").click(function() {
    var id = ($(this).attr('id'));

    $.ajax({
        url: 'fil2.php',
        type: 'get',
        data: {
            depart: id
        },
        dataType: 'text',
        success: function(data) {


            $('#bodybody').html(data);
        }
    });
});
  </script>

  <script type="text/javascript">
$(".practice_subject").click(function() {
    var id = ($(this).attr('id'));

    $.ajax({
        url: 'fil.php',
        type: 'get',
        data: {
            depart: id
        },
        dataType: 'text',
        success: function(data) {


            $('#bodybody').html(data);
        }


    });


});
  </script>


  <script>
var total_seconds = 20 * 60;
var c_min = parseInt(total_seconds / 60);
var c_sec = parseInt(total_seconds % 60);

function checktime() {

    var time = c_min + ':' + c_sec;
    document.getElementById("MyClockDisplay").innerHTML = time;
    //document.getElementById("MyClockDisplay").innerContent =c_sec;  
    if (total_seconds <= 0) {
        setTimeout(document.getElementById('btn').click(), 1);
    } else {
        {
            total_seconds = total_seconds - 1;
            c_min = parseInt(total_seconds / 60);
            c_sec = parseInt(total_seconds % 60);
            setTimeout('checktime()', 1000);
        }

    }

}
setTimeout('checktime()', 1000);
  </script>

  </body>


  </html>