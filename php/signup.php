<?php
	include('DBConnector.php');

	$Fname = mysqli_real_escape_string($conn, $_REQUEST['FName']);
	$Lname = mysqli_real_escape_string($conn, $_REQUEST['LName']);
	$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
	$org = mysqli_real_escape_string($conn, $_REQUEST['organization']);
	$pos = mysqli_real_escape_string($conn, $_REQUEST['position']);
	$password = mysqli_real_escape_string($conn, $_REQUEST['Password']);
	$ConPassword = mysqli_real_escape_string($conn, $_REQUEST['ConPassword']);

	$insertQuery = "INSERT INTO client (First_name, Last_name, email, Organization, position, password) VALUES ('$Fname', '$Lname', '$email', '$org', '$pos', '$password')";

	if ($password == $ConPassword) {
		# code...
		// header("location: ../pages/admin/home_admin.php");
		echo(password_hash($password, PASSWORD_BCRYPT));
		
		// include("../")
		if (mysqli_query($conn, $insertQuery)) {
			# code...			
		}else{
			echo (mysqli_connect_error());
		}
	}else{
		echo("Password didn't matched");
	}
?>