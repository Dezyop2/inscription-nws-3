<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo_nws.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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

    <!-- TABLEAU ADMIN -->
    
    <form class="selection" method="GET">
        <select id="trier" name="trier">
            <optgroup label="trier par :">
                <option value="tNom">Nom</option>
                <option value="tPrenom">Prénom</option>
                <option value="tEmail">Email</option>
                <option value="tTel">Téléphone</option>
            </optgroup>
        </select>
        <input type="submit" value="Trier">
    </form>

    <div class="tableau-admin">
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include ('php/get.php');
                    $trier = isset($_GET['trier']) ? $_GET['trier'] : 'tNom';
                    ListeInscri($trier);
                ?>
            </tbody>
        </table>
    </div>


    <!-- FOOTER COLOR -->

    <div class="bottom-decoration">
        <div class="red"></div>
        <div class="blue"></div>
        <div class="yellow"></div>
    </div>
</body>