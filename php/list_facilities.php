<?php
	include('DBConnector.php');	
?>

<!DOCTYPE html>
<html>
<head>
	<title>List of Facilities</title>
	<link rel="stylesheet" href="../stylesheet/style.css">
	<h1>FACILITY RESERVATION SYSTEM</h1>
</head>
<body>

	  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="loginB">LOGIN</button>
	  <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;" class="signupB">SIGN UP</button>

	<div id="id01" class="loginmodal">
	  
	  <form class="modal-content animate" action="login.php" method="POST">
	    <div class="imgcontainer">
	      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	    </div>
	    <div class="logincontainer">
	      <label for="email"><b>Email</b></label>
	      <input type="text" placeholder="Enter Username" name="email" required="">

	      <label for="password"><b>Password</b></label>
	      <input type="password" placeholder="Enter Password" name="password" required="">
	        
	      <button type="submit">LOGIN</button>    
	    </div>
	    <div class="container" style="background-color:#f1f1f1">
	      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>    
	    </div>
	  </form>
	</div>

	    <div id="id02" class="modal">
	      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>  
	    
	<form class="modal-content" action="signup.php" method="POST">
	    <div class="container">
	      <p>Please fill in this form to create an account.</p>
	      <hr>
	      <label for="frstn">First Name</label>
	      <input type="text" placeholder="Enter First Name" name="FName" required="">

	      <label for="lstn">Last Name</label>
	      <input type="text" placeholder="Enter Last Name" name="LName" required="">

	      <label for="email"><b>Email</b></label>
	      <input type="text" placeholder="Enter Email" name="email" required="">

	      <label for="org">Organization</label>
	      <input type="text" name="org">

	      <label for="posi">Position</label>
	      <input type="text" name="posi">

	      <label for="Password"><b>Password</b></label>
	      <input type="password" placeholder="Enter Password" name="Password" required="">

	      <label for="ConPassword"><b>Confirm Password</b></label>
	      <input type="password" placeholder="Repeat Password" name="ConPassword" required="">    

	      <div class="clearfix">
	        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
	        <button type="submit" class="signupbtn">Sign Up</button>
	      </div>
	    </div>
	  </form>
	</div>

		<ul class="menu">
		<li class="home"><a href="../index.html" class="home">HOME</a></li>
		<li class="events"><a href="event_page.php" class="events">EVENTS</a></li>
		<li class="faci"><a href="list_facilities.php" class="faci">FACILITIES</a></li>
	</ul>
	<table id="customers">
		<tr>
			<th>Level</th>
			<th>Room</th>
			<th>Room Type</th>
			<th>Description</th>
			<th>Capacity</th>			
		</tr>
<?php
	$sql = "SELECT * FROM facility";
	$result = $conn-> query($sql);

	if ($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()){
			echo "<tr>
					<td>" . $row["Level"] . "</td>
					<td>" . $row["room"] . "</td>
					<td>" . $row["roomType"] . "</td>
					<td>"  . $row["description"] . "</td>
					<td>" . $row["capacity"] . "</td>
				  </tr>";
		}
		echo "</table>";
	}else{
		echo "0 result";
	}

	$conn-> close();
?>		
	</table>
</body>
</html>