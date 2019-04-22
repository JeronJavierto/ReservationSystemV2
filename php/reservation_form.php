<?php
	include('DBConnector.php');

	$DepOrg = mysqli_real_escape_string($conn, $_REQUEST['DepOrg']);
	$Event = mysqli_real_escape_string($conn, $_REQUEST['Event']);
	$Venue = mysqli_real_escape_string($conn, $_REQUEST['Venue']);
	$Date = mysqli_real_escape_string($conn, $_REQUEST['Date']);
	$TimeStart = mysqli_real_escape_string($conn, $_REQUEST['TimeStart']);
	$TimeEnd = mysqli_real_escape_string($conn, $_REQUEST['TimeEnd']);

	$insertQuery = "INSERT INTO reservation (DepOrg, Event, Venue, Date, TimeStart, TimeEnd) VALUES ('$DepOrg', '$Event', '$Venue', '$Date', '$TimeStart', '$TimeEnd')";

	if ($conn->query($insertQuery) === TRUE) {
	    echo "Reservation Complete";
	} else {
	    echo "Error: " . $insertQuery . "<br>" . $conn->error;
	}

	$conn->close();
?>