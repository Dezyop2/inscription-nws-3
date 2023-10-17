<?php include ('php/post.php');

$password = "ratiobozo"; // Remplacez "votre_mot_de_passe" par le mot de passe réel

if (!isset($_COOKIE['authenticated']) || $_COOKIE['authenticated'] !== $password) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/66ce4227d4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">   
   
    <title>Inscription</title>
</head>

<body>

    <!-- NAV BAR ADMIN -->

    <nav class="c-navbar-top">
    </nav>
    
    <nav class="nav2">
        <div>
            <img src="Logo_nws.png">
        </div>
        <div class="text nav-text">
            <a href="">Administration</a>
        </div>
        <div class="text nav-text">
            <a href="">Administration</a>
        </div>
    </nav>

    <!-- FOOTER COLOR -->

    <div class="bottom-decoration">
        <div class="red"></div>
        <div class="blue"></div>
        <div class="yellow"></div>
    </div>
</body>