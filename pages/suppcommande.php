
<?php

include("/xampp/htdocs/SOLUTION_B/config/db.php");

$idC=$_GET['idC'];
    $req=$connexion->prepare("DELETE FROM commande WHERE idC=?");
    $req->execute(array($idC));



if ($req) {
   $location = $_SERVER['HTTP_REFERER'];
   // header("Location:?contenu=listeCommande");

}
 ?>