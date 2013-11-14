<?php
/**
 * Sms
 * @access public
 * @author Mr.GRITSAKORN  VULLIYAMATEE <raider_ex@live.com>
 * @copyright Copyright (c) 2013, Charoensarp
 * @package Service Human Fence
 * @property string $db_options option of Pear database connection
 */

Class Sms{
     
	 /**	 
	 * ส่ง sms
	 * @param mobile
	 * @return -
	 * @access public
	 */	
	 function sendSMS($mobile){
	 		$username = "apricot";
			$password = "437923";
			$msisdn = $mobile;
			$sender = "mySTAR";
			$ScheduledDelivery = '';

			$message = "Thank you for registration. Please keep the SMS for lucky draw and more privilege while financing Mercedes-Benz via mySTAR. For more info. contact 02 614 8500.";
			
			$url = "http://www.thaibulksms.com/sms_api.php";
			$data_string = "username=$username&password=$password&msisdn=$msisdn&message=$message&sender=$sender&ScheduledDelivery=$ScheduledDelivery";
			
			$agent = "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.4) Gecko/20030624 Netscape/7.1 (ax)";
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_USERAGENT, $agent);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
			$result = curl_exec ($ch);
			echo 'test sms :'.$result;
			curl_close ($ch);
	 }
}
?>
