<?php

if (isset($_POST['submit'])) {
  if (!empty($_POST['idcl']) && !empty($_POST['idC']) && !empty($_POST['dateC']) && !empty($_POST['qteC']) && !empty($_POST['prixC'])) {
    include("/xampp/htdocs/SOLUTION_B/config/db.php");

    $dateC = $_POST['dateC'];
    $idC = $_POST['idC'];
    $idcl = $_POST['idcl'];
    $prixC = $_POST['prixC'];
    $qteC = $_POST['qteC'];

    $insert = ("INSERT INTO lignecommande( idcl,idC, dateC,qteC,prixC) VALUES('$idcl','$idC','$dateC' ,'$qteC','$prixC')");


    $connexion->exec($insert);
    $location = $_SERVER['HTTP_REFERER'];
    if ($insert) {

      //header("Location:?contenu=ajoutligneCommande");
    }
  } else {
    echo "Veuillez saisir tous les champs";
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  include("/xampp/htdocs/SOLUTION_B/config/db.php");

  $req = "SELECT * from  client";
  $RequeteStatementclient = $connexion->query($req);
  $req = "SELECT * from commande";
  $RequeteStatementcommande = $connexion->query($req);

  ?>


<div class="p-3 mb-2 bg-white text-dark" align="center"><strong>FORMULAIRE AJOUT</strong> </div>
  <?php
  if ($RequeteStatementclient &&  $RequeteStatementcommande) { ?>


    <form action="" method="post">



      <div class="card-body">

        <div class="mb-3">

          <label for="" class="form-label">libellé commande</label>
          <select name="idC" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <?php
            while ($row = $RequeteStatementcommande->fetch()) {

              echo "<option value='$row[0]'> $row[1]  $row[2] </option>";
            }
            ?>
          </select>

        </div>
        <div class="mb-3">


          <label for="" class="form-label">nom client</label>
          <select name="idcl" id="" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <?php
            while ($row = $RequeteStatementclient->fetch()) {

              /*<option value="<?php $code;  ?>"> <?php $nom?></option>*/
              echo "<option value='$row[0]'> $row[1] </option>";
            }
            ?>
          </select>

        </div>
        <div class="mb-3">
          <label for="" class="form-label">date commande</label>
          <input type="date" class="form-control" name="dateC">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">prix commande</label>
          <input type="number" class="form-control" name="prixC">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">quantité commande</label>
          <input type="number" class="form-control" name="qteC">
        </div>


        <button type="submit" class="btn btn-primary" name="submit"  onclick="return confirm('Ajout fait avec succés')">Soumettre</button>
        <button type="reset" class="btn btn-primary">Annuler</button>
      </div>
    </form>
  <?php } ?>

</body>

</html>