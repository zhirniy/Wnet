<html>
  <head>
    <title>тестовое задание</title>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(){ 
  $("label").append(":"); 
}); 
</script>
  </head>
  <body>
  <form action="index.php" method="post" enctype="multipart/form-data">
  	<input type="text" name="number" value = 
  	<?php if($_POST['number']){echo '"'.$_POST['number'].'"';}?>
  	required pattern="\d{1,11}" placeholder="id_клиента">
  	<label>work</label><input type="radio" name="status" <?php if($_POST['status']=="work"){echo 'checked';}?> value="work" required>
  	<label>connecting</label><input type="radio" name="status" <?php if($_POST['status']=="connecting"){echo 'checked';}?> value="connecting" required>
  	<label>disconnected</label><input type="radio" name="status" <?php if($_POST['status']=="disconnected"){echo 'checked';}?> value="disconnected" required>
  	<input type="submit" name="submit" value="Отправить">
  </form>
 
 <?php include 'customer.php';?>
  </body>
</html>



