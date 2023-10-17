<?php
include ('connexion.php');

$sql1 = "SELECT * FROM inscription ORDER BY nom ";

$resultat1 = $connexion->query($sql1);

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
?>
