<?php
		 session_start();
		 

     $to      = $_POST['email'];
     $subject = 'Voici votre mot de passe';
     $message = 'Votre mot de passe est '. $_COOKIE['mdp'];
     $headers = 'From: donot@reply' . "\r\n" .
     'Reply-To: donot@reply' . "\r\n" .
     'X-Mailer: PHP/';

     mail($to, $subject, $message, $headers);

  header('Location: index.php');
  exit();
 ?>