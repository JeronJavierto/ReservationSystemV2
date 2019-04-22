<?php
	include('DBConnector.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table id="customers">
	    <tr>
	      <th>Event Name</th>
	      <th>Venue</th>
	      <th>Time Start</th>
	      <th>Time End</th>            
	    </tr>

	<?php

	  $sql = "SELECT * FROM reservation WHERE status LIKE 'Approved'";
	  $result = $conn-> query($sql);

	  if ($result-> num_rows > 0){
	    while ($row = $result-> fetch_assoc()){
	      echo "<tr>
	          <td>" . $row["title"] . "</td>
	          <td>" . $row["Venue"] . "</td>          
	          <td>"  . $row["start_event"] . "</td>
	          <td>" . $row["end_event"] . "</td>          
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