<?php

session_start();

if(empty($_COOKIE["started"])){
    setcookie("started",session_start());
    setcookie("SID", htmlspecialchars(SID));
}

  header('Location: menu.html');
  exit();
   
?>