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

<?php include ('php/post.php') ?>

<body>

    <!-- NAV BAR  -->

    <nav class="c-navbar-top">
    </nav>
    
    <nav class="nav2">
        <div>
            <a href="index.php"><img src="Logo_nws.png"></a>
        </div>
        <div class="text nav-text">
            <a href="connexion-admin.html">Administration</a>
        </div>
    </nav>

    <!-- INSCRIPTION -->

    <h1>
        Formulaire d'inscription
    </h1>
    
    <!-- BOUTONS -->

    <div class="form-style-8">
        <form method = "post">
          <input type="text" name="nom" placeholder="Nom" required/>
          <input type="text" name="prenom" placeholder="Prenom" required/>
          <input type="email" name="email" placeholder="Email" required/>
          <input type="phone" name="telephone" placeholder="Téléphone" required/>
          <input type="submit" value="Valider" />
        </form>
    </div> 

    <!-- FOOTER COLOR -->

    <div class="bottom-decoration">
        <div class="red"></div>
        <div class="blue"></div>
        <div class="yellow"></div>
    </div>
</body>