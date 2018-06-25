<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Parent's Portal</title>
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
					<li><a href="#">Parent's Portal</a></li>
					<li><a href="teacher.php">Teacher's Portal</a></li>
				</ul>
			</div>
		</div>
</nav>
	<div class="jumbotron">
		<p>Here you can view and track your student's progress at Webuye.Simply Login below</p>
	</div>
	<div class="form">
		<form action="parent.php" method="POST">
			<?php include('errors.php');?>
			<fieldset>
				<p><i>Please input details below</i></p>
				Student's name:<br>
				<input type="text" name="username" placeholder="Enter username here"><br>
				Password: <br>
				<input type="password" name="password" placeholder="Enter password here"><br>
				<button type="submit" name="login_user"><a href="results.php">Login</a></button>
				<input type="checkbox" name="checkbox" value="">Remember me
			</fieldset>
		</form>
	</div>
	<hr>
	<footer>
		<strong>Follow our pages below:</strong>
		<a href=""><img src=""></a> 
		<a href=""><img src=""></a> 
		<a href=""><img src=""></a>
		<br> 
		<p>Naturing Your Success</p>
		<p>All rights Reserved</p>
	</footer>
</body>
</html>