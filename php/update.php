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

        $query = "UPDATE inscription SET nom = '$nom', prenom = '$prenom', email = '$email', telephone = '$telephone' WHERE idinscription = $idEleve";
        $result = $connexion->query($query);
        
        if ($result) {
            echo "Mise à jour réussie pour l'élève avec ID $idEleve.<br>";
        } else {
            echo "Erreur lors de la mise à jour pour l'élève avec ID $idEleve : " . $connexion->error . "<br>";
        }
    }
}

header("Location: /inscription-nws-3/administration.php");
exit();
?>
