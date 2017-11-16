<?php

session_start();
if(isset($_SESSION['count'])){
$count = $_SESSION['count'];
$count++; 
$count = $_SESSION['count'] = $count;
} else {
    $count = $_SESSION['count'] = 0;
}
echo $count;

?>
<br/>
<a href="menu.html">Menu.html</a>
<br/>
<a href="index.php"><img src="../Entypo+/Entypo+/arrow-bold-left.svg" height="25px" width="45px"/>Retour index</a> 