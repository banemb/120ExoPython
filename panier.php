


<?php
//connexion a la base de donnee
require ('../config/connexion.php');
$host = 'localhost';
$bdname = 'bluepod';
$root = 'root';
$password = ''; 
$pdo = connexionBD($host ,$bdname , $root , $password);

session_start();

// Vérifier si des ID sont stockés dans la session
if (isset($_SESSION['produits_ids']) && !empty($_SESSION['produits_ids'])) {
    $produits_ids = $_SESSION['produits_ids'];
    
    // Convertir les ID en une chaîne pour l'inclure dans une requête SQL IN clause
    $ids_string = implode(',', $produits_ids);
    
    // Récupérer les produits correspondants depuis la base de données
    $requete = $pdo->prepare("SELECT * FROM produit WHERE Id_produit IN ($ids_string)");
    $requete->execute();
    $produits = $requete->fetchAll(PDO::FETCH_ASSOC);   
   // var_dump($produits);    
 
    // Afficher les produits
    // foreach ($produits as $produit) {
    //     echo "Produit : " . $produit['nom_produit'] . "<br>";
    //     echo "Prix : " . $produit['prix'] . "<br><br>";
    // }
} else {
    echo "Aucun produit dans le panier.";
}

?>



<!-- on inclus la barre de navigation  -->
<?php
    require ('../includes/navProduitDetail.php');
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>

    <!-- importation du style css -->
    <link rel="stylesheet" href="../assets/css/produit-ess.css">
    <link rel="stylesheet" href="../assets/css/produit.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
 <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f2f2f2;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .panier-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .panier-container ul {
            list-style: none;
        }

        .panier-container li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ccc;
        }

        .panier-container li:last-child {
            border-bottom: none;
        }

        .panier-container a {
            color: #ff5722;
            text-decoration: none;
        }

        .empty-cart {
            text-align: center;
            color: #666;
            margin-top: 20px;
        }

        .empty-cart a {
            color: #ff5722;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Panier</h1>
    
    <div class="panier-container">
            <ul>
                    <li>
                        <span>
                        </span>
                        <span>
                        </span>
                        <span>
                        </span>
                        <span>
                        </span>
                        <a href="../views/page_produit.php">Supprimer</a>
                    </li>
            </ul>
            <p class="empty-cart">Le panier est vide. <a href="../views/page_produit.php">Continuer vos achats</a></p>
    </div>
    
    <p>
        <a href="../views/Page_produit.php">Vider le panier</a>
    </p>
</body>
</html>

