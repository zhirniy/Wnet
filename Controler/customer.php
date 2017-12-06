<?php

  namespace Wnet\Controler;
  
  require '/../autoload.php';


 //Создаём соединение с базой данных с таблицей указаной в классе
 $customer = new \Wnet\Model\Customer();
  //var_dump($_POST['number']);
  $id = $_POST['number'];
  $status = $_POST['status'];
  //var_dump($_POST['number1']);

?>

