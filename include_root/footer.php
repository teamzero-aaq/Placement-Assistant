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
var p=$(this).data('id');

if(p=='no'){
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


});}
else{
	alert("please enter password");
	if(!document.getElementById('pass')){
	$('#id_test').text(id);	
	$('#here').append('<input type="password" name="pass"  id="pass" placeholder="enter password" />');
	$('#here').append('<br><br><button type="button" name="verify_pass"  value="'+id+'" class="btn btn-info btn-sm align-item-center verify_pass" id="verify">verify</button>');
}
}


});
$(".close").click(function() {
	  $('#myModal').modal('toggle');
	  location.reload(true);
	
});	
	
$("body").on('click','.verify_pass',function () {
	
var pass=document.getElementById('pass').value;
var id=$(this).val();

$.ajax({
        url: 'fil2.php',
        type: 'get',
        data: {
            depart: id,
			pass:pass
        },
        dataType: 'text',
        success: function(data) {


            $('#bodybody').html(data);
        }


});
});
  </script>


  <script>
  </script>

  </body>


  </html>