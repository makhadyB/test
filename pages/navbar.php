<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/style/bootstrap/css/bootstrap.min.css">
  <script src="/style/bootstrap//js//bootstrap.bundle.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body id="id">
  <script src="../style/bootstrap/mode.js"></script>

  <br>

  <hr style="color:black">
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="?contenu=logout">Deconnexion</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="?contenu=home">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Client
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?contenu=ajoutclient">Ajout client</a></li>
                <li><a class="dropdown-item" href="?contenu=listeclient">liste client</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>

              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Commande
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?contenu=ajoutcommande">Ajout commande</a></li>
                <li><a class="dropdown-item" href="?contenu=listecommande">liste commande</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>

              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Bon facturation
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?contenu=ajoutbf">Ajout bon</a></li>
                <li><a class="dropdown-item" href="?contenu=listebf">liste bon</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>

              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Facture
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?contenu=ajoutfacture">Ajout facture</a></li>
                <li><a class="dropdown-item" href="?contenu=listefacture">liste facture</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>

              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                lettre
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?contenu=ajoutlettre">Ajout lettre</a></li>
                <li><a class="dropdown-item" href="?contenu=listelettre">liste lettre</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                ligne commande
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?contenu=ajoutligneCommande">Ajout ligne commande</a></li>
                <li><a class="dropdown-item" href="?contenu=listeligneCommande">liste ligne commande</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Paiement
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?contenu=ajoutpaiement">Ajout Paiement</a></li>
                <li><a class="dropdown-item" href="?contenu=listepaiement">liste Paiement</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>

              </ul>
            </li>

          </ul>

        </div>
      </div>
    </div>
  </nav>
</body>

</html>