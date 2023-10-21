<?php
if (isset($_POST['suppr_id'])) {
    // Récupérez l'identifiant de "suppr" et assurez-vous qu'il est sécurisé pour éviter les attaques par injection SQL
    $suppr_id = $_POST['suppr_id'];
    $new_suppr = 1; // Nouvelle valeur pour la colonne "suppr"

    // Effectuez la mise à jour dans la base de données
    $sql = "UPDATE inscription SET suppr = $new_suppr WHERE suppr = $suppr_id";

    if ($connexion->query($sql) === TRUE) {
        echo "Mise à jour réussie.";
    } else {
        echo "Erreur lors de la mise à jour : " . $connexion->error;
    }
}

// Redirigez l'utilisateur vers la page précédente ou une autre page appropriée
header("administration2.php");
exit();
?>
