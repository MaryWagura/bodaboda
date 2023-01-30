<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bodaboda";
 
 if (isset($_GET['submit'])) {
    $PaymentPlan=$_GET['Daily'];
    $PaymentPlan=$_GET['Weekly'];
    $PaymentPlan=$_GET['Monthly'];
    $nplate1 = $_GET['nplate1'];
 }





?>