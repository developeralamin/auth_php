<?php

require 'session.php';
if(isset($_SESSION['email'])){
  
  header("location:profile.php");
}


 if($_SERVER['REQUEST_METHOD'] != 'POST'){
 	header("location:index.php?error=Unauthorize user & notification=invalid user");
 	
 }

if($_POST['email'] == 'alamin@gmail.com' &&  $_POST['password'] == '1234' ){

  // echo $_POST['email'];
   $_SESSION['email']  = $_POST['email'];
   header("location:profile.php");

} 
else{
   header("location:index.php?error=invalid Email or Password & notification=check your credintials");
}




 // echo $_POST['email'];

?>