<?php  
session_start();
$username="";
$errors=array();
$connect=mysqli_connect('localhost','root','','registration');
if (isset($_POST['reg_user'])){
	$username=mysqli_real_escape_string($connect,$_POST['username']);
	$password=mysqli_real_escape_string($connect,$_POST['password']);
	$pwd=mysqli_real_escape_string($connect,$_POST['pwd2']);
	//form validation 
	if (empty($username)){
		array_push($errors,"Username is required");
	}
	// if (empty($email)){
	// 	array_push($errors,"Email is required");
	// }
	if (empty($password)){
		array_push($errors,"Password required");
	}
	// if ($pwd1 !=$pwd2){
	// 	array_push($errors,"Password Mismatch");
	// }
	//check if user exists
	$check_user="SELECT * FROM users WHERE username='$username' LIMIT 1";
	$result=mysqli_query($connect,$check_user);
	$user=mysqli_fetch_assoc($result);
	if ($user){
		if ($user['username']===$username){
			array_push($errors,"Username exists");
		}
		if ($user['email']===$email){
			array_push($errors,"Email already exists");
		}
	}
	//go ahead to register users if there is no error
	if (count($errors)===0){
		//md5 will be used for encryption before saving on database
		$password=md5($password);
		//query statement to insert into
		$qq="INSERT INTO users(username,email,password)
			VALUES ('$username','$email',$password)";
		mysqli_query($connect,$qq);
		$_SESSION['username']=$username;
		$_SESSION['success']="Successful signup";
		header('location:index.php');
	}
}
//login
if (isset($_POST['login_user'])){
	$username=mysqli_real_escape_string($connect,$_POST['username']);
	$password=mysqli_real_escape_string($connect,$_POST['password']);
	if (empty($username)){
		array_push($errors,"Input username");
	}
	if (empty($password)){
		array_push($errors,"Input password");
	}
	if (count($errors)==0){
		$password=md5($password);
		$qq="SELECT * FROM users WHERE username='$username' AND 
			password='$password'";
		$result=mysqli_query($connect,$qq);
		if (mysqli_num_rows($result)==1){
			$_SESSION['username']=$username;
			$_SESSION['success']="Login successful";
			header('location:entry.php');
		}
		else{
			array_push($errors,"Wrong password or username");
		}
	}
}
?>