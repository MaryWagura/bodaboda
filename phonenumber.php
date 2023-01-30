<?php

$nplate1;
if(isset($_GET['payplan']))
{ 
   $np = $_GET['np'];
  // echo $nplate1;
  }


?>



<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

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
div{
  margin-top: 5%;
  margin-left: 7px;
}



</style>

 </head>

 
<body>
<div id= mydiv>


<form action="push.php" method="post" id ="thisform">
  <div class="form-group">
  <b><h2>Kindly input your phone number:</h2></b>
    <input type="text" value="<?php echo $payplan1;?>" name="payplan1" hidden /></td>
    <input type="text" value="<?php echo $np;?>" name="np" hidden /></td>



 <input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="07" required> <br><br>
   
<button type="submit" class="btn btn-info" name="pay" id="pay" >Pay</button><br>

 

  </div>
 
</form>
</div>

</body>
</html>
