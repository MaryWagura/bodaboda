<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bodaboda";

// $numberplate = $_SESSION['numberplate'];

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
 margin-top:10%;
 width:40%;
margin-left:450px;
border-radius: 25px;


}


</style>


   </head>
<body>
  <div id="mydiv">
<form action="paymentplan.php" method="post">
  <div class="form-group">
  <input type="text" value="<?php echo $nplate1;?>" name="nplate1" hidden /></td>

  <b><h3  style="margin-left: 40px">Choose a payment plan below:</h3></b><br>
  <table style="margin-left: 40px;" class="striped-columns border">
<tr>
  <td>Daily</td>
  <td><input type="radio" value="1" name="Daily" id="Daily" /></td>
  </tr>
 <tr>
 <td>Weekly</td>
 <td><input type="radio" value="2" name="Daily" id="Weekly" /></td>

</tr>
 <tr>
  <td>Monthly</td>
  <td><input type="radio" value="3" name="Daily" id="Monthly" /></td>
 </tr>
</tbody>
</table>
<br>
 <button  style="margin-left: 40px" type="submit" class="btn btn-success" name="submit" id="submit">Submit</button><br>
 

 </div>




  <?php
  
  if (isset($_POST['submit'])) {
$PaymentPlan=$_POST['Daily'];
$nplate1 = $_POST['nplate1'];



$sql = "UPDATE ownerdetails SET paymentdetails_id= '$PaymentPlan' WHERE numberplate='$nplate1'";
  if ($dbname->query($sql) === TRUE) {
    echo '<script>alert("Success! The payment plan has been set")</script>';
    header("Refresh: 0.5; url=phonenumber.php?payplan=$PaymentPlan&np=$nplate1");
 
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
