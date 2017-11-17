<?php
  session_start();
		 
  setcookie("login",$_POST['login'],time()+30); 
  setcookie("mdp",$_POST['mdp'],time()+30); 

  header('Location: login.php');
  exit();
 ?>