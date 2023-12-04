<?php
    if(isset($_POST['send'])){
        if(isset($_POST['Date']) &&
        isset($_POST['ClientId']) &&
        $_POST['Date'] != "" &&
        $_POST['ClientId'] != ""
        ){
        include_once "../connect_bdd.php";
        extract($_POST);

        $sql = "INSERT INTO orders (Date, ClientId) VALUES ('$date','$ClientId')";
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
    <title>Ajouter une commande</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <form action="" method="post">
        <h1>Ajouter une commande</h1>
            <input type="text" name="Date" placeholder="YYYY-MM-JJ">
            <input type="text" name="ClientId" placeholder="Id Client">
            <input type="submit" value="Ajouter" name="send">
            <a class="link back" href="../accueil">Annuler</a>
    </form>
</body>
</html>