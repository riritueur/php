<?php
		 session_start();
		 

     $to      = $_POST['email'];
     $subject = 'le sujet';
     $message = 'Ceci est un message';
     $headers = 'From: jesus@reviens.com' . "\r\n" .
     'Reply-To: jesus@reviens.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);

  header('Location: index.php');
  exit();
 ?>