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

		/* $this->view->obj_contracts = $customer::create_data_base('wnet');

		$this->view->obj_contracts = $customer::create_table('obj_contracts', 'id_contract int(11)', 'id_customer int(11)', 'number varchar(100)', 'date_sign date', 'staff_number varchar(100)', 'id_contract');

		$this->view->obj_customers = $customer::create_table('obj_customers', 'id_customer int(11)', 'name_customer varchar(250)', 'company enum(company_1,company_2,company_3)', 'id_customer');

		$this->view->obj_services = $customer::create_table('obj_services', 'id_service int(11)', 'id_contract int(11)','title_service varchar(250)', 'status enum(work, connecting, disconnected)', 'id_service');*/

		//$this->view->obj_services_insert = $customer::insert_table('obj_services', '("id_contract", "title_service", "status")', 'VALUES (20, "title", "disconnected")');
		$this->view->obj_services_insert = $customer::insert_table();

		$this->view->id = $id;

		$this->view->status = $status;

		$this->view->res = $customer::findById($id, 'id_customer','obj_customers');

		$this->view->contracts_services = $customer::findById1($id, $status);

		$this->view->title = 'СПИСОК КЛИЕНТОВ';

		$this->view->display('View/index.php');}


	}
		
		
	    



?>