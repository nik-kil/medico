<?php

	include_once('db.php');
	

	//$mobno=$_REQUEST['mobno'];
	//$code="DVG".rand( 2000,32767 )."RTO";
	$message=$_REQUEST['message'];

	$sql="select * from signup";
	$res=execute( $sql );
	
	$mobno="";
	
	while( $row=$res->fetch_object() )
	{
	$mobno=$mobno."$row->mobno,";
	}
	
	$mobno=rtrim($mobno,',');
	echo $mobno;
	//$mobno="7676193183,9036062632,";
	
//session_start();
    
//$_SESSION['veri']=$code;
//$_SESSION['mobno']=$mobno;


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?sender=EPROVS&route=4&mobiles=$mobno&authkey=190530AjBC5Jv2N5b1e0e39&country=91&message=$message",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  
  echo "sent";
}

?>