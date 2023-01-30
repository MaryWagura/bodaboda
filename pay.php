<?php


session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bodaboda";


$payamount;
if(isset($_GET['payplan']))
{ 
   $payamount= $_GET['payplan'];
    //echo $payamount;
  }

  if ($payamount == "Daily")
  {
   echo '<script>alert("you shall pay KSH100")</script>';
   header("Refresh: 0.5; url=phonenumber.php");
 
   
  }elseif ($payamount == "Weekly")
  {
   echo '<script>alert("you shall pay KSH700")</script>';
   header("Refresh: 0.5; url=phonenumber.php");
  }else 
  {
   echo '<script>alert("you shall pay KSH3,000")</script>';
   header("Refresh: 0.5; url=phonenumber.php");

  }



?>