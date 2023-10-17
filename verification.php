<?php
$password = "ratiobozo";

if (isset($_POST['password']) && $_POST['password'] === $password) {
    // Mot de passe correct, rediriger vers la page protégée
    header('Location: administration.php');
} else {
    // Mot de passe incorrect, rediriger vers la page de connexion
    header('Location: index.php');
}
?>
