<?php 
	include "functions.php";

	if (isset($_POST['login'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		$_SESSION['email'] = $email;
	}

	else{
		header("location: user_login.php");
	}
  
	$emailexist = emailexist($conn, $email);
//user id check if exist or not
	if ($emailexist == false) {
		header("location: user_login.php?error=emailexist");
 		exit();
	}

	$hashedpassword = $emailexist["password"]; //geting the hashed password frome database and matching with the given password
	$checkpassword = password_verify($password, $hashedpassword);

	if ($checkpassword == false) {
		header("location: user_login.php?error=wrongpassword");
 		exit();
	}
	else if ($checkpassword == true) {
		session_start();
		$_SESSION['email'] = $email; //saving the uername in a Session variable 
		header("location: index.php");
 		exit();
	}