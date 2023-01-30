<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bodaboda";

$numberplate = $_SESSION['numberplate'];

$dbname= new mysqli($servername, $username, $password,$dbname); 

$result=$dbname->query("SELECT * FROM ownerdetails" );
$rows= mysqli_fetch_array($result);

$nplate1;
if(isset($_GET['nplate']))
{ 
   $nplate1 = $_GET['nplate'];
  // echo $nplate1;
  }


?>

<!DOCTYPE html>
<html>
<head>
	<title>Payment Plan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

form {
  display: inline-block;
 border: 5px solid black;
 padding-top :1%;
 margin-left: 5%;

}
div{
  margin-top: 3%;
  margin-left: 7px;
}

</style>


   </head>
<body>
  <div id="mydiv">
<form action="paymentplan.php" method="post">
  <div class="form-group">
  <input type="text" value="<?php echo $nplate1;?>" name="nplate1" hidden /></td>
  <div class="container">
  <b><h2>Choose a payment plan below:</h2></b>

  <table style="margin-left: 10px;" class="striped-columns border">
 <tbody>                   
<tr>
  <td>Daily</td>
  <td><input type="radio" value="Daily" name="Daily" id="Daily" /></td>
 </tr><br>
 <tr>
 <td>Weekly</td>
 <td><input type="radio" value="Weekly" name="Daily" id="Weekly" /></td>
</tr><br>
 <tr>
  <td>Monthly</td>
 <td><input type="radio" value="Monthly" name="Daily" id="Monthly" /></td>
 </tr>
</tbody>
</table><br>
 <button type="submit" class="btn btn-success" name="submit" id="submit">Submit</button><br>
 
  </div>
 </div>


  <?php
  
  if (isset($_POST['submit'])) {
$PaymentPlan=$_POST['Daily'];
$nplate1 = $_POST['nplate1'];



$sql = "UPDATE ownerdetails SET paymentdetails= '$PaymentPlan' WHERE numberplate='$nplate1'";
  if ($dbname->query($sql) === TRUE) {
    echo '<script>alert("Success! The payment plan has been set")</script>';
    header("Refresh: 0.5; url=pay.php?payplan=$PaymentPlan");
 
} else {
echo "Error: " . $sql . "<br>" . $dbname->error;
echo '<script>alert("Failed. Please try again")</script>';
header("Refresh: 1; url=paymentplan.php");
}
}

?>
</div>

</form>
</body>
</html>
