<?php
    $product_reference = $_GET['Reference'];
    include_once "../connect_bdd.php";
    $sql = "DELETE FROM products WHERE Reference = $product_reference ";
    if (mysqli_query($conn, $sql)) {
        header("location:../accueil.php?message=DeleteSuccess");
    } else {
        header("location:../accueil.php?message=DeleteFail");
    }
?>