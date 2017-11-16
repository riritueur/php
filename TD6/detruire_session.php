<?php
  session_start();
  echo $_SESSION['prenom'].'<br />';
  echo $_SESSION['nom'].'<br />';
  session_destroy();
  $_SESSION = array();
  echo $_SESSION['prenom'].'<br />';
  echo $_SESSION['nom'].'<br />';

  //header('Location: menu.html');
  //exit();

?>