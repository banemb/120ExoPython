<?php
    include ('../includes/ProduitBD.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- ====== import des lien ======-->
<link rel="stylesheet" href="../assets/css/footer.css">
<link rel="stylesheet" href="../assets/css/navbar.css">
<link rel="stylesheet" href="../assets/css/header.css">
<link rel="stylesheet" href="../assets/css/produit.css">
</head>
<body>

    <!---============= nav===========-->
<?php 
 require('../includes/navAcceuil.php');
?>
<!---=============fin  nav===========-->

<?php 
 require('../includes/headerAccueil.php');
?>

<!--============ sous_header ======-->

<?php 
 require('../includes/headerProduit.php');
?>
<!-- ============= fin section =======-->
<?php 
 require('../includes/produitAccueil.php');
?>
<!-- ====== footer ====-->

<?php 
 require('../includes/footer.php');
?>
<!-- fin footer-->

</body>
</html>