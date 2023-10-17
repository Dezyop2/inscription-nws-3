<?php

// Vérifie si le formulaire a été soumis via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Paramètres de connexion à la base de données
    $serveur = "localhost:3306"; // Adresse du serveur MySQL
    $utilisateur = "root"; // Nom d'utilisateur MySQL
    $motdepasse = ""; // Mot de passe MySQL
    $basededonnees = "inscription-nws"; // Nom de la base de données

    // Connexion à la base de données en utilisant les paramètres définis ci-dessus
    $connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);

    // Vérifie si la connexion à la base de données a échoué
    if ($connexion->connect_error) {
        // En cas d'échec de la connexion, affiche un message d'erreur et arrête l'exécution du script
        die("La connexion à la base de données a échoué : " . $connexion->connect_error);
    }

    // Récupère les données du formulaire soumises via la méthode POST
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];

    // Requête SQL pour insérer les données du formulaire dans la table "inscrit"
    $sql = "INSERT INTO inscription (nom, prenom, email, telephone)
            VALUES ('$nom', '$prenom', '$email', '$telephone')";
    if ($connexion->query($sql) === TRUE){
        // Redirige vers une page de confirmation d'inscription en cas de succès
        header("Location: inscription-reussie.php");
        exit(); // Arrête l'exécution du script après la redirection
    } else {
        // En cas d'erreur lors de l'exécution de la requête SQL, affiche un message d'erreur
        echo "Error: " . $sql . "<br>" . $connexion->error;
    }

    // Ferme la connexion à la base de données
    $connexion->close();
}   
?>
