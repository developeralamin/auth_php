<?php

require 'session.php';

if(!isset($_SESSION['email'])){

	header("location:index.php?error=Unauthorize user & notification=invalid user");
}

 echo $_SESSION['email'];

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  	   if ($_SESSION['email'] == true) {
  	   	  unset($_SESSION['email']);
  	   	  header('location:index.php');
  	   }
  }



 ?>



   <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" > 

     <input type="hidden" name="" value="true">  

   		<input type="submit" value="logout" name="">

    </form>

 <?php

 ?>