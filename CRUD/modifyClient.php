<?php
    if(isset($_POST['send'])){
        if(isset($_POST['LastName']) &&
        isset($_POST['FirstName']) &&
        isset($_POST['Address']) &&
        isset($_POST['City']) &&
        $_POST['FirstName'] != "" &&
        $_POST['LastName'] != "" &&
        $_POST['Address'] != "" &&
        $_POST['City'] != ""
        ){
        include_once "../connect_bdd.php";
        extract($_POST);

        $sql = "INSERT INTO clients (LastName, FirstName, Address, City) VALUES ('$LastName'),('$FirstName'),('$Address'),('$City')";
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
    <title>Modifier un client</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <form action="" method="post">
        <h1>Modifier un client</h1>
            <input type="text" name="lastName" placeholder="Nom">
            <input type="text" name="firstName" placeholder="Prénom">
            <input type="text" name="adress" placeholder="Address">
            <input type="text" name="city" placeholder="Ville">
            <input type="submit" name="Ajouter" placeholder="Envoyer">
            <a class="link back" href="../accueil">Annuler</a>
    </form>
</body>
</html>