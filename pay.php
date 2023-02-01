<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bodaboda";
$dbname= new mysqli($servername, $username, $password,$dbname); 
require_once('Lipa-Mpesa.php');


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_GET['payplan']))
{ 
   $Pay = $_GET['payplan'];

     $numplate;
     $numplate = $_GET['np'];
     
    $phonenumber = $_GET['phonenumber'];
   echo $phonenumber;
  }

  //fetch person's ID for pay
	$result=$dbname->query("SELECT `paymentdetails_id` FROM `ownerdetails` WHERE  `numberplate` = '$numplate'" );
	$row= mysqli_fetch_array($result);
	$id = $row['paymentdetails_id'];

  //fetch the amount to pay 
	$result=$dbname->query("SELECT `amount` FROM `paymentamount` WHERE  `id` = '$id'" );
	$rows = mysqli_fetch_array($result);
	$amount= $rows['amount'];


	$accRef="Lipa Ushuru";
	 $access_token = accessTokenGenerator();
	 mpesaSendMoney($phonenumber, $amount, $accRef, $access_token );
	



 	$push = array('telNum' => $phonenumber,'Amount'=>$amount ,'accRef'=>$accRef);
    print_r($push);
   $arr=json_encode($push);

	

 	$url="https://still-scrubland-73108.herokuapp.com/stkPush.php";
 	$curl = curl_init();
 			curl_setopt($curl, CURLOPT_URL, $url);
 			curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

 				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 			  curl_setopt($curl, CURLOPT_POST, true);
 			  curl_setopt($curl, CURLOPT_POSTFIELDS, $arr);

 			  $curl_response = curl_exec($curl);

 			  print_r($curl_response);
 			  echo $curl_response;
 
 



?>