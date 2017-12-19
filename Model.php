<?php 
namespace Wnet;
require_once "DB.php";
require_once "Cache.php";
use Wnet\DB;
class Model extends DB
{
    protected $dbn1;

    public static function findById($id, $column, $table)
    {
        $dbn1 = new DB();
        return $dbn1->query('SELECT * FROM '.$table.'  WHERE '.$column.'='.$id);
    
    }

    public function data($id, $column, $table){
    	$id_ = $id.'.tmp';
    	$cache = new Cache();
    	$res = $cache->read($id_);
    	if (empty($res)) {
    		$sql = $this->findById($id, $column, $table);
    		$res = $this->data_new($sql);
    		$cache->write($id_, $res);
    	}
    	return $res;
    	
    }

    public function data_new($sql){
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
        
}


?>