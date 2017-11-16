<html>
	<head>
	</head>
	<body>
        
        <?php 
				if(empty($_COOKIE['login'])){

				echo "<br/><br/><form action=\"connect.php\" method=\"post\">";
					echo '<p>Login (email)<br/><br/></p><input type="text" name="login"/><br/>';
					echo '<p>Mot de passe<br/><br/></p><input type="text" name="mdp"/><br/>';
					echo '<br/><input type="submit" name="Valider"/></form><br/><br/>';
				}
				else{
					echo "Bienvenue ".$_COOKIE['login']."!";
				}
      
                echo '<br/><br/><form action="mailing.php" method="post">';
                echo '<p>Mot de passe oublié ?<br/><br/>Entré votre email :<br/></p><input type="text" name="email"/>';
                echo '<input type="submit" name="Valider"/></form><br/><br/>';
      
                echo '<br/><br/>';
				echo '<a href="index.php"><img src="../Entypo+/Entypo+/arrow-bold-left.svg" height="25px" width="45px"/>Retour index</a>';
					?>
	</body>
</html>