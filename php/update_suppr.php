<?php
include('php/connexion.php');

if (isset($_POST['suppr'])) {
    $id = $_POST['suppr'];
    $query = "UPDATE inscription SET suppr = 1 WHERE suppr = $id";
    if ($connexion->query($query)) {
        echo 'success';
    } else {
        echo 'error';
    }
}

header("Location: /inscription-nws-3/administration2.php");
exit();

?>
