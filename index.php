<html>
  <head>
    <title>Тестовое задание</title>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
   <script>

$(document).ready(function(){ 
$("#search_results").slideUp(); 
    $("#submit").click(function(e){ 
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
        $("#number").change(function(e){ 
        e.preventDefault(); 
        ajax_search(); 
    }); 


});

function ajax_search(){ 
  $.ajax({
    type: "POST",
    url: "./customer.php",
    // The key needs to match your method's input parameter (case-sensitive).
    data: JSON.stringify({ Markers: markers }),
    contentType: "application/json; charset=utf-8",
    dataType: "json",
    success: function(data){alert(data);},
    failure: function(errMsg) {
        alert(errMsg);
    }
});
 /* $("#search_results").show(); 
  var search_val = $("#number").val(); 
  var search_status = status();
   $.post("./customer.php",
   {
    number : search_val,
    status: search_status

   }, 
   function(data){
  if (data.length>0){ 
     $("#search_results").html(data); 
 } 
});

function status(){
 var value = $('input[name=status]:checked').val();
 return value; 
}*/


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
  <p id="search_results">123</p>
 
  </body>
</html>



