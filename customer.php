<?php 
require "DB.php";
//$sql = $_POST["number"];
//echo $sql;
//$sql2 = $_POST["status"];
//$sql .= $sql2;
$sql;
$db = new DB();
$res = $db->query('SELECT * FROM obj_contracts');
//var_dump($res);
//$abc;
if($res->num_rows!=0){
while ($customer = $res->fetch_object()){
    $sql = $customer->id_customer;
}
}  

//echo $sql;
//var_dump($db);
//$db = $db->query('123');
echo json_encode($sql);
//echo "1";

?>