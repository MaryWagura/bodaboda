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

.numberplate{
  border-radius: 20px;

}



</style>

 </head>

 
<body>
<div id= mydiv>
<form action="validation.php" method="post" id ="thisform">
  <div class="form-group">
  <b><h2 style="margin-left: 20px">Kindly input your numberplate below:</h2></b><br>
  
  <input style="margin-left: 2px" type="text" class="form-control" name="numberplate" id="numberplate" placeholder="numberplate" required> <br><br>

<button style="margin-left: 30px" type="submit" class="btn btn-primary" name="submit" id="submit" >Submit</button><br>
 

  </div>

 
</form>
</div>

</body>
</html>
