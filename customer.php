<?php 
namespace Wnet;
require_once "Model.php";
require_once'Cache.php';
use Wnet\Model;
$id = $_POST['number'];
$status = $_POST['status'];

$db = new Model();
$res = $db->data($id, $status, 'id_customer','obj_customers');

echo json_encode($res);

?>