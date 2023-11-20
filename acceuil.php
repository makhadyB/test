<?php
session_start();
if (!isset($_SESSION['masession'])) {
  header("location:index.php");
}

include("/xampp/htdocs/SOLUTION_B/config/db.php");
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">


  <title>accueil</title>
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
        .produit .prix {
            font-weight: bold;
            
            margin-top: 10px;
        }
    </style>
</head>

<body>
<?php
    include('/xampp/htdocs/SOLUTION_B/pages/navbar.php'); ?>
  <div id="contenu" class="contenu">
  <div class="container">
        <h1 class="text-center">LE DIANWANDOU stock produits</h1>
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
                        <p class="quantite"> quantite:<?php echo $produit['quantite']; ?> </p>
                        
                    </div>
                </div>
                <?php
            }

            // Fermeture de la connexion à la base de données
            $recupProduits->closeCursor();
            ?>
        </div>
    </div>
    </div>
   


    <?php

    if (isset($_REQUEST['contenu'])) {
      $contenu = $_REQUEST['contenu'];
      switch ($contenu) {
        case 'logout';
          include("/xampp/htdocs/SOLUTION_B/logout.php");
          break;
        case 'home';
          include("/xampp/htdocs/SOLUTION_B/pages/home.php");
          break;
        case 'inscription';
          include("/xampp/htdocs/SOLUTION_B/inscription.php");
          break;

        case 'acceuil';
          include("/xampp/htdocs/SOLUTION_B/acceuil.php");
          break;
        case 'index';
          include("/xampp/htdocs/SOLUTION_B/index.php");
          break;
        case 'ajoutpaiement';
          include("/xampp/htdocs/SOLUTION_B/pages/ajoutpaiement.php");
          break;
        case 'ajoutcommande';
          include("/xampp/htdocs/SOLUTION_B/pages/ajoutcommande.php");
          break;
        case 'ajoutfacture';
          include("/xampp/htdocs/SOLUTION_B/pages/ajoutfacture.php");
          break;
        case 'ajoutclient';
          include("/xampp/htdocs/SOLUTION_B/pages/ajoutclient.php");
          break;
        case 'ajoutligneCommande';
          include("/xampp/htdocs/SOLUTION_B/pages/ajoutligneCommande.php");
          break;
        case 'ajoutbf';
          include("/xampp/htdocs/SOLUTION_B/pages/ajoutbf.php");
          break;
        case 'ajoutlettre';
          include("/xampp/htdocs/SOLUTION_B/pages/ajoutlettre.php");
          break;

        case 'supppaiement';
          include("/xampp/htdocs/SOLUTION_B/pages/supppaiement.php");
          break;
        case 'suppcommande';
          include("/xampp/htdocs/SOLUTION_B/pages/suppcommande.php");
          break;
        case 'suppfacture';
          include("/xampp/htdocs/SOLUTION_B/pages/suppfacture.php");
          break;
        case 'suppclient';
          include("/xampp/htdocs/SOLUTION_B/pages/suppclient.php");
          break;
        case 'suppligneCommande';
          include("/xampp/htdocs/SOLUTION_B/pages/suppligneCommande.php");
          break;
        case 'suppbf';
          include("/xampp/htdocs/SOLUTION_B/pages/suppbf.php");
          break;
        case 'supplettre';
          include("/xampp/htdocs/SOLUTION_B/pages/supplettre.php");
          break;

        case 'listepaiement';
          include("/xampp/htdocs/SOLUTION_B/pages/listepaiement.php");
          break;
        case 'listecommande';
          include("/xampp/htdocs/SOLUTION_B/pages/listecommande.php");
          break;
        case 'listefacture';
          include("/xampp/htdocs/SOLUTION_B/pages/listefacture.php");
          break;
        case 'listeclient';
          include("/xampp/htdocs/SOLUTION_B/pages/listeclient.php");
          break;
        case 'listeligneCommande';
          include("/xampp/htdocs/SOLUTION_B/pages/listeligneCommande.php");
          break;
        case 'listebf';
          include("/xampp/htdocs/SOLUTION_B/pages/listebf.php");
          break;
        case 'listelettre';
          include("/xampp/htdocs/SOLUTION_B/pages/listelettre.php");
          break;

        case 'modifpaiement';
          include("/xampp/htdocs/SOLUTION_B/pages/modifpaiement.php");
          break;
        case 'modifcommande';
          include("/xampp/htdocs/SOLUTION_B/pages/modifcommande.php");
          break;
        case 'modiffacture';
          include("/xampp/htdocs/SOLUTION_B/pages/modiffacture.php");
          break;
        case 'modifclient';
          include("/xampp/htdocs/SOLUTION_B/pages/modifclient.php");
          break;
        case 'modifligneCommande';
          include("/xampp/htdocs/SOLUTION_B/pages/modifligneCommande.php");
          break;
        case 'modifbf';
          include("/xampp/htdocs/SOLUTION_B/pages/modifbf.php");
          break;
        case 'modiflettre';
          include("/xampp/htdocs/SOLUTION_B/pages/modiflettre.php");
          break;
      }
    }

    ?>


</body>

</html>