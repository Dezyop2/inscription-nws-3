<?php
$serveur = "localhost:3306";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "inscription-nws";

$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);

if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}
?>
