<!DOCTYPE html>

<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

</head>

<body>
  <h1>TD8</h1>
  <br/><br/>
  <section class="container-fluid">
    
    <pre>
      create table annuaire
      (
        id int not null auto_increment,
        nom varchar(25) not null,
        prenom varchar(25) not null,
        numPoste varchar(6),
        PRIMARY KEY (id),
        CHECK (numPoste like '__.__')
      );
      
      insert into annuaire (nom,prenom, numPoste) values('Floda', 'Relti', '12.12');
      
      /**  TODO : Check annuaire et le insert values et
      *    mettre annuaire en public
      **/
      

    </pre>
    <br/><br/>
    
    <?php include("script_MySQL.php"); ?>
    
    <br/><br/>
    <p>Voir le résultat MySQl <a href="www.richard-peres.xyz/php/"> ici</a></p>
    
    <br/><br/><br/><br/>
  <a href="../index.php"><img src="../Entypo+/Entypo+/arrow-bold-left.svg" height="25px" width="45px"/>Retour index</a>
  </section>
  

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
