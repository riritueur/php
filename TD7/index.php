<!DOCTYPE html>

<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

</head>

<body>
  <h1>TD7</h1>
  <br/><br/>
  <section class="container-fluid">
    <?php
		echo '<h2>1.1 + 1.2</h2>';
		echo '<p>Affichage de fichier fichier.xml avec récupération dans une variable xml.</p>';
			$fichier = "fichier.xml";
			$xml = simplexml_load_file($fichier);
			$xml_doc = new DOMDocument('1.0', 'utf-8');
			$xml_doc->appendChild($librairie = $xml_doc->createElement('librairie'));
		echo '<ul>';
			foreach($xml as $livre){
				echo '<li>Livre: '.$livre->titre;
				echo'<ul>';
				echo '<li>Langue: '.$livre->titre['langue'].'</li>';
				echo '<li>Catégorie: '.$livre['categorie'].'</li>';
				echo '<li>Auteur: '.$livre->auteur.'</li>';
				echo '<li>Année: '.$livre->annee.'</li>';
				echo '<li>Prix: '.$livre->prix.'</li>';
				echo '</ul></li><br/>';
				$livre_node = $xml_doc->createElement('livre','');
				$livre_node->setAttribute('categorie',$livre['categorie']);
				$librairie->appendChild($livre_node);
				$titre_node = $xml_doc->createElement('titre',$livre->titre);
				$titre_node->setAttribute('langue',$livre->titre['langue']);
				$livre_node->appendChild($titre_node);
				$livre_node->appendChild($xml_doc->createElement('auteur',$livre->auteur));
				$livre_node->appendChild($xml_doc->createElement('annee',$livre->annee));
				$prix_node = $xml_doc->createElement('prix',$livre->prix);
				$prix_node->setAttribute('devise','');
				$livre_node->appendChild($prix_node);
				$livre_node->appendChild($xml_doc->createElement('resume',''));
				$livre_node->appendChild($xml_doc->createElement('editeur',''));			
			}
		echo '</ul>';
		$xml_save = $xml_doc->saveXML();
		file_put_contents('fichierv2.xml', $xml_save);
		?>
    
      <h2>2</h2>
      <br/>
      <a href="forms.php">Formulaire</a>
      <br/><br/><br/>
        
      <?php
        echo '<h2>3.1</h2> <br/>';
        echo 'if (defined(\'CONST\')) {<br/>
          echo constant("CONST");<br/>
        }<br/><br/>';
        echo 'define("CONST", 12)<br/><br/>';
        define("CONST", 12);
         echo 'if (defined(\'CONST\')) {<br/>
          echo constant("CONST");<br/>
        }<br/>';
        if (defined('CONST')) {
          echo constant("CONST") .'<br/><br/><br/>';
        }
        
        echo '<h2>3.2</h2> <br/>';
        echo '$i = 0;<br/>
        while(true){<br/>
          echo $i . \'  \';<br/><br/>
          if($i == 3)<br/>
            exit;<br/><br/>
          $i = $i + 1;<br/>
        }<br/><br/>';
        
        $i = 0;
        while(true){
          echo $i . '  ';
          if($i == 3)
            exit;
          $i = $i + 1;
        }
    
        echo '<h2>3.2</h2> <br/>';
        echo 'eval("echo \'Ceci provient de eval() ! <br/>\'")';
        eval("echo 'Ceci provient de eval() ! <br/>'");
        
        
      ?>
    
    <br/><br/>
  <a href="../index.php"><img src="../Entypo+/Entypo+/arrow-bold-left.svg" height="25px" width="45px"/>Retour index</a>
  </section>
  

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
