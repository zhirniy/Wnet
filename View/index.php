<html>
  <head>
    <title>тестовое задание</title>
  </head>
  <body>
  <form action="index.php" method="post" enctype="multipart/form-data">
  	<input type="number" name="number" value = 
  	<?php if($_POST['number']){echo '"'.$_POST['number'].'"';}?>
  	required pattern="\d{11}">
  	<label>work</label><input type="radio" name="status" <?php if($_POST['status']=="work"){echo 'checked';}?> value="work">
  	<label>connecting</label><input type="radio" name="status" <?php if($_POST['status']=="connecting"){echo 'checked';}?> value="connecting">
  	<label>disconnected</label><input type="radio" name="status" <?php if($_POST['status']=="disconnected"){echo 'checked';}?> value="disconnected">
  	<input type="submit" name="submit" value="Проверить">
  </form>
 
 <?php include 'message.php';?>
  </body>
</html>



