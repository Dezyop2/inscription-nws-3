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
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/admin.css">

   
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



    <!-- TABLEAU DE RECHERCHE -->

    <div class="search-results">
        <form method='post' action="php/update.php">
            <?php
            if (isset($_POST['send'])) {
                $search = $_POST['search'];
                $query = "SELECT * FROM inscription WHERE nom LIKE '%$search%' AND suppr = 0 OR prenom LIKE '%$search%' AND suppr = 0";
                $result = $connexion->query($query);

                echo '<div class="tableau-admin"><table><thead>';
                echo '<tr><th>Nom</th><th>Prénom</th><th>Email</th><th>Téléphone</th><th>Modifier</th><th>Supprimer</th></tr>';
                echo '</thead>';

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<tbody>';
                        echo '<tr>';
                        echo '<td><input type="text" name="nom[]" value="' . $row["nom"] . '"></td>';
                        echo '<td><input type="text" name="prenom[]" value="' . $row["prenom"] . '"></td>';
                        echo '<td><input type="text" name="email[]" value="' . $row["email"] . '"></td>';
                        echo '<td><input type="text" name="telephone[]" value="' . $row["telephone"] . '"></td>';
                        echo '<td><input type="hidden" name="ideleves[]" value="' . $row["idinscription"] . '"><input type="submit" name="modifier" value="Modifier"></td>';
                        echo '<td><a href="php/suppr.php?id=' . $row["idinscription"] . '">X</a></td>';
                        echo '</tr>';
                        echo '</tbody>';
                    }                 
                } else {
                    echo '<tr><td colspan="4">Aucun résultat trouvé.</td></tr>';
                }

                echo '</table>';
            }
            ?>
        </form>
    </div>


    <!-- FOOTER COLOR -->

    <div class="bottom-decoration">
        <div class="red"></div>
        <div class="blue"></div>
        <div class="yellow"></div>
    </div>

</body>
</html>