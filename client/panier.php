<?php
session_start();
// Inclure le fichier de configuration de la base de données avec la connexion PDO
include("/xampp/htdocs/SOLUTION_B/config/db.php");

// Si l'utilisateur a cliqué sur le bouton "Ajouter au panier" sur la page du produit, nous pouvons vérifier les données du formulaire
if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['product_id']) && is_numeric($_POST['quantity'])) {
    // Définir les variables post pour les identifier facilement, assurez-vous qu'elles sont des entiers
    $product_id = (int)$_POST['product_id'];
    $quantity = (int)$_POST['quantity'];
    // Préparer la requête SQL pour vérifier si le produit existe dans la base de données
    $stmt = $connexion->prepare('SELECT * FROM produit WHERE id = ?');
    $stmt->execute([$_POST['product_id']]);
    // Récupérer le produit depuis la base de données et le retourner sous forme de tableau associatif
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Vérifier si le produit existe (le tableau n'est pas vide)
    if ($product && $quantity > 0) {
        // Le produit existe dans la base de données, maintenant nous pouvons créer/mettre à jour la variable de session pour le panier
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            if (array_key_exists($product_id, $_SESSION['cart'])) {
                // Le produit existe dans le panier, donc nous mettons simplement à jour la quantité
                $_SESSION['cart'][$product_id] += $quantity;
            } else {
                // Le produit n'est pas dans le panier, donc nous l'ajoutons
                $_SESSION['cart'][$product_id] = $quantity;
            }
        } else {
            // Il n'y a pas de produits dans le panier, cela ajoutera le premier produit au panier
            $_SESSION['cart'] = array($product_id => $quantity);
        }
    }
    // Empêcher la soumission du formulaire lors d'un rechargement de la page
    header('location: index.php?page=cart');
    exit;
}
?>
