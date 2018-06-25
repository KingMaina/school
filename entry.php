<?php 
$servername="localhost";
$username ="root";
$password="";
$mydatabase="school";

$name=$_POST['name'];
$English=$_POST['English'];
$Kiswahili=$_POST['Kiswahili'];
$Sciences=$_POST['Sciences'];
$History=$_POST['History'];
$Geography=$_POST['Geography'];
$connection = new mysqli($servername,$username,$password,$mydatabase);
if (!$connection) {
	# code...
	die("Connection failed ".mysqli_connect_error());
}
// insert into the name of your database
$sql="INSERT INTO scores(name,English,Kiswahili,Sciences,History,Geography) VALUES('$name','$English','$Kiswahili','$Sciences','$History','$Geography')";
if (mysqli_query($connection,$sql)) {
	echo "New scores added";
} else {
	echo "Error " .$sql ."<bt>" .msqli_error($connection);
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>SCORES</title>
	<title>Teacher's Portal</title>
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
  	footer{
  		text-align: center;
  	}
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Webuye</a>
			</div>
			<div>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="teacher.php">Teacher's Portal</a></li>
				</ul>
			</div>
		</div>
	</nav>
<div>
	<h3>Enter student results</h3>
	<form action="entry.php" method="POST">
		<fieldset>
			Student name: <br>
			<input type="text" name="name" placeholder="Enter student name here" required=""><br>
			English: <br>
			<input type="text" name="English" placeholder="Enter scores here" required=""><br>	Kiswahili: <br>
			<input type="text" name="Kiswahili" placeholder="Enter scores here" required=""><br>Sciences: <br>
			<input type="text" name="Sciences" placeholder="Enter scores here" required=""><br>	History: <br>
			<input type="text" name="History" placeholder="Enter scores here" required=""><br>	Geography: <br>
			<input type="text" name="Geography" placeholder="Enter scores here" required=""><br>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
</div>
</body>
</html>