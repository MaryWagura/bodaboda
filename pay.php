<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
   header("Refresh: 0.5; url=dial.php");
 
   
  }elseif ($payamount == "Weekly")
  {
   echo '<script>alert("you shall pay KSH700")</script>';
   header("Refresh: 0.5; url=dial.php");
  }else 
  {
   echo '<script>alert("you shall pay KSH3,000")</script>';
   header("Refresh: 0.5; url=dial.php");

  }


 
//  if (isset($_GET['submit'])) {
//     $PaymentPlan=$_GET['Daily'];
//     $PaymentPlan=$_GET['Weekly'];
//     $PaymentPlan=$_GET['Monthly'];
//     $nplate1 = $_GET['nplate1'];
//  }





?>