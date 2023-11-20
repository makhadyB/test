<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title>le Dianwandou</title>

    <link rel="icon" href="../client/img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="../client/css/core-style.css">
    
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
    
<div class="container">
        <h1 class="text-center">LE dianwandou stock produits</h1>
        <div class="row">
            <?php
            // Récupérer les produits depuis la base de données
            $recupProduits = $connexion->prepare("SELECT * FROM produit");
            $recupProduits->execute();

            // Afficher les produits
            while ($produit = $recupProduits->fetch()) {
                ?>
                <div class="col-md-4">
                    <div class="produit">
                        <img src="<?php echo $produit['image']; ?>" alt="<?php echo $produit['description']; ?>">
                        <h3 class="titre"><?php echo $produit['nom']; ?></h3>
                        <p class="prix"><?php echo $produit['prix']; ?> francs</p>
                        <a href="panier.php" class="btn btn-primary">Ajouter au panier</a>
                    </div>
                </div>
                <?php
            }

            // Fermeture de la connexion à la base de données
            $recupProduits->closeCursor();
            ?>
        </div>
    </div>
    
 


                

                

              
   

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="../client/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../clientjs/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../clientjs/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="../clientjs/plugins.js"></script>
    <!-- Active js -->
    <script src="../clientjs/active.js"></script>

</body>

</html>