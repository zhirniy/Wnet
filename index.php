<html>
  <head>
    <title>Тестовое задание</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
   <script>

$(document).ready(function(){
$("#submit").click(function(e){ 
        e.preventDefault(); 
        ajax_search(); 
    }); 
 $("#number").keyup(function(e){ 
        e.preventDefault(); 
        ajax_search(); 
    }); 
  $("#status1").change(function(e){ 
        e.preventDefault(); 
        ajax_search(); 
    }); 
  $("#status2").change(function(e){ 
        e.preventDefault(); 
        ajax_search(); 
    }); 
  $("#status3").change(function(e){ 
        e.preventDefault(); 
        ajax_search(); 
    });



});

function ajax_search(){
  var search_val = $("#number").val();
  var search_status = status();
   $.ajax({
   url: "customer.php",
   type: "POST",
   dataType: 'json',
   //contentType: "application/json",
   data: {
            number:search_val,
            status:search_status
   },
  
   success: function(html){
      $("#search_results").html(html);
    },
    error: function (error) {
    $("#search_results").html(error);
}
 });

}

function status(){
 var value = $('input[name=status]:checked').val();
 return value; 
}


</script>
  </head>
  <body>
  <form  method="post" enctype="multipart/form-data">
  	<input type="text" name="number" id="number"> 
    <label>work</label><input id="status1" type="radio" name="status" value="work" required>
    <label>connecting</label><input id="status2" type="radio" name="status" value="connecting" required>
    <label>disconnected</label><input id="status3" type="radio" name="status" value="disconnected" required>
  	<input id="submit" type="submit" name="submit" value="Отправить">
  </form>
  <p id="search_results">Выберите пользователя</p>
  <?php //include 'customer.php'; ?>
  </body>
</html>



