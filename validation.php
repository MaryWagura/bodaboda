<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bodaboda";
session_start();
if (isset($_POST['submit'])) {
  $numberplate=$_POST['numberplate'];


$dbname= new mysqli($servername, $username, $password,$dbname); 
$result=$dbname->query("SELECT `numberplate` FROM `ownerdetails` WHERE  `numberplate` = '$numberplate'" );
$row= mysqli_fetch_array($result);

if(mysqli_num_rows($result) == 1){
  //echo "Record Found of  ".$row['numberplate'] ;
  echo '<script>alert("Success!")</script>';
  header("Refresh: 0.5; url=paymentplan.php?nplate=$numberplate");
}else{
  echo '<script>alert("Failed. The number plate does not exist!")</script>';
  header("Refresh: 0.2; url=dial.html");
}

}




  ?>