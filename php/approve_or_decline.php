<?php
	include('DBConnector.php');	


	$user_check = $_SESSION['IDres'];
	   
	$ses_sql = mysqli_query($conn,"SELECT * FROM reservation WHERE resID = '$user_check'");
	   
	$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	   
	$login_session = $row['resID'];
	


	if(isset($_POST["Approve"])){
		$approve = "UPDATE reservation SET status = 'Approved' WHERE resID = '$login_session'";
		if (mysqli_query($conn, $approve)) {
		    echo "Record updated successfully";
		} else {
		    echo "Error updating record: " . mysqli_error($conn);
		}

		mysqli_close($conn);
	}elseif(isset($_POST["Decline"])){
		$decline = "DELETE FROM reservation WHERE resID = '$login_session'";
		if (mysqli_query($conn, $decline)) {
		    echo "Deleted";
		} else {
		    echo "Error updating record: " . mysqli_error($conn);
		}
	}
?>
