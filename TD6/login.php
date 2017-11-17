<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	</head>
	<body>
        
        <?php 
				if(empty($_COOKIE['login'])){

				echo '<br/><form action="connect.php" method="post">
                    <div class="form-group">
                      <label for="email">Login (email)</label>
                      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="exemple@login.com">
                    </div>
                    <div class="form-group">
                      <label for="pass">Mot de passe</label>
                      <input type="password" class="form-control" id="pass" placeholder="******">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">M\'inscrire</button>
                  </form>';
				}
				else{
					echo "Bienvenue ".$_COOKIE['login']."!";
                  echo "mdp = ".$_COOKIE['mdp']."!";
				}
      
                echo '<br/><hr/><br/>';
                echo '<form action="mailing.php" method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Mot de passe oublié ?<br/><br/>Entrer votre login :</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="exemple@login.com">
                      </div>
                      
                      <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>';
      
                echo '<br/><br/>';
				echo '<a href="index.php"><img src="../Entypo+/Entypo+/arrow-bold-left.svg" height="25px" width="45px"/>Retour index</a>';
      
      
      
      
                
      
      
      
      
					?>
	
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>