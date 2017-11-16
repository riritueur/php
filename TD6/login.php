<html>
	<head>
	</head>
	<body>
        
        <?php 
				if(empty($_COOKIE['login'])){
					echo "<br/><br/><form action=\"mailing.php\" method=\"post\">";
					echo "<input type=\"text\" name=\"email\"/>";
					echo "<input type=\"submit\" name=\"Valider\"/></form><br/><br/>";

				echo "<br/><br/><form action=\"login.php\" method=\"post\">";
					echo '<input type="text" name="prenom"/>';
					echo '<input type="text" name="nom"/><br/>';
					echo '<input type="submit" name="Valider"/></form><br/><br/>';
				echo '<br/><br/>';
				echo '<a href="index.php"><img src="../Entypo+/Entypo+/arrow-bold-left.svg" height="25px" width="45px"/>Retour index</a>';
				}
				else{
					echo "Bienvenue ".$_COOKIE['login']."!";
				}
					?>
	</body>
</html>