
<?php

include("/xampp/htdocs/SOLUTION_B/config/db.php");

$numP=$_GET['numP'];
    $req=$connexion->prepare("DELETE FROM paiement WHERE numP=?");
    $req->execute(array($numP));



if ($req) {
   $location = $_SERVER['HTTP_REFERER'];
   // header("Location:?contenu=listeCommande");

}
?>
