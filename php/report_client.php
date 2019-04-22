<?php
include('DBConnector.php');

$dateoccur = mysqli_real_escape_string($conn, $_REQUEST['date']);
$timeoccur = mysqli_real_escape_string($conn, $_REQUEST['time']);
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$idno = mysqli_real_escape_string($conn, $_REQUEST['idno']);
$course = mysqli_real_escape_string($conn, $_REQUEST['course']);
$description = mysqli_real_escape_string($conn, $_REQUEST['description']);
$damage = mysqli_real_escape_string($conn, $_REQUEST['damage']);
$actaken = mysqli_real_escape_string($conn, $_REQUEST['actaken']);


$insertQuery = "INSERT INTO report (DateOfOccurence, TimeOfOccurence, Name, IdNo, Course, Description, ExtentofDamage, Action_taken) VALUES ('$dateoccur', '$timeoccur', '$name', '$idno', '$course', '$description', '$damage', '$actaken')";

if ($conn->query($insertQuery) === TRUE) {
	} else {
	    echo "Error: " . $insertQuery . "<br>" . $conn->error;
	}

	$conn->close();
?>