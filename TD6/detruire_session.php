<?php
  session_start();
  setcookie('login', NULL, -1);
  $_SESSION = array();
  session_destroy();  
  
  header('Location: index.php');
  exit();

?>