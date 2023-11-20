<?php
include("/xampp/htdocs/SOLUTION_B/config/db.php");
if (isset($_GET['idcl'])) {
    $idcl = $_GET['idcl'];
    $req = $connexion->prepare("DELETE FROM client WHERE idcl=?");
    $req->execute(array($idcl));
  
    if ($req) {
     // header("Location:?contenu=listeclient");
    }
  } else {
    // afficher un message d'erreur ou rediriger l'utilisateur
  }
  
?>