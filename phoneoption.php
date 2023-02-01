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

//to fetch the payment plan chose 
$Pay;
if(isset($_GET['payplan']))
{ 
   $Pay = $_GET['payplan'];
   //echo $Pay;
  }
//to fetch the number plate
  $numplate;
  if(isset($_GET['np']))
  { 
     $numplate = $_GET['np'];
     // echo $numplate;
    } 

    //to fetch the current phone number 
  $phonenumber;
if(isset($_GET['current_num']))
{ 
   $phonenumber = $_GET['current_num'];
  //  echo $phonenumber;
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

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');

input {
  caret-color: red;
}

body {
  margin: 0;
  width: 100vw;
  height: 100vh;
  background: #ecf0f3;
  display: flex;
  align-items: center;
  text-align: center;
  justify-content: center;
  place-items: center;
  overflow: hidden;
  font-family: poppins;
}

.container {
  position: relative;
  width: 350px;
  height: 500px;
  border-radius: 20px;
  padding: 40px;
  box-sizing: border-box;
  background: #ecf0f3;
  box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
}

.brand-logo {
  height: 100px;
  width: 100px;
  background: url("https://img.icons8.com/color/100/000000/twitter--v2.png");
  margin: auto;
  border-radius: 50%;
  box-sizing: border-box;
  box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px white;
}

.brand-title {
  margin-top: 10px;
  font-weight: 900;
  font-size: 1.8rem;
  color: #000000;
  letter-spacing: 1px;
}

.inputs {
  text-align: left;
  margin-top: 30px;
}

label, input, button {
  display: block;
  width: 100%;
  padding: 0;
  border: none;
  outline: none;
  box-sizing: border-box;
}

label {
  margin-bottom: 4px;
}

label:nth-of-type(2) {
  margin-top: 12px;
}

input::placeholder {
  color: gray;
}

input {
  background: #ecf0f3;
  padding: 10px;
  padding-left: 20px;
  height: 50px;
  font-size: 14px;
  border-radius: 50px;
  box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
}

button {
  color: white;
  margin-top: 20px;
  background: #1DA1F2;
  height: 40px;
  border-radius: 20px;
  cursor: pointer;
  font-weight: 900;
  box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
  transition: 0.5s;
}

button:hover {
  box-shadow: none;
}

a {
  position: absolute;
  font-size: 8px;
  bottom: 4px;
  right: 4px;
  text-decoration: none;
  color: black;
  background: yellow;
  border-radius: 10px;
  padding: 2px;
}

h1 {
  position: absolute;
  top: 0;
  left: 0;
}
</style>


   </head>
<body>
<form action="" method="post" id ="thisform">
<input type="text" value="<?php echo $numplate;?>" name="numplate" hidden /></td>
<input type="text" value="<?php echo $currentnum;?>" name="currentnum" hidden /></td>
<input type="text" value="<?php echo $payplan1;?>" name="payplan1" hidden /></td>
<input type="text" value="<?php echo $np;?>" name="np" hidden /></td>

<div class="container">
   <img src="bike.jpg" alt="Workplace" usemap="#workmap" width="150" height="80">

    <div class="brand-title">Boda Boda</div>
    <div class="inputs">
      <label>Do you wish to pay with the current number? </label>
      <table style="margin-left: 40px;" class="striped-columns border">
<tr>
  <td>Yes</td>
  <td><input type="radio" value="1" name="Daily" id="Daily" required /></td>
  </tr>
 <tr>
 <td>No </td>
 <td><input type="radio" value="2" name="Daily" id="Weekly" required /></td>
</tr>
 
</tbody>
</table>
    </div>
    <button  type="submit" class="btn btn-info" name="submit" id="submit">Submit</button><br>


  </div>
</form>  
 </div>
  <?php
  
  if (isset($_POST['submit'])) {
$PaymentPlan=$_POST['Daily'];
$numplate = $_POST['numplate'];



if ($PaymentPlan == 1)
{

    header("Refresh: 0.5; url=pay.php?payplan=$Pay&np=$numplate&phonenumber=$phonenumber");
}else 
{
    header("Refresh: 0.5; url=new_phonenumber.php?payplan=$Pay&np=$numplate");

}


}

?>
</div>

</form>
</body>
</html>
