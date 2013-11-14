<?php
/**
 * Users
 * @access public
 * @author Mr.GRITSAKORN  VULLIYAMATEE <raider_ex@live.com>
 * @copyright Copyright (c) 2013, Charoensarp
 * @package Service Human Fence
 * @property string $db_options option of Pear database connection
 */

Class Users{
     
	 /**	 
	 * เพิ่มข้อมูล Ads
	 * @param -
	 * @return -
	 * @access public
	 */	
	 function postDataAds($id){
	 		 require_once "dbi.class.php";
			 $db = new dbi();
			 
			 $count = 0;
			 	
	 		 $db->clear();
			 $db->addfield("count");
		     $db->addcon("id", "=", $id);
		     $db->table="ads";
			 
			 //echo $db->query2();exit();
			 if ($db->query()) {
	             if ($row = $db->getrow()) {
	             	 $count = $row["count"];
	             }
			 }
			 
			 $db->clear();
	         $db->dict["count"] = $count + 1;
			 $db->dict["update_at"] = date("Y-m-d H:i:s");
	   		 $db->addcon("id", "=", $id);
			 $db->table = "ads";

        	 $db->update();
			 
			 $db->close();

			 echo '{"status":"complete"}';	
	 }
	 
	 /**	 
	 * เพิ่มข้อมูล users
	 * @param -
	 * @return -
	 * @access public
	 */	
	 function postDataUsers($name,$age,$mobile,$email,$car_type,$ads){
	 		 require_once "dbi.class.php";
			 require_once "sms.class.php";
			 $db = new dbi();
			 $s = new sms();
			 
			 $db->clear();
			 $db->dict["name"] = $name;
	         $db->dict["age"] = $age;
			 $db->dict["mobile"] = $mobile;
	         $db->dict["email"] = $email;
			 $db->dict["car_type"] = $car_type;
			 $db->dict["ads"] = $ads;
			 $db->dict["create_at"] = date("Y-m-d H:i:s");
	   
			 $db->table = "users";

        	 $id = $db->insertiden(); 
			 
			 $s->sendSMS($mobile);
			  
			 echo '{"status":"add data complete"}';	
	 }
}
?>
