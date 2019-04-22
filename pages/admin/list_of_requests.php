<?php
	include('DBConnector.php');
	// include('../../php/session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>List of Facilities</title>
	<link rel="stylesheet" href="../../stylesheet/style.css">
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
			<th>Client ID</th>
			<th>Activity</th>
			<th>Decision</th>
		</tr>
		<tr>
			<td>10101</td>
			<td>2160001</td>
			<td>Details
				<div class="dropdown">
 				<button><i class="down"></i></button>
  				<div class="dropdown-content">
    			<a href="#">
    				<p>Department/ Organization: SSC KASAMA</p>
    				<p>Event Name: Chalk Walk</p>
    				<p>Venue: Devesse Highway</p>
    				<p>Date: 22/2/2016-23/2/2016</p>
    				<p>Times: 8:00-5:00</p>
    				<p>Date Approved by Sao: 21/1/2016</p>
    			</a>
  				</div>
				</div>
			</td>
			<td>
				<button id="myBtn" class="bc1">Approve</button>
				<button id="myBtn1" class="bc2">Decline</button>
			</td>
		</tr>
		
		<tr>
			<td>10102</td>
			<td>2160002</td>
			<td>Details
				<div class="dropdown">
 				<button><i class="down"></i></button>
  				<div class="dropdown-content">
    			<a href="#">
    			<p>Department/ Organization: Accountancy Department</p>
    			<p>Event Name: Ticket Booth</p>
    			<p>Venue: Plaza</p>
    			<p>Date: 22/2/2016-19/3/2016</p>
   				<p>Times: 8:30-6:30</p>
    			<p>Date Approved by Sao: 16/2/2016</p>    				
    			</a>
  				</div>
				</div>
			</td>
			<td>
				<button id="myBtn" class="bc1">Approve</button>
				<button id="myBtn1" class="bc2">Decline</button>				
			</td>
		</tr>
		
		<tr>
			<td>10103</td>
			<td>2160003</td>
			<td>Details
				<div class="dropdown">
 				<button><i class="down"></i></button>
  				<div class="dropdown-content">
    			<a href="#">
    			<p>Department/ Organization: Jr Finex</p>
    			<p>Event Name: Finexibit</p>
    			<p>Venue: Plaza</p>
    			<p>Date: 16/3/2016-19/2/2016</p>
   				<p>Times: 8:30-7:30</p>
    			<p>Date Approved by Sao: 3/3/2016</p>
    			</a>
  				</div>
				</div>
			</td>
			<td>
				<button id="myBtn" class="bc1">Approve</button>
				<button id="myBtn1" class="bc2">Decline</button>				
			</td>
		</tr>
		
		<tr>
			<td>10104</td>
			<td>2160004</td>
			<td>Details
				<div class="dropdown">
 				<button><i class="down"></i></button>
  				<div class="dropdown-content">
    			<a href="#">
    			<p>Department/ Organization: MDC</p>
    			<p>Event Name: Distribution of Wavivers</p>
    			<p>Venue: Plaza</p>
    			<p>Date: 8/3/2016-15/3/2016</p>
   				<p>Times: 8:30-4:30</p>
    			<p>Date Approved by Sao: 24/2/2016</p>
    			</a>
  				</div>
				</div>
			</td>
			<td>
				<button id="myBtn" class="bc1">Approve</button>
				<button id="myBtn1" class="bc2">Decline</button>			
			</td>
		</tr>

		<tr>
			<td>10105</td>
			<td>2160005</td>
			<td>Details
				<div class="dropdown">
 				<button><i class="down"></i></button>
  				<div class="dropdown-content">
    			<a href="#">
    				<p>Department/ Organization: SICAP</p>
    				<p>Event Name: Exhibit</p>
    				<p>Venue: Plaza</p>
    				<p>Date: 28/3/2016-2/4/2016</p>
    				<p>Times: 7:00-7:00</p>
    				<p>Date Approved by Sao: 8/3/2016</p>
    			</a>
  				</div>
				</div>
			</td>
			<td>
				<button id="myBtn" class="bc1">Approve</button>
				<button id="myBtn1" class="bc2">Decline</button>
			</td>
		</tr>

		<tr>
			<td>10106</td>
			<td>2160006</td>
			<td>Details
				<div class="dropdown">
 				<button><i class="down"></i></button>
  				<div class="dropdown-content">
    			<a href="#">
    				<p>Department/ Organization: JPIA</p>
    				<p>Event Name: Seminar Booth</p>
    				<p>Venue: Plaza</p>
    				<p>Date: 9/3/2016-12/3/2016</p>
    				<p>Times: 8:00-7:30</p>
    				<p>Date Approved by Sao: 9/3/2016</p>
    			</a>
  				</div>
				</div>
			</td>
			<td>
				<button id="myBtn" class="bc1">Approve</button>
				<button id="myBtn1" class="bc2">Decline</button>
			</td>
		</tr>

		<tr>
			<td>10107</td>
			<td>2160007</td>
			<td>Details
				<div class="dropdown">
 				<button><i class="down"></i></button>
  				<div class="dropdown-content">
    			<a href="#">
    				<p>Department/ Organization: Event Class</p>
    				<p>Event Name: Lousian Hospitable Skills Olympic</p>
    				<p>Venue: Plaza</p>
    				<p>Date: 1/4/2016-2/4/2016</p>
    				<p>Times: 8:30-4:30</p>
    				<p>Date Approved by Sao: 30/3/2016</p>
    			</a>
  				</div>
				</div>
			</td>
			<td>
				<button id="myBtn" class="bc1">Approve</button>
				<button id="myBtn1" class="bc2">Decline</button>
			</td>
		</tr>

		<tr>
			<td>10108</td>
			<td>2160008</td>
			<td>Details
				<div class="dropdown">
 				<button><i class="down"></i></button>
  				<div class="dropdown-content">
    			<a href="#">
    				<p>Department/ Organization: Retailing Class</p>
    				<p>Event Name: Exhibit</p>
    				<p>Venue: Plaza</p>
    				<p>Date: 5/6/2016</p>
    				<p>Times: 8:30-5:30</p>
    				<p>Date Approved by Sao: 23/4/2016</p>
    			</a>
  				</div>
				</div>
			</td>
			<td>
				<button id="myBtn" class="bc1">Approve</button>
				<button id="myBtn1" class="bc2">Decline</button>
			</td>
		</tr>

		<tr>
			<td>10109</td>
			<td>2160009</td>
			<td>Details
				<div class="dropdown">
 				<button><i class="down"></i></button>
  				<div class="dropdown-content">
    			<a href="#">
    				<p>Department/ Organization: SICAP</p>
    				<p>Event Name: Booth</p>
    				<p>Venue: Plaza</p>
    				<p>Date: 9/5/2016-8/5/2016</p>
    				<p>Times: 8:00-6:00</p>
    				<p>Date Approved by Sao: 2/5/2016</p>
    			</a>
  				</div>
				</div>
			</td>
			<td>
				<button id="myBtn" class="bc1">Approve</button>
				<button id="myBtn1" class="bc2">Decline</button>
			</td>
		</tr>

		<tr>
			<td>10110</td>
			<td>2160010</td>
			<td>Details
				<div class="dropdown">
 				<button><i class="down"></i></button>
  				<div class="dropdown-content">
    			<a href="#">
    				<p>Department/ Organization: Business Laws and Taxation Department</p>
    				<p>Event Name: Exam</p>
    				<p>Venue: Classrooms</p>
    				<p>Date: 14/5/2016-17/5/2016</p>
    				<p>Times: 6:00-7:30</p>
    				<p>Date Approved by Sao: 12/5/2016</p>
    			</a>
  				</div>
				</div>
			</td>
			<td>
				<button id="myBtn" class="bc1">Approve</button>
				<button id="myBtn1" class="bc2">Decline</button>
			</td>
		</tr>

		<tr>
			<td>10111</td>
			<td>2160011</td>
			<td>Details
				<div class="dropdown">
 				<button><i class="down"></i></button>
  				<div class="dropdown-content">
    			<a href="#">
    				<p>Department/ Organization: Event Class 1667</p>
    				<p>Event Name: Tour Guiding Seminar</p>
    				<p>Venue: D906</p>
    				<p>Date: 14/5/2016</p>
    				<p>Times:4:30-6:00</p>
    				<p>Date Approved by Sao: 12/5/2016</p>
    			</a>
  				</div>
				</div>
			</td>
			<td>
				<button id="myBtn" class="bc1">Approve</button>
				<button id="myBtn1" class="bc2">Decline</button>
			</td>
		</tr>

		<tr>
			<td>10112</td>
			<td>2160012</td>
			<td>Details
				<div class="dropdown">
 				<button><i class="down"></i></button>
  				<div class="dropdown-content">
    			<a href="#">
    				<p>Department/ Organization: HTM 304</p>
    				<p>Event Name: Culminating Activity</p>
    				<p>Venue: AVR</p>
    				<p>Date: 13/5/2016</p>
    				<p>Times: 4:30-7:00</p>
    				<p>Date Approved by Sao: 5/5/2016</p>
    			</a>
  				</div>
				</div>
			</td>
			<td>
				<button id="myBtn" class="bc1">Approve</button>
				<button id="myBtn1" class="bc2">Decline</button>
			</td>
		</tr>

		<tr>
			<td>10113</td>
			<td>2160013</td>
			<td>Details
				<div class="dropdown">
 				<button><i class="down"></i></button>
  				<div class="dropdown-content">
    			<a href="#">
    				<p>Department/ Organization: SCIS Integrated Confidentiary</p>
    				<p>Event Name: Sports Fest</p>
    				<p>Venue: Volleyball Court</p>
    				<p>Date: 1/5/2016</p>
    				<p>Times: 8:00-6:00</p>
    				<p>Date Approved by Sao: 7/5/2016</p>
    			</a>
  				</div>
				</div>
			</td>
			<td>
				<button id="myBtn" class="bc1">Approve</button>
				<button id="myBtn1" class="bc2">Decline</button>
			</td>
		</tr>

		<tr>
			<td>10114</td>
			<td>2160014</td>
			<td>Details
				<div class="dropdown">
 				<button><i class="down"></i></button>
  				<div class="dropdown-content">
    			<a href="#">
    				<p>Department/ Organization: MKTG 12</p>
    				<p>Event Name: Exhibit</p>
    				<p>Venue: Plaza</p>
    				<p>Date: 2/5/2016-4/5/2016</p>
    				<p>Times: 8:00-5:00</p>
    				<p>Date Approved by Sao: 26/4/2016</p>
    			</a>
  				</div>
				</div>
			</td>
			<td>
				<button id="myBtn" class="bc1">Approve</button>
				<button id="myBtn1" class="bc2">Decline</button>
			</td>
		</tr>

		<tr>
			<td>10115</td>
			<td>2160015</td>
			<td>Details
				<div class="dropdown">
 				<button><i class="down"></i></button>
  				<div class="dropdown-content">
    			<a href="#">
    				<p>Department/ Organization: LAISSEZ FAIR</p>
    				<p>Event Name: Presidential Mock Election</p>
    				<p>Venue: D911</p>
    				<p>Date: 5/14/2016</p>
    				<p>Times: 8:30-6:30</p>
    				<p>Date Approved by Sao: 5/5/2016</p>
    			</a>
  				</div>
				</div>
			</td>
			<td>
				<button id="myBtn" class="bc1">Approve</button>
				<button id="myBtn1" class="bc2">Decline</button>
			</td>
		</tr>


	</table>
</body>
</html>