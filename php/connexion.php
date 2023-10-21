<?php
$serveur = "localhost:3306";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "inscription-nws";

// Connexion à la base de données en utilisant les paramètres définis ci-dessus
$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}
?>
