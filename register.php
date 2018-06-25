<?php include ('server.php'); ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>MY Registration Form</title>
 </head>
 <body>
 <form action="register.php" method="post">
 	<?php include ('errors.php');?>
 	<label>Username</label>
 	<input type="text" name="username" value="<?php echo $username;?>"><br>
 	<label>Email</label>
 	<input type="email" name="email" value="<?php echo $email;?>">
 	<label>Password</label>
 	<input type="password" name="pwd1">
 	<label>Confirm Password</label>
 	<input type="password" name="pwd2">
 	<button type="submit" name="reg_user">Register</button>
 	<p>Already have an account?<a href="login.php">Login</a></p>
 </form>
 </body>
 </html>