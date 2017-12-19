<?php 
namespace Wnet;
require_once "DB.php";
use Wnet\DB;
class Model extends DB
{
    protected $dbn1;
   
    public static function findById($id, $column, $table)
    {
        $dbn1 = new DB();
        return $dbn1->query('SELECT * FROM '.$table.'  WHERE '.$column.'='.$id);
    
    }
        
}


?>