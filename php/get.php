<?php
function ListeInscri($trier) {
    include ('connexion.php');

    switch ($trier) {
        case 'tNom':
            $sql = "SELECT * FROM inscription WHERE suppr = 0 ORDER BY nom";
            break;
        case 'tPrenom':
            $sql = "SELECT * FROM inscription WHERE suppr = 0 ORDER BY prenom";
            break;
        case 'tEmail':
            $sql = "SELECT * FROM inscription WHERE suppr = 0 ORDER BY email";
            break;
        case 'tTel':
            $sql = "SELECT * FROM inscription WHERE suppr = 0 ORDER BY telephone";
            break;
        default:
            $sql = "SELECT * FROM inscription WHERE suppr = 0 ORDER BY nom";
            break;
    }

    $resultat1 = $connexion->query($sql);

    if ($resultat1->num_rows > 0) {
        while ($row = $resultat1->fetch_assoc()) {
            echo "<tr";
            echo ">";
        
            echo "<td>" . $row["nom"] . "</td>";
            echo "<td>" . $row["prenom"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["telephone"] . "</td>";
        
            echo "</tr>";
        }
    } else {
        echo "Aucun résultat trouvé dans la table 'inscription'.";
    }

    $connexion->close();
}
?>
