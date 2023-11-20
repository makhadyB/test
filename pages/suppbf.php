
<?php

include("/xampp/htdocs/SOLUTION_B/config/db.php");

$idBF=$_GET['idBF'];
    $req=$connexion->prepare("DELETE FROM bf WHERE idBF=?");
    $req->execute(array($idBF));



if ($req) {
   

}
?>
