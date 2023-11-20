
<?php

include("/xampp/htdocs/SOLUTION_B/config/db.php");

$numeroFacture=$_GET['numeroFacture'];
    $req=$connexion->prepare("DELETE FROM facture WHERE numeroFacture=?");
    $req->execute(array($numeroFacture));



if ($req) {
  // $location = $_SERVER['HTTP_REFERER'];
   // header("Location:?contenu=listefacture");

}
?>