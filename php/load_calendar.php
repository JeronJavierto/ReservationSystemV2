<?php

//load.php

$connect = new PDO('mysql:host=localhost;dbname=itproject', 'root', '');

$data = array();

$query = "SELECT * FROM reservation ORDER BY resID";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["resID"],
  'title'   => $row["title"],
  'start'   => $row["start_event"],
  'end'   => $row["end_event"]
 );
}

echo json_encode($data);

?>

