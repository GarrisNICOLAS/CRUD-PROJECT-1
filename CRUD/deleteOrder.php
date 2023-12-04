<?php
    $order_id = $_GET['Id'];
    include_once "../connect_bdd.php";
    $sql = "DELETE FROM orders WHERE Id = $order_id ";
    if (mysqli_query($conn, $sql)) {
        header("location:../accueil.php?message=DeleteSuccess");
    } else {
        header("location:../accueil.php?message=DeleteFail");
    }
?>