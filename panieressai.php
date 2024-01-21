
<?php
    include ('../views/panier-view.php');
    include ('../includes/ProduitBD.php');

    session_start();
    var_dump($_SESSION['ids']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <!--======= style (panierStyle.css)======-->
    <link rel="stylesheet" href="../assets/css/panierStyle.css">
</head>
<body>
<?php
   // include ('../includes/navProduitDetail.php');
?>

    <h1>Panier</h1>
    
    <div class="panier-container">
            
    <div class="panier-container">
            <ul><hr>
                    <li>
                        <span>
                            <img src="../images/<?= $produits['images'] ?>" alt="" height="100px">
                        </span>
                        <span>
                            <?= $produits['prix'] ?> €
                        </span>
                        <span>
                            <?php //echo $product['quantite']; ?> 
                        </span>
                        <span>
                            <?php //echo $product['total']; ?> 
                        </span>
                        <a href="../includes/in1.php" <?php //echo $index; ?>">Supprimer</a>

            </ul><hr>
            <p class="empty-cart"> <a href="../views/Page_produit.php">Continuer vos achats</a></p>

    </div>
    
    <p>
        <a href="../views/Page_produit.php">Vider le panier</a>
    </p>
</body>
</html>
