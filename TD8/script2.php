<?php  

$user="pr607695";
$pass="pr607695";
$host="linserv-info-01.iutnice.unice.fr";
$bd="pr607695";

$mysqli = new mysqli($host, $user, $pass, $bd);
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$req = $mysqli->query(" insert into annuaire (nom,prenom, numPoste) values('Floda', 'Relti', '12.12');");

?>