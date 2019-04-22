<?php
   include("DBConnector.php");
   // session_start();
   $error = "Your Email or Password is invalid";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // email and password sent from form 
      
      $myemail = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']);      
      $mypassword = md5($mypassword);
      
      $sql = "SELECT * FROM accounts WHERE email = '$myemail' and Password = '$mypassword'";

      $result = mysqli_query($conn,$sql);            

      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $active = $row['active'];
      
      $count = mysqli_num_rows($result);      
      // If result matched $myemail and $mypassword, table row must be 1 row

      if($count == 1) {
         $_SESSION['email'] = "email";
         $_SESSION['login_user'] = $myemail;

         if($row['User_type'] == 'admin'){
            header("location: ../pages/admin/home_admin.php");
         }else{
            header("location: ../pages/client/home_client.php");
         }

      }else {
         echo $error;
      }
   }
?>