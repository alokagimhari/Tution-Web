<?php
   session_start();
 ?>
 <?php
   if(isset($_POST["logout"])){
      session_destroy();//destroy the session
      $_SESSION = array(); // Clears the $_SESSION variable
      header("Location:home.html"); //redirect to the home page
   }
   else{
	  header("Location:home.html"); 
   }
?>