<?php 

require_once "config.php";
require_once LIB_BASE."users.class.php";

$u = new users();
/*****test*****/
//$mode = 'display_post';
//$fhid = '3';
//$lat = '13.8569991624617';
//$long = '100.6189623206482';
//$fbplaceid = 132901770097049;
/*****test*****/

$mode = $_POST["mode"];

switch($mode){
	case "count" : {
		$id = $_POST["id_ads"];		
		$u->postDataAds($id);
	}
	break;
	case "add_user" : {
		$name = $_POST["user_name"];		
		$age = $_POST["user_age"];		
		$mobile = $_POST["user_mobile"];		
		$email = $_POST["user_email"];		
		$car_type = $_POST["user_car_type"];		
		$ads = $_POST["id_ads"];		
		$u->postDataUsers($name,$age,$mobile,$email,$car_type,$ads);
	}
	break;
}
	
?>