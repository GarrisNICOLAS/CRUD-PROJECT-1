<?php
    if(isset($_POST['send'])){
        if(isset($_POST['Reference']) &&
        isset($_POST['Price']) &&
        isset($_POST['Designation']) &&
        isset($_POST['Stock']) &&
        $_POST['Reference'] != "" &&
        $_POST['Designation'] != "" &&
        $_POST['Price'] != "" &&
        $_POST['Stock'] != ""
        ){
        include_once "../connect_bdd.php";
        extract($_POST);

        $sql = "INSERT INTO products (Reference, Designation, Price, Stock) VALUES ('$Reference','$Designation','$Price','$Stock')";
        if (mysqli_query($conn, $sql)){
            header("location:../accueil.php");
        }else{
            header("location:../accueil.php?message=AddFail");
        }
    }else{
        header("location:../accueil.php?message=EmptyFields");
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <form action="" method="post">
        <h1>Ajouter un produit</h1>
            <input type="text" name="Reference" placeholder="Réference">
            <input type="text" name="Designation" placeholder="Designation">
            <input type="text" name="Price" placeholder="Prix en €">
            <input type="text" name="Stock" placeholder="Stock">
            <input type="submit" value="Ajouter" name="send">
            <a class="link back" href="../accueil">Annuler</a>
    </form>
</body>
</html>