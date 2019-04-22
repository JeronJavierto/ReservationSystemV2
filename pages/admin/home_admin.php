
<!DOCTYPE html>
<html>
<head>
	
 

	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../stylesheet/style.css">
	<h1>FACILITY RESERVATION SYSTEM</h1>
	<h3><a href="edit_profile_admin.php" class="signup">Edit Profile</a></h3><br>
	<h3><a href="../../php/logout.php" class="signup">Log Out</a></h3>
</head>
<body>

	<ul class="menu">
		<li class="home"><a href="home_admin.php" class="home">HOME</a></li>
		<li class="events"><a href="../../php/event_page_admin.php" class="events">EVENTS</a></li>
		<li class="faci"><a href="../../php/list_facilities_admin.php" class="faci">FACILITIES</a></li>
		<li class="reser"><a href="list_of_reservations.php" class="reser">RESERVATION</a></li>
		<li class="req"><a href="../../php/request_admin.php" class="req">REQUEST</a></li>
		<li class="rep"><a href="report.php" class="rep">REPORTS</a></li>
	</ul>

	<?php include("homepage_admin_calendar.php"); ?>
</body>
</html>