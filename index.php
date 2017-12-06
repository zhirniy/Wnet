<?php
session_start();
require 'autoload.php';
//try{
//var_dump($_POST['number']);
$controler = new Wnet\Controler\Task();
$action = $_GET['action'] ? : 'Index';

$controler->action($action);
//} catch(\Wnet\Exception\Core $ex) {
//	echo 'Проблема компонента отображения ';
//}
//   catch(\Wnet\Exception\Connect $ex) {
//	echo 'Нет соединения с базой';
//}

?>