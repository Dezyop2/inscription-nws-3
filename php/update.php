<?php
include('connexion.php');

if (isset($_POST['modifier'])) {
    $idEleves = $_POST['ideleves'];
    $noms = $_POST['nom'];
    $prenoms = $_POST['prenom'];
    $emails = $_POST['email'];
    $telephones = $_POST['telephone'];

    for ($i = 0; $i < count($idEleves); $i++) {
        $idEleve = $idEleves[$i];
        $nom = $noms[$i];
        $prenom = $prenoms[$i];
        $email = $emails[$i];
        $telephone = $telephones[$i];

        // Effectuer la mise à jour dans la base de données
        $query = "UPDATE inscription SET nom = '$nom', prenom = '$prenom', email = '$email', telephone = '$telephone' WHERE idinscription = $idEleve";
        $result = $connexion->query($query);
        
        if ($result) {
            // Mise à jour réussie
            echo "Mise à jour réussie pour l'élève avec ID $idEleve.<br>";
        } else {
            // Erreur lors de la mise à jour
            echo "Erreur lors de la mise à jour pour l'élève avec ID $idEleve : " . $connexion->error . "<br>";
        }
    }
}

// Rediriger vers la page d'origine ou une autre page après la mise à jour
header("Location: /inscription-nws-3/administration.php");
exit();
?>
