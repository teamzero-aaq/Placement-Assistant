 <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2019 <a href="#" class="font-weight-bold ml-1" target="_blank">Placement Asistant</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">Home</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">Documentation</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">Version 1.0</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div><!-- end page content -->
  </div><!--main content end -->

</body>
<script type="text/javascript">

  $("#department").change(function(){
      var txt=$(this).val();
        $.ajax({
        url:'get_sub.php',
        method:'POST',
        
        data:{txtval:txt},
        success:function(data)
        {
          
          $('#sub').html(data);
        }
    
 
      });

      
  });

$(document).ready(function() {

  $("#search_text").keyup(function()
  {
    var txt=$(this).val();
                //alert(txt);

    if(txt!='')
    {
      $.ajax({
        url:'search_txt.php',
        method:'POST',
        
        data:{txtval:txt},
        success:function(data)
        {
          
          $('#result').html(data);
        }
    
 
      });



    }
    else
    {
      $.ajax({
        url:"search_txt.php",
        type:"POST",
        
        data:{txtval:txt},
        success:function(data)
        {
          
          $('#result').html(data);
        }
      
      });
}
    
  });
});
 


 $("#asc").click(function(){
        var s=$(this).val()
		var search=$("#search_text").val()
        //var start=$("#search_start").val()
       // var end=$("#search_end").val()
        //console.log(start)
        //console.log(end)
        $.ajax({
          url:"sort.php",
          method:"post",
          data:{sort:s,search:search},
          success:function(data){
            
            $('#result').html(data);

          }


        });
  });

  $("#desc").click(function(){
        var s=$(this).val()
				var search=$("#search_text").val()
        //var start=$("#search_start").val()
       // var end=$("#search_end").val()
         //console.log(start)
        //console.log(end)
console.log(search);
        $.ajax({
          url:"sort.php",
          method:"post",
          data:{sort:s,search:search},
          success:function(data){
            
            $('#result').html(data);

          }


        });
  }); 


  



</script>
</html>