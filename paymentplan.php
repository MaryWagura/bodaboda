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
if(isset($_GET['nplate'])){
    $nplate1 = $_GET['nplate'];
    echo $nplate1;}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Payment Plan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>
	<b><h1>Payment Plan</h1></b>
<form action="paymentplan.php" method="post">
  <div class="form-group">
  <input type="text" value="<?php echo $nplate1;?>" name="nplate1" hidden /></td>
  <div class="container">
    <label for="numberplate"><h3><b>Choose a payment plan</label></b></h3>
    <table style="margin-left: 30px;" class="striped-columns border">
              

                <tbody>
                
                      
                       
                       
                    
                    <tr>
                        <td>Daily</td>
                        <td><input type="radio" value="Daily" name="Daily" /></td>
                       
                       
                    </tr>
                    <tr>
                        <td>Weekly</td>
                        <td><input type="radio" value="Weekly" name="Daily" /></td>
                       
                       
                    </tr>
                    <tr>
                        <td>Monthly</td>
                        <td><input type="radio" value="Monthly" name="Daily" /></td>
                       
                       
                    </tr>
</tbody>
</table>
    <button type="submit" name="submit" id="submit">Submit</button><br>
    <!-- <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label> -->
  </div>
  </div>


  <?php
  
  if (isset($_POST['submit'])) {
$PaymentPlan=$_POST['Daily'];
$nplate1 = $_POST['nplate1'];



$sql = "UPDATE ownerdetails SET paymentdetails= '$PaymentPlan' WHERE numberplate='$nplate1'";
  if ($dbname->query($sql) === TRUE) {
    echo "The payment plan has been set ";
    // header('Location:payment.php');
 
} else {
    echo "Error: " . $sql . "<br>" . $dbname->error;
    // header('Location:payment.php');
}
}

?>


</form>
</body>
</html>
