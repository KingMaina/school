<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<form action="login.php" method="post">
	<?php include ('errors.php');?>
	<label>USERNAME</label>
	<input type="text" name="username">
	<label>PASSWORD</label>
	<input type="password" name="password">
	<button type="submit" name="login_user">LOGIN</button><br>
	<input type="checkbox" name="checkbox" value="" checked>Remember me<br>
	<p>Don't have an account?Click to register
	<a href="register.php">Register</a></p>
</form>
</body>
</html>