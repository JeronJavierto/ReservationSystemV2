<?php
	include('DBConnector.php');
	include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>List of Reservations</title>
	<link rel="stylesheet" type="text/css" href="../stylesheet/style.css">
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
	  <li class="req"><a href="../pages/admin/list_of_requests.php" class="req">REQUEST</a></li>
	  <li class="rep"><a href="../pages/admin/report.php" class="rep">REPORTS</a></li>
	</ul>

	<table id="reservation">
		<tr>
			<th>Reservation</th>
			<th>Reservation Date</th>
			<th>Reservation Time</th>
			<th>Reservation Status</th>
			<th>Type</th>
			<th>Availability</th>
		</tr>
		<td> </td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</table>

</body>
</html>