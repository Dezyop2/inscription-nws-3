<?php 

include('php/connexion.php');

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

    <div class="search-bar">
        <form method="POST" action="administration2.php">
            <input type="text" name="search" placeholder="Rechercher par nom...">
            <button type="submit" name="send">Rechercher</button>
        </form>
    </div>

    <div class="search-results">
        <?php
        if (isset($_POST['send'])) {
            $search = $_POST['search'];
            $query = "SELECT * FROM inscription WHERE nom LIKE '%$search%' OR prenom LIKE '%$search%'";
            $result = $connexion->query($query);

            echo '<table class="tableau-admin">';
            echo '<tr><th>Nom</th><th>Prénom</th><th>Email</th><th>Téléphone</th></tr>';

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['nom'] . '</td>';
                    echo '<td>' . $row['prenom'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '<td>' . $row['telephone'] . '</td>';
                    echo '<td>';
                    echo '<form method="POST" action="modifier_suppr.php">';
                    echo '<input type="hidden" name="id" value="' . $row['suppr'] . '">';
                    echo '<button type="submit">Modifier suppr</button>';
                    echo '</form>';
                    echo '</td>';
                    echo '</tr>';
                }                
            } else {
                echo '<tr><td colspan="4">Aucun résultat trouvé.</td></tr>';
            }

            echo '</table>';
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