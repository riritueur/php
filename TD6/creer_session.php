<?php

  session_start();

  $_SESSION['prenom'] = $_POST['prenom'];
  $_SESSION['nom'] = $_POST['nom'];

  header('Location: forms.php');
  exit();

?>