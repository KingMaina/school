<?php 
$servername="localhost";
$username ="root";
$password="";
$mydatabase="school";

$name=$_POST['username'];
$passward=$_POST['password'];
$connection = new mysqli($servername,$username,$password,$mydatabase);
if (!$connection) {
	# code...
	die("Connection failed ".mysqli_connect_error());
}
// insert int othe name of your database
$sql="INSERT INTO users(username,password) VALUES('$name','$password')";
if (mysqli_query($connection,$sql)) {
	echo "New user added";
} else {
	echo "Error " .$sql ."<bt>" .msqli_error($connection);
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	form{
  		margin-left: 30%;
  	}
  	input[type=text],input[type=email],input[type=password]{
	  	border-radius: 15px;
	  	width: 300px;
	  	height: 27px;
	  	font-size: 25px;
	  	font-family: ani;
  	}
  </style>
</head>
<body>
	<div class="well well-lg">
		<div class="form-group">
			<form action="insert.php" method="POST">
					USERNAME:<br>
					<input type="text" name="username" placeholder="Enter username"><br><br>
					PASSWORD:<br>
					<input type="password" name="password" placeholder="Enter password "><br><br>
					<input type="submit" name="submit" value="SUBMIT" class="btn btn-info">
					<input type="reset" name="reset" value="reset" class="btn btn-danger">
			</form>
		</div>
	</div>
</body>
</html>