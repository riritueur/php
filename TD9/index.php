<!DOCTYPE html>

<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

</head>

<body>
  <h1>TD9</h1>
  <br/><br/>
  <section class="container-fluid">
		<?php
		class Vehicule{
			protected $_marque;
			protected $_modele;
			protected $_prix;
			
			const MARQUES_MODELES = array("Renault" => array("Twingo", "Clio", "Megane", "Laguna"),
																		"Peugeot" => array("107", "207", "308", "508"),
																		"Citroen" => array("C1", "C3", "C4", "C5"),
																		"Volkswagen" => array("Lupo", "Polo", "Golf", "Passat"),
																		"BMW" => array("Z4")
																		 );
			
			public function __construct($marque, $modele, $prix){
				$this->setMarque($marque);
				$this->setModele($modele);
				$this->setPrix($prix);
			}
			
			public function setMarque($marque){
				if(is_string($marque)){
					if(array_key_exists($marque, self::MARQUES_MODELES)){
						$this->_marque = $marque;
					}
					else{
						$string = "";
						foreach(self::MARQUES_MODELES as $cle => $val){
							$string .= $cle . ", ";
						}
						trigger_error('Les marques disponibles sont: '.$string, E_USER_WARNING);
					}
				}
				else{
					trigger_error('La marque doit être une chaîne de caractères.', E_USER_WARNING);
				}
			}
			
			public function setModele($modele){
				if(is_string($modele)){
					if(in_array($modele, self::MARQUES_MODELES[$this->_marque],true)){
						$this->_modele = $modele;
					}
					else{
						$string = "";
						foreach(self::MARQUES_MODELES[$this->_marque] as $cle => $val){
							$string .= $cle . ", ";
						}
						trigger_error('Les modèles disponibles pour la marque '.$this->_marque.' sont: '.$string, E_USER_WARNING);
					}
				}
				else{
					trigger_error('Le modèle doit être une chaîne de caractères.', E_USER_WARNING);
				}
			}
			
			public function setPrix($prix){
				if(is_int($prix)){
					if($prix <= 300000 && $prix >= 5000){
						$this->_prix = $prix;
					}
					else{
						trigger_error('Le prix doit être compris entre 5000 et 300000.', E_USER_WARNING);
					}
				}
				else{
					trigger_error('Le prix doit être un entier.', E_USER_WARNING);
				}
			}
			
			public function displayVehicule(){
				echo 'Vehicule: <br/>
							 - Marque: '.$this->_marque
							.'<br/>- Modèle: '.$this->_modele
							.'<br/>- Prix: '.$this->_prix;
			}
			
		}
		
		class Voiture extends Vehicule{
			private $_peinture;
			private $_couleur;
			private $_boite;
			private $_nb_porte;
			private $_radar_recul;
			private $_capteur_pluie;
			private $_capteur_luminosite;
			private $_regulateur_vitesse;
		
			public function __construct($marque, $modele, $prix, $couleur, $peinture = "classique", $boite = "manuelle", $nb_porte = 5, $radar_recul = false, $capteur_pluie = false, $capteur_luminosite = false, $regulateur_vitesse = false){
				parent::__construct($marque, $modele, $prix);
				$this->setPeinture($peinture);
				$this->setCouleur($couleur);
				$this->setBoite($boite);
				$this->setNbPorte($nb_porte);
				$this->setOptions($radar_recul,$capteur_pluie,$capteur_luminosite,$regulateur_vitesse);
			}
			
			public function __destruct(){
				echo 'La voiture de couleur '.$this->_couleur.' et ayant '.$this->_nb_porte.' portes a été détruite.<br/>';
			}
			
			public function setPeinture($peinture){
				if(is_string($peinture)){
					if($peinture == "classique" || $peinture == "metalisee" || $peinture == "nacree"){
						$this->_peinture = $peinture;
					}
					else{
						trigger_error('La peinture doit être classique, metalisee ou nacree.', E_USER_WARNING);
					}
				}
				else{
					trigger_error('La peinture doit être une chaîne de caractères.', E_USER_WARNING);
				}
			}
			
			public function setCouleur($couleur){
				if(is_string($couleur)){
					$this->_couleur = $couleur;
				}
				else{
					trigger_error('La couleur doit être une chaîne de caractères.', E_USER_WARNING);
				}
			}
			
			public function setBoite($boite){
				if(is_string($boite)){
					if($boite == "manuelle" || $boite == "robotisee" || $boite == "automatique"){
						$this->_boite = $boite;
					}
					else{
						trigger_error('La boite doit être manuelle, robotisee ou automatique.', E_USER_WARNING);
					}
				}
				else{
					trigger_error('La boite doit être une chaîne de caractères.', E_USER_WARNING);
				}
			}
			
			public function setNbPorte($nb_porte){
				if(is_int($nb_porte)){
					if($nb_porte == 2 ||$nb_porte == 3 ||$nb_porte == 4 ||$nb_porte == 5){
						$this->_nb_porte = $nb_porte;
					}
					else{
						trigger_error('Le nombre de portes doit être égal à 2,3,4 ou 5.', E_USER_WARNING);
					}
				}
				else{
					trigger_error('Le nombre de portes doit être un entier.', E_USER_WARNING);
				}
			}
			
			public function setRadarRecul($radar_recul){
				if(is_bool($radar_recul)){
					$this->_radar_recul = $radar_recul;
				}
				else{
					trigger_error('Le radar de recul doit être un booléen.', E_USER_WARNING);
				}
			}
			
			public function setCapteurPluie($capteur_pluie){
				if(is_bool($capteur_pluie)){
					$this->_capteur_pluie = $capteur_pluie;
				}
				else{
					trigger_error('Le capteur de pluie doit être un booléen.', E_USER_WARNING);
				}
			}
			
			public function setCapteurLuminosite($capteur_luminosite){
				if(is_bool($capteur_luminosite)){
					$this->_capteur_luminosite = $capteur_luminosite;
				}
				else{
					trigger_error('Le capteur de luminosité doit être un booléen.', E_USER_WARNING);
				}
			}
			
			public function setRegulateurVitesse($regulateur_vitesse){
				if(is_bool($regulateur_vitesse)){
					$this->_regulateur_vitesse = $regulateur_vitesse;
				}
				else{
					trigger_error('Le régulateur de vitesse doit être un booléen.', E_USER_WARNING);
				}
			}
			
			public function setOptions($radar_recul,$capteur_pluie,$capteur_luminosite,$regulateur_vitesse){
				$this->setRadarRecul($radar_recul);
				$this->setCapteurPluie($capteur_pluie);
				$this->setCapteurLuminosite($capteur_luminosite);
				$this->setRegulateurVitesse($regulateur_vitesse);
			}
			
			public function displayVoiture(){
				parent::displayVehicule();
				echo	'<br/>Type: Voiture'
							.'<br/>- Peinture: '.$this->_peinture
							.'<br/> - Couleur: '.$this->_couleur
							.'<br/> - Boîte de vitesses: '.$this->_boite
							.'<br/> - Nombre de portes: '.$this->_nb_porte
							.'<br/> - Radar de recul: '.$this->_radar_recul
							.'<br/> - Capteur de pluie: '.$this->_capteur_pluie
							.'<br/> - Capteur de luminosité: '.$this->_capteur_luminosite
							.'<br/> - Régulateur de vitesse: '.$this->_regulateur_vitesse;
			}
		}
	
		echo '$berline = new Voiture("Volkswagen","Polo",10982,"rouge");<br/>
		$coupe = new Voiture("Peugeot","308",109098,"bleu", "metalisee", "automatique", 2, true, true, false, true);<br/>
		$berline->setPeinture("nacree");<br/>
		$berline->setOptions(false,true,false,true);<br/>
		$berline->setPrix(5666);<br/>
		<br/>
		$berline->displayVoiture();<br/>-------------------<br/>';
		
		
		$berline = new Voiture("Volkswagen","Polo",30255,"rouge");
		$coupe = new Voiture("Peugeot","308",109098,"bleu", "metalisee", "automatique", 2, true, true, false, true);
		$berline->setPeinture("nacree");
		$berline->setOptions(false,true,false,true);
		$berline->setPrix(5666);
		
		$berline->displayVoiture();
		echo '<br/><br/>$coupe->displayVoiture();<br/>-------------------<br/>';
		$coupe->displayVoiture();
		
		echo '<br/><br/><br/>';
		echo '<h2>2.5</h2>';
		echo 'On peut modifier la valeur des attributs marque, modèle et prix des voitures en utilisant simplement les méthodes<br/>comme si elles appartenaient à la classe voiture.<br/>
		Exemple: $berline->setPrix(5666)<br/><br/>';
		
		$bmw = new Vehicule("BMW","Z4",35000);
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
