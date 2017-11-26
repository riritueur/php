<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>

<body>

  <br/>

    <form method="post">
      <div class="row">
        <div class="col">
          <label for="prenom" class="col-sm-2 col-form-label"><strong>Prénom *</strong></label>
          <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Richard" required>
          <div class="invalid-feedback">
            Champ invalide
          </div>
        </div>
        <div class="col">
          <label for="nom" class="col-sm-2 col-form-label"><strong>Nom *</strong></label>
          <input type="text" class="form-control" name="nom" id="nom" placeholder="Peres" required>
          <div class="invalid-feedback">
            Champ invalide
          </div>
        </div>
      </div><br/>
      <div class="form-group row">
        <label for="age" class="col-sm-2 col-form-label"><strong>Age *</strong></label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="age" id="age" placeholder="12" required>
          <div class="invalid-feedback">
            Age invalide
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label"><strong>Email *</strong></label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="email" id="email" placeholder="example@domaine.com" required>
          <div class="invalid-feedback">
            Adresse invalide
          </div>
        </div>
      </div>

      <button type="submit" class="btn btn-dark btnSend" name="submit">Envoyer</button>

    </form>
  
   <?php
    if(isset($_POST['submit'])){
      
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $age = $_POST['age'];
      $email = $_POST['email'];
      
      $minMax = array(
        'options' => array(
        'min_range' => 18,
        'max_range' => 100
        )
      );  
      
      if(preg_match('/([A-z-][^-])+/', $nom)){
        if(preg_match('/([A-z-][^-])+/', $prenom)){
            if(filter_var($age, FILTER_VALIDATE_INT, $minMax)){
              $email = filter_var($email, FILTER_SANITIZE_EMAIL);
              $_POST['email'] = $email;
              echo $email .'<br/>';
              if(filter_var($email, FILTER_VALIDATE_EMAIL) == true){
                echo "Formulaire accepté";
              } else { echo "Email incorrect"; }
            } else { echo "Age incorrect"; }
        } else { echo"Prenom incorrect"; }
    } else { echo "Nom incorrect"; }
    
  }
   
   ?>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>
