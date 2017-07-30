<?php +
require_once('employer.php');
$emp=new Employer("Ivanova","Katya","Andreevna",-5);
//$emp->surname="";
//$emp->name="";
//$emp->patronymic="";
//if(!$emp->set_age(56)){
//	exit('age error!');
//}
echo $emp->get_full_info();
echo $emp->get_ids('asd');




