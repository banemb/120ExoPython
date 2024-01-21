<?php
    /*require('../config/commandes.php');

    $produit = afficher_produit();*/
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--============= -produit.css======-->
<link rel="stylesheet" href="../assets/css/produit.css">
<link rel="stylesheet" href="../assets/css/navbar.css">
<link rel="stylesheet" href="../assets/css/footer.css">
<link rel="stylesheet" href="../assets/css/_produit.css">
</head>
<body >


<!-- ============ navbar produit apres connrction =========-->

<?php
    require('../includes/navProduit.php');
?>
    


<!-- ============ navbar produit apres connrction =========-->
<!-- ====== footer ====-->
<?php
    require('../includes/footer.php');
?>

<!-- fin footer-->
</body>
</html>