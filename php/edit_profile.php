<?php
    include("DBConnector.php");

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($conn, "SELECT password FROM accounts WHERE email = '$user_check'");

   $row =  mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['password'];
   
   if(!isset($_SESSION['login_user'])){
      header("location: ../../index.html");
      die();
   }
?>