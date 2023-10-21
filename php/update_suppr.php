<?php
include('php/connexion.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "UPDATE inscription SET suppr = 1 WHERE id = $id";
    if ($connexion->query($query)) {
        echo 'success';
    } else {
        echo 'error: ' . $connexion->error;
    }
}

header("Location: /inscription-nws-3/administration.php");
exit();

?>
