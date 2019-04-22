<?php
	include('DBConnector.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Room Matrix Test</title>
	<link rel="stylesheet" href="../stylesheet/style.css">
	<h1>FACILITY RESERVATION SYSTEM</h1>
</head>
<body>
	<form action="#" method ="POST">
<select class="form-dropdown validate[required]" style="width:150px" id="year" name="schoolYear">
<?php
	$sql = "SELECT DISTINCT schoolYear FROM classroom order by schoolYear";
	$result = $conn-> query($sql);
	$year="";

	if ($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()){
			echo '<option value="'.$row['schoolYear'].'">'.$row['schoolYear'].'</option>';

		}
		echo "</select>";
		echo "<input type='submit' name='submit' value='Select Year' >";
		echo "</form>";

		if(isset($_POST['submit'])){
			$year = $_POST['schoolYear'];
		}
		echo "<br/>";

	}else{
		echo "0 result";
	}

?>
</select>
	<table id="customers">
		<tr>
			<td> Room Name</td>
			<td> Days </td>
			<td> Time </td>
			<td> Hours </td>
			<td> School year </td>
		</tr>
<?php

	$sql = "SELECT * FROM classroom where roomName='D422' AND schoolYear= '".$year ."' " ;
	$result = $conn-> query($sql);

	if ($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()){
			echo "<tr>
					<td>" . $row["roomName"] . "</td>
					<td>" . $row["days"] . "</td>
					<td>" . $row["time"] . "</td>
					<td>" . $row["hours"] . "</td>
					<td>" . $row["schoolYear"] . "</td>
				  </tr> ";
		}
		echo "</table>";
	}else{
		echo "0 result";
	}

?>

<?php

	$sql = "SELECT roomName, time, days, SUM(hours*if(days='MWF', 3 , if(days='MTh', 2 ,if(days='TTH', 2 ,if(days='TF', 2 , 0 ))))) weekly from itproject.classroom where roomName ='D422' AND schoolYear= '".$year ."' "  ;

	$result = $conn-> query($sql);

	if ($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()){

			echo "Hours Utilized(Weekly): " . $row["weekly"] . " hours <br/>";
			echo "Total hours per week: 48 hours <br/>";
			echo "Utilization Rate: " . ($row["weekly"])*48*0.01. "% <br/>";
			echo $year;
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