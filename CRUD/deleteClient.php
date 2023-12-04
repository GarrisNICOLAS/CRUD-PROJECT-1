<?php
    $client_id = $_GET['Id'];
    include_once "../connect_bdd.php";
    $sql = "DELETE FROM clients WHERE Id = $client_id ";
    if (mysqli_query($conn, $sql)) {
        header("location:../accueil.php?message=DeleteSuccess");
    } else {
        header("location:../accueil.php?message=DeleteFail");
    }
?>