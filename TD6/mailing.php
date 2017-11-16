<?php
		 session_start();
		 setcookie("login",1,time()+(60*60*24*365));
     $to      = $_POST['email'];
     $subject = 'le sujet';
     $message = 'Je look les séance après';
     $headers = 'From: jesus@reviens.com' . "\r\n" .
     'Reply-To: jesus@reviens.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);

  header('Location: index.php');
  exit();
 ?>