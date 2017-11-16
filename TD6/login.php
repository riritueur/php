<html>
	<head>
	</head>
	<body>
        
        <?php 
				if(empty($_COOKIE['login'])){
					echo "<br/><br/><form action=\"mailing.php\" method=\"post\">";
					echo "<input type=\"text\" name=\"email\"/>";
					echo "<input type=\"submit\" name=\"Valider\"/></form><br/><br/>";

				echo "<br/><br/><form action=\"connect.php\" method=\"post\">";
					echo '<input type="text" name="login"/>';
					echo '<input type="text" name="mdp"/><br/>';
					echo '<input type="submit" name="Valider"/></form><br/><br/>';
				echo '<br/><br/>';
				echo '<a href="index.php"><img src="../Entypo+/Entypo+/arrow-bold-left.svg" height="25px" width="45px"/>Retour index</a>';
				}
				else{
					echo "Bienvenue ".$_COOKIE['login']."!";
                    echo '<br/><br/><a href="index.php">index.php</a>
    <br/>';
				}
					?>
	</body>
</html>