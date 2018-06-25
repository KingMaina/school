<!DOCTYPE html>
<html>
<head>
	<title></title>
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
  	table{
  		border-color: black;
  		border-width: 2px;
  		border: solid;
  		width: 100%;
  		border-collapse: collapse;
  	}
    body{
    	background-color: lightblue;
    }
    table:hover{
    	color: green;
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
					<li><a href="parent.php">Parent's Portal</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div>
		<div>
			<h3>FEE SRUCTURE</h3>
			<p>Fee structure for the term is as discussed during the AGM Meetings:</p>
			<table>
				<tr>
					<th>Form</th>
					<th>Term</th>
					<th>Fees</th>
				</tr>
				<tr>
					<td>1</td>
					<td>One</td>
					<td>KES 32,000</td>
				</tr>
				<tr>
					<td>2</td>
					<td>One</td>
					<td>KES 30,000</td>
				</tr>
				<tr>
					<td>3</td>
					<td>One</td>
					<td>KES 28,000</td>
				</tr>
				<tr>
					<td>4</td>
					<td>One</td>
					<td>KES 35,000</td>
				</tr>
			</table>
			<blockquote><i>Fees for form four students is inclusive of the end of year trip to Mombasa.</i></blockquote>

		</div>
		<p>Get your student's results here:</p>
<?php 
$servername="localhost";
$username ="root";
$password="";
// under database name write the name of your database
$mydatabase="school";
$connection=mysqli_connect($servername,$username,$password,$mydatabase);
// check connection
if (mysqli_connect_errno()) {
	# code...
echo "Failed to connect to MySQL: " .mysql_connect_error();
}
$result=mysqli_query($connection,"SELECT * from scores");
echo "<table>
		<tr>
			<th>Username</th>
			<th>English</th>
			<th>Kiswahili</th>
			<th>Sciences</th>
			<th>History</th>
			<th>Geography</th>
		</tr>";
while($row=mysqli_fetch_assoc($result))
	extract($row);
{
	echo "<tr>";
	echo "<td> " .$name ."</td>";
	echo "<td> " .$English."</td>";
	echo "<td> " .$Kiswahili ."</td>";
	echo "<td> " .$Sciences ."</td>";
	echo "<td> " .$History ."</td>";
	echo "<td> " .$Geography ."</td>";
	echo "</tr>";
}
echo "</table>";
	mysqli_close($connection);

 ?>
	</div>
<hr>
	<footer>
		<strong>Follow our pages below</strong>
		<a href=""><img src=""></a>
		<a href=""><img src=""></a>
		<a href=""><img src=""></a>
		<br> 
		<p>Naturing Your Success</p>
		<p>All rights Reserved</p>
	</footer>
</body>
</html>