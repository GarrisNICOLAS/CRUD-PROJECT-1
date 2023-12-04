<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<main>
</br>
    <div class="link_container">
        <a class="link" href="CRUD/addClient.php">Ajouter un utilisateur</a>
    </div>


    <table>
        <thread>
            <?php
            include_once "connect_bdd.php";
            //liste des clients
            $sql = "SELECT * FROM clients";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0){
            //afficher les utilisateurs
            ?>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thread>
        <tbody>
        <?php
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?=$row['LastName']?></td>
                <td><?=$row['FirstName']?></td>
                <td><?=$row['Address']?></td>
                <td><?=$row['City']?></td>
                <td class = "image"><a href="CRUD/modifyClient.php?Id=<?=$row['Id']?>"><img src="images/write.png" alt=""></a></td>
                <td class = "image"><a href="CRUD/deleteClient.php?Id=<?=$row['Id']?>"><img src="images/remove.png" alt=""></a></td>
            </tr>

            <?php
            }
        }
        else {
            echo " <p class='message'> Aucun client présent !</p> ";
        }
        ?>

        </tbody>
    </table>
    
    </br>
    <div class="link_container">
        <a class="link" href="CRUD/addOrder.php">Ajouter une commande</a>
    </div>
    <table>
        <thread>
            <?php
            include_once "connect_bdd.php";
            //liste des factures
            $sql = "SELECT * FROM orders";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0){
            //afficher les factures
            ?>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>ID Client</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thread>
        <tbody>
        <?php
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?=$row['Id']?></td>
                <td><?=$row['Date']?></td>
                <td><?=$row['ClientId']?></td>
                <td class = "image"><a href="CRUD/modifyOrder.php?Id=<?=$row['Id']?>"><img src="images/write.png" alt=""></a></td>
                <td class = "image"><a href="CRUD/deleteOrder.php?Id=<?=$row['Id']?>"><img src="images/remove.png" alt=""></a></td>
            </tr>

            <?php
            }
        }
        else {
            echo " <p class='message'> Aucune commande présente !</p> ";
        }
        ?>

        </tbody>
    </table>

    </br>
    <div class="link_container">
        <a class="link" href="CRUD/addProduct.php">Ajouter un produit</a>
    </br>
    </br>
    <table>
        <thread>
            <?php
            include_once "connect_bdd.php";
            //liste des produits
            $sql = "SELECT * FROM products";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0){
            //afficher les produits
            ?>
            <tr>
                <th>Référence</th>
                <th>Désignation</th>
                <th>Prix</th>
                <th>Stock</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thread>
        <tbody>
        <?php
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?=$row['Reference']?></td>
                <td><?=$row['Designation']?></td>
                <td><?=$row['Price']?></td>
                <td><?=$row['Stock']?></td>
                <td class = "image"><a href="CRUD/modifyProduct.php?Reference=<?=$row['Reference']?>"><img src="images/write.png" alt=""></a></td>
                <td class = "image"><a href="CRUD/deleteProduct.php?Reference=<?=$row['Reference']?>"><img src="images/remove.png" alt=""></a></td>
            </tr>

            <?php
            }
        }
        else {
            echo " <p class='message'> Aucun produit présent !</p> ";
        }
        ?>

        </tbody>
    </table>
</main>
</body>
</html>