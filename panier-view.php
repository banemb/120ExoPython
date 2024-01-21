
<?php

//connexion a la base de donnee
require ('../config/connexion.php');
$host = 'localhost';
$bdname = 'bluepod';
$root = 'root';
$password = ''; 
$pdo = connexionBD($host ,$bdname , $root , $password);


session_start();

// Vérification si le panier existe dans la session
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
}

// Fonction pour ajouter un produit au panier
function ajouterAuPanier($idProduit, $nomProduit, $prixProduit) {
    $produit = array(
        'id' => $idProduit,
        'nom' => $nomProduit,
        'prix' => $prixProduit
    );

    // Ajouter le produit au panier
    $_SESSION['panier'][] = $produit;
}

// Fonction pour supprimer un produit du panier
function supprimerDuPanier($index) {
    if (isset($_SESSION['panier'][$index])) {
        unset($_SESSION['panier'][$index]);
        $_SESSION['panier'] = array_values($_SESSION['panier']); // Ré-indexer les éléments du tableau
    }
}

// Exemples d'ajout et de suppression de produits dans le panier

supprimerDuPanier(0);



// //on veridie si on un id
 if(!isset($_GET['id']) || empty($_GET['id'])){
     //je n'ai pas d'id
     header('Location:../includes/tutoproduit.php');
     exit;
 }
 

//je recuper l'id
$id = $_GET['id'];
//var_dump($id);
 //on va chercer le produit dans la bd
$sql = "SELECT * FROM  produit WHERE Id_produit = :id";

 //on prepare la requete
 $requete = $pdo->prepare($sql);

 //on injecte les valeurs
 $requete->bindValue(":id" , $id , PDO::PARAM_INT);

 //on execute la requete
 $requete->execute();

 //on recuper le produit
 $produits = $requete->fetch();

 //on verifie si produit est vide
 if(!$produits){
     //erreur 404
     http_response_code(404);
     echo 'article vide';
     exit;

     //on definie les variable
     $image=strip_tags($produits['images']);
     $prix=strip_tags($produits['prix']);
}
?>
