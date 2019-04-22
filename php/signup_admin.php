<?php
include('DBConnector.php');

$fname = mysqli_real_escape_string($conn, $_REQUEST['admin_FName']);
$lname = mysqli_real_escape_string($conn, $_REQUEST['admin_LName']);
$email = mysqli_real_escape_string($conn, $_REQUEST['admin_email']);
$office = mysqli_real_escape_string($conn, $_REQUEST['admin_Office']);
$password = mysqli_real_escape_string($conn, $_REQUEST['admin_Password']);
$ConPassword = mysqli_real_escape_string($conn, $_REQUEST['admin_ConPassword']);

$password = md5($password);
$ConPassword = md5($ConPassword);

$insertQuery = "INSERT INTO accounts (user_type, First_name, Last_name, email, Office, Password) VALUES ('admin', '$fname', '$lname', '$email', '$office', '$password')";

$email2= "SELECT * FROM accounts where email = '".$_POST['admin_email']."'";
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
			window.location.href='../pages/admin/home_admin.php';</script>";
		}
	}
		
?>
