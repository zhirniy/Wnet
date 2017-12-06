<html>
  <head>
    <title>тестовое задание</title>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
   <script>
/*
$(document).ready(function(){ 
$("#search_results").slideUp(); 
    $("#submit").click(function(e){ 
        e.preventDefault(); 
        ajax_search(); 
    }); 
    $("#number").keyup(function(e){ 
        e.preventDefault(); 
        ajax_search(); 
    }); 
 
});

function ajax_search(){ 
  $("#search_results").show(); 
  var search_val = $("#number").val(); 
  //var status_val = $("#number").val();
  $.post(".../Wnet/Controler/customer.php", {number : search_val}, onAjaxSuccess
    //, function(data){
 // if (data.length>0){ 
  //   $("#search_results").html(data); 
 // } 
  //}
  ) 
} 

function onAjaxSuccess(data)
{
  // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
 // alert(data);
}
</script>
  </head>
  <body>
  <form  method="post" enctype="multipart/form-data">

  	<input type="text" name="number" id="number" value = 
  	<?php if($_POST['number']){echo '"'.$_POST['number'].'"';}?>
  	required pattern="\d{1,11}" placeholder="id_клиента">
  	<label>work</label><input type="radio" name="status" <?php if($_POST['status']=="work"){echo 'checked';}?> value="work" required>
  	<label>connecting</label><input type="radio" name="status" <?php if($_POST['status']=="connecting"){echo 'checked';}?> value="connecting" required>
  	<label>disconnected</label><input type="radio" name="status" <?php if($_POST['status']=="disconnected"){echo 'checked';}?> value="disconnected" required>
  	<input id="submit" type="submit" name="submit" value="Отправить">
  </form>
  <p id="search_results">12345</p>
 
 <?php include 'customer.php';?>
  </body>
</html>



