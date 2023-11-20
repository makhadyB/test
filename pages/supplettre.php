
<?php

include("/xampp/htdocs/SOLUTION_B/config/db.php");

$numeroL=$_GET['numeroL'];
    $req=$connexion->prepare("DELETE FROM lettre WHERE numeroL=?");
    $req->execute(array($numeroL));



if ($req) {
   $location = $_SERVER['HTTP_REFERER'];
    //header("Location:?contenu=listelettre");

}
?>