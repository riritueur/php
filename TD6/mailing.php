<?php
      
  session_start();

  $to      = $_POST['email'];
  $subject = 'Mot de passe oublié';
  $message = 'Votre mot de passe est '. $_COOKIE['mdp'];
  $headers = 'From: donotreply@floda.com' . "\r\n" .
  'Reply-To: donotreply@floda.com' . "\r\n" .
  'X-Mailer: PHP/';

  mail($to, $subject, $message, $headers);

  header('Location: index.php');
  exit();
?>