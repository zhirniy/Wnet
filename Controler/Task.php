<?php 
namespace Wnet\Controler;
//include 'Controler/controler.php';

class Task
{
	   //public static $count = 0;
	   public function __construct()
	   {
	   	$this->view = new \Wnet\Model\View();
	   }
        
        public function action($action)
        {
           //  try {
        	if($action != null){
        	$metodName = 'action'.$action;
        	//$this->beforeactiom();
        	return $this->$metodName();
            }
        	//else{
        	/*$metodName = 'action'.$action;
        	$this->beforeactiom();
        	return $this->$metodName();	
        	}
            
            }catch(Exception $ex){
            	$ex = new \Wnet\Exception\Core();
                throw $ex;
            }*/
        }
   /*     protected function beforeactiom()
        {
            include 'Controler/login.php';

        }*/
		protected function actionIndex()
		{
		 include 'Controler\customer.php';
		 $this->view->id = $id;
		 $this->view->status = $status;
	   //	$this->view->message = \Wnet\Model\Message::findAll($sort, $start, $num);
		//$this->view->message = \Wnet\Model\Message::findAll();	
		//$this->view->res = $customer::findAll();
		$this->view->res = $customer::findById($id, 'id_customer','obj_customers');
		//$this->view->contracts = $customer::findById($id, 'id_customer','obj_contracts');
		$this->view->contracts_services = $customer::findById1($id, $status);
		//var_dump($this->view->res);
		//var_dump($this->view->res[0]->number);
		//$this->view->number = 3;
		$this->view->title = 'СПИСОК ЗАДАЧ';
		$this->view->display('View/index.php');}
		

	 /*   protected function actionOne()
	    {
	    $id = (int)$_GET['id'];
	    $this->view->message = \Wnet\Model\Message::findById($id);
		$this->view->title = 'ЗАДАЧА';
		$this->view->display('View/index.php');}*/

	}
		
		
	    



?>