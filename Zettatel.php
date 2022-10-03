<?php

/**
 * Twilio SMS Gateway
 * @author snawaze
 */
 
function gatewaySend($phone, $message, &$system)
{
/**
* Implement sending here
* @return bool:true
* @return bool:false
*/

$url = "https://sendsms.domain.tld/SMSApi/send";

$curl = curl_init();

$user_id = ""; //Your User ID Here
$pass = "";		//Your User Password Here
$sender_id = ""; //Sender ID
$type = "";		//Type
$dupc = ""; //Duplicate Check value here
$output = ""; // Output
$smethod = "";  // Send method

curl_setopt_array($curl, array(
	CURLOPT_URL => $url,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'POST',
	CURLOPT_POSTFIELDS => array('userid' => $user_id, 'password' => $pass, 'mobile' => $phone, 'msg' => $message, 'sender_id' => $sender_id, 'type' => $type, 'duplicatecheck' => $dupc, 'output' => $output, 'sendMethod' => $smethod),
	CURLOPT_HTTPHEADER => array(),
));

$response = curl_exec($curl);
curl_close($curl);
return $response;

}
