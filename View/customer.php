<?php

if($id==null && $status==null){
  echo "Выберите пользователея";
}
else{
$contracts_services_title;
if($res->num_rows!=0){
while ($customer = $res->fetch_object()){
    if(!empty($customer->id_customer) || !empty($customer->name_customer)){
  echo '
<table>
      <tr>
         <td colspan=2><b>информация про клиента:'.$customer->id_customer.'</b></td>
       </tr>
       <tr>
         <td >название клиента:</td>
        <td >'.$customer->name_customer.'</td>
       </tr>
       <tr>
         <td >компания:</td>
        <td >'.$customer->company.'</td>
       </tr>';
       while ($contracts_services_ = $contracts_services->fetch_object()){
        if($contracts_services_->title_service){
          $contracts_services_title=$contracts_services_title.$contracts_services_->title_service.'<br>';
        }
        echo'
       <tr>
         <td colspan=2><b>информация про договор:'.$contracts_services_->id_contract.'</b></td>
       </tr>
      <tr>
         <td >номер договора:</td>
        <td >'.$contracts_services_->number.'</td>
       </tr>
       <tr>
         <td >дата подписания:</td>
        <td >'.$contracts_services_->date_sign.'</td>
       </tr>
       <tr>
         <td colspan=2><b>информация про сервисы:</b></td>
       </tr>';
  }
      echo '</table>';
      echo $contracts_services_title;
       }
}
   
   
  }
  

  else{
echo "Пользователь не существует";
      }


    
}
    ?>

