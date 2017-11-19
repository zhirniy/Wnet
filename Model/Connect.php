<?php 
  namespace Wnet\Model;
 
  class Connect
  {
  use Single;
  protected $dbn;
 // public $dbn;
  public function __construct()
  {
    
   // $this->dbn = new \PDO('mysql:host=localhost; dbname=bd', 'root', '12345678');
  $this->dbn = mysqli_connect("localhost", "root", "12345678", "wnet") or die ("Невозможно подключиться к БД");
  // return $dbn;
  // @mysqli_query ($db, 'set character_set_results = "utf8"');

  }
/*  public function execute($sql, $params = [])
  {
   $sth = $this->dbn->prepare($sql);
   $res = $sth->execute($params);
   return $res;
}*/
   public function query($params)
   {
   //$this->query = mysqli_query($dbn, $params);
  // echo $params;
    return mysqli_query($this->dbn, $params);
  // $sth = $this->dbn->prepare($sql);
   //$res = $sth->execute($params);
   //if(false !== $res){
 //  	return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
 //  }
  // return [];
  }

 
}



?>
