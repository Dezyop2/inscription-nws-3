<?php
if(isset($_GET['id'])) {
    $supprid = $_GET['id'];

    include('connexion.php');

    $sqlDelete = "UPDATE inscription SET suppr = 1 WHERE idinscription = $supprid";

    if ($connexion->query($sqlDelete) === TRUE) {
        echo "Suppression réussie !";
    } else {
        echo "Erreur :(";
    }
} else {
    echo "ID introuvable...";
}

header("Location: /inscription-nws-3/administration2.php");
exit();

?>
