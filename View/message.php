<?php
//var_dump($res);
//echo $title;
//echo $number;
//if(isset($res->fetch_object())){
//  echo "Пользователь не существует";
//}
//else{
if($res->num_rows!=0){
while ($row = $res->fetch_object()){
    if(!empty($row->id_customer) || !empty($row->name_customer)){
  echo '
<table>
      <tr>
         <td colspan=2><b>информация про клиента:'.$row->id_customer.'</b></td>
       </tr>
       <tr>
         <td >название клиента:</td>
        <td >'.$row->name_customer.'</td>
       </tr>
       <tr>
         <td >компания:</td>
        <td >'.$row->company.'</td>
       </tr>
       <tr>
         <td colspan=2><b>информация про договор:'.$number.'</b></td>
       </tr>
      <tr>
         <td >номер договора</td>
        <td >[ number]</td>
       </tr>
       <tr>
         <td >дата подписания</td>
        <td >[ date_sign]</td>
       </tr>
       <tr>
         <td colspan=2><b>информация про сервисы'.$row->date_sign.'</b></td>
       </tr>
       <tr>
         [services_name]
        <!-- в services_name вывести название сервисов через'.$row->staff_number.' <br> --> 
      </tr>
    </table>';}
   // $row->close();
   
  }
  }

  else{
echo "Пользователь не существует";
      }

//}
    ?>

