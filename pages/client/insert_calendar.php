<?php
include("../../php/DBConnector.php");
//insert.php
// session_start();
$connect = new PDO('mysql:host=localhost;dbname=itproject', 'root', '');

$user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"SELECT * FROM accounts WHERE email = '$user_check'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['userID'];



if(isset($_POST["title"]))
{
 $query = "
 INSERT INTO reservation 
 (user_ID, title, start_event, end_event) 
 VALUES ('$login_session' ,:title, :start_event, :end_event)
 ";
 
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end']
  )
 );
}
?>