<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $serveur = "localhost:3306"; 
    $utilisateur = "root";
    $motdepasse = "";
    $basededonnees = "inscription-nws"; 

    $connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);

    if ($connexion->connect_error) {
        die("La connexion à la base de données a échoué : " . $connexion->connect_error);
    }

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];

    $sql = "INSERT INTO inscription (nom, prenom, email, telephone)
            VALUES ('$nom', '$prenom', '$email', '$telephone')";
    if ($connexion->query($sql) === TRUE){
        header("Location: inscription-reussie.php");
        exit(); 
    } else {
        echo "Error: " . $sql . "<br>" . $connexion->error;
    }

    $connexion->close();
}   
?>
