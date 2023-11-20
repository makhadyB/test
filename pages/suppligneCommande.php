
<?php

include("/xampp/htdocs/SOLUTION_B/config/db.php");

$idLC=$_GET['idLC'];
    $req=$connexion->prepare("DELETE FROM lignecommande WHERE idLC=?");
    $req->execute(array($idLC));



if ($req) {
   $location = $_SERVER['HTTP_REFERER'];
    //header("Location:?contenu=listeLigneCommande");

}
?>