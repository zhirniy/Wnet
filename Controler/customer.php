<?php

  namespace Wnet\Controler;
  
  require '/../autoload.php';


 //Создаём соединение с базой данных с таблицей указаной в классе
 $customer = new \Wnet\Model\Customer();


 $id = $_POST['number'];
 //$id = $id.'_customer';
 $status = $_POST['status'];
 //var_dump($status);
 //$customer->number = 3;

 // $res=$customer::findAll();
 // $res->number = 3;
 //var_dump($res);
 /* $dbn = mysqli_connect("localhost", "root", "12345678", "bd") or die ("Невозможно подключиться к БД");*/
  //$res = mysqli_query($dbn,'SELECT * FROM mytable');
    //$row = mysqli_fetch_assoc($res);
 // var_dump($row);

// var_dump($message);
 //Получаем общее колличество записей в таблице
// $posts = $message::count();
 //Указываем кол-во сообщений которые будут выводится на одной странице
// $num = 3;
 //$page = intval($_GET['page']);
 //var_dump($page);
 //var_dump($page);
// $total = intval((($posts - 1) / $num) + 1);
  // Определяем начало сообщений для текущей страницы
  // Если значение $page меньше единицы или отрицательно
  // переходим на первую страницу
  // А если слишком большое, то переходим на последнюю
 //if(empty($page) or $page < 0) $page = 1;
//var_dump($page);
 // if($page > $total) $page = $total;
// Вычисляем начиная с какого номера
// следует выводить сообщения
// $start = $page * $num - $num;
 //var_dump($total);


/*$option = $_POST['option'] ? $_POST['option'] : null;
$username = $_POST['username'] ? $_POST['username'] : null;
$email = $_POST['email'] ? $_POST['email'] : null;
$comment = $_POST['comment'] ? $_POST['comment'] : null;
$image = $_POST['comment'] ? $_POST['comment'] : null;
if(!empty($_FILES)){
  $image = $_FILES['file'];
  $name_file = $image['name'];


if($image['error'] == 0){
  move_uploaded_file(
    $image['tmp_name'], 
    __DIR__.'/../images/'.$name_file
    );
  }
}


include 'sort_add.php';
$params = [$sort, $start, $num, $total, $page];
*/

//$view = new \MVC\Model\View();
//$params = [$sort, $start, $page, $total, $page];
//var_dump($params);
//$res=$message::findAll($sort, $start, $num);
//include 'View/message.php';
//$view = new \Model\View();
//$view->res = $message::findAll($sort, $start, $num);
//$view->display(__DIR__.'mvc/View/message.php');




 // require 'Model/model_login.php'; //ПАНЕЛЬ АДМИНИСТРАТОРА
 // require 'Model/model_edit_login.php';  //ПАНЕЛЬ АДМИНИСТРАТОРА

 




  

/*if(!empty($_FILES)){
  $image = $_FILES['file'];
  $name_file = $image['name'];


if($image['error'] == 0){
  move_uploaded_file(
    $image['tmp_name'], 
    __DIR__.'/images/'.$name_file
    );
  }
}*/
//}
//СОЗДАНИЕ НОВЫХ ЗАПИСЕЙ И СОРТИРОВКА СТАРЫХ
//require 'Model/model_edit.php';
//ВЫВОД ИНФОРМАЦИИ
//include 'Model/model_view.php';
?>

