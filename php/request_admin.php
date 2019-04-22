<?php
	include('DBConnector.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Request</title>
	<link rel="stylesheet" href="../stylesheet/style.css">
	<h1>FACILITY RESERVATION SYSTEM</h1>
	<h3><a href="edit_profile.php" class="signup">Edit Profile</a></h3><br>
	<h3><a href="logout.php" class="signup">Log Out</a></h3>
</head>
<body>    
  
	<ul class="menu">
	  <li class="home"><a href="../pages/admin/home_admin.php" class="home">HOME</a></li>
	  <li class="events"><a href="event_page_admin.php" class="events">EVENTS</a></li>
	  <li class="faci"><a href="list_facilities_admin.php" class="faci">FACILITIES</a></li>
	  <li class="reser"><a href="../pages/admin/list_of_reservations.php" class="reser">RESERVATION</a></li>
	  <li class="req"><a href="../pages/admin/list_of_requests.html" class="req">REQUEST</a></li>
	  <li class="rep"><a href="../pages/admin/report.php" class="rep">REPORTS</a></li>
	</ul>

	<table id="customers">
		<tr>
			<th class="margin">Reservation ID</th>
			<th>Name</th>
			<th>Activity</th>
			<th>Decision</th>			
		</tr>
<?php
	// if($_SERVER["REQUEST_METHOD"] == "POST") {
	$sql = "SELECT * FROM reservation r LEFT JOIN accounts a ON r.user_ID = a.userID WHERE status = 'Pending'";
	// $sql = "SELECT * FROM client";

	$result = $conn-> query($sql);

	if ($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()){
			$_SESSION['IDres'] = $row["resID"];
			echo "<tr>
					<td>" . $row["resID"] . "</td>
					<td>" . $row["First_name"] . " " . $row["Last_name"] . "</td>
					<td>" . $row["title"] . "</td>
					<td>"
						?>
						<form action="approve_or_decline.php" method="POST">
							<input type="submit" name="Approve" value="Approve">
							<input type="submit" name="Decline" value="Decline">
						</form>
						<?php
					"</td>								
				  </tr>";
		}
		echo "</table>";
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn-> close();
	// }
?>

</body>
</html>