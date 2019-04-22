<?php
	include('DBConnector.php');

	$Fname = mysqli_real_escape_string($conn, $_REQUEST['FName']);
	$Lname = mysqli_real_escape_string($conn, $_REQUEST['LName']);
	$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
	$org = mysqli_real_escape_string($conn, $_REQUEST['organization']);
	$pos = mysqli_real_escape_string($conn, $_REQUEST['position']);
	$password = mysqli_real_escape_string($conn, $_REQUEST['Password']);
	$ConPassword = mysqli_real_escape_string($conn, $_REQUEST['ConPassword']);

	$password = md5($password);
	$ConPassword = md5($ConPassword);

	$insertQuery = "INSERT INTO accounts (User_type, First_name, Last_name, email, Organization, Position, Password) VALUES ('client', '$Fname', '$Lname', '$email', '$org', '$pos', '$password')";
	

	$email2= "SELECT * FROM accounts where email = '".$_POST['email']."'";
	$message = "Email already taken";
	$failPass = "Passwords didn't match";


	if($result=mysqli_query($conn,$email2)){

		if(mysqli_num_rows($result)>0){
			// header("location: ../index.html");
			echo "<script type='text/javascript'>alert('$message');
				window.location.href='../index.html';
			</script>";



		}elseif ($password != $ConPassword){			
			echo "<script type='text/javascript'>window.alert('Passwords do not match');
				window.location.href='../index.html';
			</script>";		
				
		}

		elseif (mysqli_query($conn, $insertQuery)) {
			echo "<script type='text/javascript'>alert('User successfully Created');
			window.location.href='../pages/client/home_client.php';</script>";
		}
	}
		
?>