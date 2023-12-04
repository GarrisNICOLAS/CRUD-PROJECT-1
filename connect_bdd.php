<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "store";

// Créer la connection
    $conn = mysqli_connect($host, $username, $password, $dbname);

// Vérifier la connection
    if (!$conn) {
        die("Echec de la connection: " . mysqli_connect_error());
    }
?>