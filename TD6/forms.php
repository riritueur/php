<?php
  
  session_start();
  
  echo "Prenom : " .$_SESSION['prenom'].'<br />';
  echo "Nom : " .$_SESSION['nom'].'<br />';
?>

<a href="menu.html">Menu.html</a><br/>