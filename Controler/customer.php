<?php

  namespace Wnet\Controler;
  
  require '/../autoload.php';


 //Создаём соединение с базой данных с таблицей указаной в классе
 $customer = new \Wnet\Model\Customer();

  $id = $_POST['number'];
  $status = $_POST['status'];

?>

