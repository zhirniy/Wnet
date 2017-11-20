<?php  

 namespace Wnet\Model;


abstract class Model
{
	//const TABLE = '';
	//public $id;
	 /**
     *Статический метод возвращающий всю информацию из базы данных
     *@return array
     */
	public static function findById($id, $column, $table)
    {
        $dbn1 = Connect::instance();
        return $dbn1->query('SELECT * FROM '.$table.'  WHERE '.$column.'='.$id);
    }

    public static function findById1($id, $status)
    {
        $dbn1 = Connect::instance();
        return $dbn1->query('SELECT obj_services.title_service, obj_services.status, obj_contracts.id_contract, obj_contracts.number, obj_contracts.date_sign, obj_contracts.staff_number  FROM obj_services INNER JOIN obj_contracts ON obj_services.id_contract = obj_contracts.id_contract WHERE obj_contracts.id_customer='.$id.' AND obj_services.status='."'".$status."'");
    
    }
}
    /**
     *Статический метод возвращающий запись по id из базы данных
     *@return array
     */
  /*  public static function findById($id)
    {
    $dbn1 = Connect::instance();
      //var_dump('SELECT * FROM '.static::TABLE .' ORDER BY '. $column . ' DESC LIMIT ' . $start.', '.$num,
    //static::class);
    return $dbn1->query('SELECT * FROM '.static::TABLE . ' WHERE id=:id', [':id'=>$id],
    static::class);  
    
    }


     /**
     *Статический метод возвращающий колличество записей из базы данных
     *@return integer
     */
  /*  public static function count()
    {
    $dbn1 = Connect::instance();
    $result = $dbn1->query('SELECT COUNT(*) FROM '.static::TABLE, [],
    static::class);
    $result = $result[0];
    $posts;
  foreach ($result as $key => $value) {
       if ($value === null) continue;
       else{$posts = intval($value);}
  }
    return $posts;
}



    

    public  function insert()
    {
    	if(!$this->isNew()){
    		return;
    	}
    	$key_ = array();
    	$value_ = array();
    	foreach ($this as $key => $value) {
    		if($key =='id'){
    			continue;
    		}
    		$key_ []= $key;
            $value_[$key]=$value;

    		
    	}
       
        $sql = 'INSERT INTO '.static::TABLE.' ('.implode(",", $key_).') VALUES ('.'"'.implode("\",\"", $value_).'"'.')';
      //  var_dump($sql);
        $dbn1 = Connect::instance();
       	$dbn1->execute($sql);
    

    }

     public  function isNew()
     {
        return empty($this->id);
    
    }

    

    public  function update()
    {
     /*   if($this->isNew()){
            return;
        }*/
      //  $id;
   /*     $login;
        $password;

        foreach ($this as $key => $value) {
         if($key =='id'){
            $id=$value; 
        }
           if($key =='login'){
            $login=$value; 
        }

        if($key =='password'){
            $password=$value; 
        }


    }
     
       $sql=$id.$login.$password;
        $sql = 'UPDATE '.static::TABLE.' SET login= \''.$login.'\', password=\''.$password.'\' WHERE id='.$id;

        $dbn1 = Connect::instance();
        $dbn1->execute($sql);

          

    }

   


*/




//	}
?>