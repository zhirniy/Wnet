<?php
namespace Wnet;
class DB
{
protected $dbn;	
public function __construct()
  {
     $this->dbn = mysqli_connect("localhost", "root", "12345678", "wnet") or die ("Невозможно подключиться к БД");
  }
   public function query($params)
   {
   	 return mysqli_query($this->dbn, $params);
  }

}
?> 