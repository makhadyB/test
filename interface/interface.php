<?php
session_start();
if(!isset($_SESSION)){
    $_SESSION=array();
}
include("/xampp/htdocs/SOLUTION_B/config/db.php");

// Récupérer les produits depuis la base de données
$recupProduits = $connexion->query("SELECT * FROM produit");

// Vérifier si des produits ont été trouvés
if($recupProduits->rowCount() > 0) {
    $produits = $recupProduits->fetchAll();
} else {
    $produits = [];
}

// Fermeture de la connexion à la base de données
$connexion = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/bootstrap/css/bootstrap.min.css">
    <title>Ma Boutique en Ligne</title>
    <style>
        .produit {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
        }
        .produit img {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
        }
        .produit .titre {
            font-weight: bold;
            margin-top: 10px;
        }
        .produit .prix {
            font-weight: bold;
            color: #ff0000;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<img src="<?php echo $image['image_path']; ?>" alt="Image">
    <div class="container">
        <h1 class="text-center">Ma Boutique en Ligne</h1>
        <div class="row">
            <?php foreach($produits as $produit): ?>
                <div class="col-md-4">
                    <div class="produit">
                    <img src="<?php echo $produit['bin']; ?>" alt="<?php echo $produit['bin']; ?>">

                        <h3 class="titre"><?php echo $produit['nom']; ?></h3>
                        <p class="prix"><?php echo $produit['type']; ?> €</p>
                        <a href="#" class="btn btn-primary">Ajouter au panier</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
