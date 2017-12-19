<?php 
namespace Wnet;
require_once "Model.php";
require_once'Cache.php';
use Wnet\Model;
$id = $_POST['number'];
$status = $_POST['status'];
$id_ = $id.'.tmp';

// подключаем класс
	// создаём объект
	$cache = new Cache();
	// проверяем существование кэша
	$res = $cache->read($id_); //17 это например id статьи
	// допустим, такого кэша нет. Достаём статьи из базы
	if (empty($res)) {
		$db = new Model();
        $sql = $db->findById($id, 'id_customer','obj_customers');
        $res = data($sql);
        $cache->write($id_, $res);
	}
    
   function data($sql){
        while ($customer = $sql->fetch_object()){
		if(!empty($customer->id_customer) || !empty($customer->name_customer)){
	    $res = $customer->id_customer;
	    $res .= ' '.$customer->name_customer;
	    $res .= ' '.$customer->company;
	    return $res;
		} 
	}
		if(!$sql->fetch_object()){
		$res = "Такого пользователя не существует";	
		return $res;
		}
}
    echo json_encode($res);


?>