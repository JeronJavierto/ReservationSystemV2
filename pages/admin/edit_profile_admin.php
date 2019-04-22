<?php
	include("../../php/DBConnector.php");
?>

<html>
<head>
	<title> wow </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../stylesheet/style1.css">
	
</head>
<body>
<form action:"../php/edit_profile.php" method="POST">
	<?php 
		include("../../php/edit_profile.php");
		echo $login_session;
	?>

</form>

<div id="sc-edprofile">
		  <h1>Edit Profile</h1>
		  <div class="sc-container">
		    <input type="password" placeholder="Password" />
		    <input type="password" placeholder="Confirm Password" />
		    <input type="submit" value="Submit" />
		  </div>
		</div>


</body>