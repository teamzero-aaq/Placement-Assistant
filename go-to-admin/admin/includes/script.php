 <!--   Core   -->
 
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>

  <script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="../assets/js/plugins/clipboard/dist/clipboard.min.js"></script>
  <!--   Argon JS   -->
  <script src="../assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
  	
  	$(document).ready( function () {
    $('#myTable').DataTable();
} );
  </script>


  <script type="text/javascript">
    
    $(document).ready(function(){

      $("#depertment").ready(function()
      {
        var dept_id = $(this).val();
        $.ajax({
          url: "getsubject.php",
          method:"POST",
          data:{dept:dept_id},
          success:function(data){
            $("#subject").html(data);



          }
        });
      });

    }); 
    


  </script>
 
<!--   
-->