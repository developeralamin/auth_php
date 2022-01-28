<?php

require 'session.php';
if(isset($_SESSION['email'])){
  
  header("location:profile.php");
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Auth</title>
</head>
<body>

<?php
  
  $error='';
  $notification='';

  if(isset($_GET['error']) && isset($_GET['notification']) ){

  	$error=$_GET['error'];
  	$notification=$_GET['notification'];

  }


?>


   <form method="POST" action="data.php" > 

  <?php 
   		echo $error . '<br>';
   		echo $notification . '<br>';

  ?>

   Email : <input type="text" name="email">  
   Password : <input type="text" name="password">  
   		<input type="submit" value="submit" name="">

    </form>


</body>
</html>