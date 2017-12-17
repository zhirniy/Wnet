<?php 
namespace Wnet;
require_once "Model.php";
use Wnet\Model;
$id = $_POST['number'];
$status = $_POST['status'];
$customer_object = [];

$sql;
$db = new Model();
$res = $db->findById($id, 'id_customer','obj_customers');

if($res->num_rows!=0){
while ($customer = $res->fetch_object()){
	if(!empty($customer->id_customer) || !empty($customer->name_customer)){
    $sql = $customer->id_customer;
    $sql .= ' '.$customer->name_customer;
    $sql .= ' '.$customer->company;
	} 
	}
} else {
	$sql = 'Такого пользователя не существует';	
}  

echo json_encode($sql);


?>