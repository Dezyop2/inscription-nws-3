<?php 

include ('php/post.php');

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

if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $query = "SELECT * FROM inscription WHERE nom LIKE '%$search%' OR prenom LIKE '%$search%'"; 
    $result = $connexion->query($query); // Utilisez $connexion pour exécuter la requête
} else {
    $query = "SELECT * FROM inscription";
    $result = $connexion->query($query); // Utilisez $connexion pour exécuter la requête
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo_nws.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/66ce4227d4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css" href="css/admin.css">   
   
    <title>Inscription</title>
</head>

<body>

    <!-- NAV BAR ADMIN -->

    <nav class="c-navbar-top">
    </nav>
    
    <nav class="nav2">
        <div>
            <a href="index.php"><img src="Logo_nws.png"></a>
        </div>
        <div class="text nav-text">
            <a href="administration.php">Liste des contacts</a>
        </div>
        <div class="text nav-text">
            <a href="administration2.php">Modifier les contacts</a>
        </div>
    </nav>

    <!-- BARRE DE RECHERCHE -->

    <div class="recherche-barre">
        <form method="post" action="administration3.php">
            <input type="text" name="search" placeholder="Rechercher...">
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>

    <!-- Résultats de la recherche -->
    <div class="resultats">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="resultat-item">';
            echo '<p>' . $row['nom'] . ' ' . $row['prenom'] . '</p>'; // Personnalisez l'affichage selon votre structure de base de données
            echo '</div>';
        }
        ?>
    </div>

    <!-- FOOTER COLOR -->

    <div class="bottom-decoration">
        <div class="red"></div>
        <div class="blue"></div>
        <div class="yellow"></div>
    </div>
</body>