<?php
  session_start();
		 
  setcookie("login",$_POST['login'],time()+5);  

  header('Location: login.php');
  exit();
 ?>