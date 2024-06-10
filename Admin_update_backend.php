<?php 
	session_start();
	include "functions.php";
	//checking the inputs and save to variable-->
	if (isset($_POST['update'])) {
		$username = $_SESSION['username'];
		$oldpassword = $_POST['oldpassword'];
		$newpassword = $_POST['newpassword'];
		$confirmpassword = $_POST['confirmpassword'];
//checking passward error-->
	if (passwardMatch($newpassword,$confirmpassword) == false) {
 		header("location: Admin_update.php?error=passwordMissMatch");
 		exit();
 	}

 	$usernameexist = usernameexist($conn, $username);

	$hashedpassword = $usernameexist["password"];
	$checkpassword = password_verify($oldpassword, $hashedpassword);
//checking password
	if ($checkpassword == false) {
		header("location: Admin_update.php?error=wrongpassword");
 		exit();
	}
	else if ($checkpassword == true) {

		$hashedpass = password_hash($newpassword, PASSWORD_DEFAULT);  //hashing new password
		$sql = "UPDATE admins SET password = '$hashedpass' WHERE username = '$username';"; 
		$result = mysqli_query($conn, $sql); // update sql exicution
		header("location: Admin_manager.php");
 		exit();
	}
}
