<?php
include("/xampp/htdocs/SOLUTION_B/config/db.php");

if (isset($_POST['submit'])) {
    if (!empty($_POST['objet']) && !empty($_POST['idcl']) && !empty($_POST['type'])) {
        $objet = $_POST['objet'];
        $idcl = $_POST['idcl'];
        $type = $_POST['type'];

        $insert = "INSERT INTO lettre (idcl, objet, type) VALUES ('$idcl', '$objet', '$type')";
        $connexion->exec($insert);
        $location = $_SERVER['HTTP_REFERER'];
        if ($insert) {
           // header("Location:?contenu=ajoutlettre");
        }
    } else {
        echo "Veuillez saisir tous les champs";
    }
}

$req = "SELECT * FROM client";
$RequeteStatementclient = $connexion->query($req);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container-sm">
        <form method="post" action="" align="center">
            <div class="card-body">
            <div class="p-3 mb-2 bg-white text-dark" align="center"><strong>FORMULAIRE AJOUT</strong> </div>
                <?php if ($RequeteStatementclient) { ?>
                    <form action="" method="post">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">identifiant client</label>
                                <select name="idcl" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <?php
                                    while ($row = $RequeteStatementclient->fetch()) {
                                        echo "<option value='$row[0]'> $row[1]  </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">libelle</label>
                                <input type="text" class="form-control" name="libelleP">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">objet</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="objet">
                            </div>
                            <div class="mb-3">
                                <select class="form-select" id="floatingSelectGrid" name="type">
                                    <option selected>le type de la lettre?</option>
                                    <option >rejet</option>
                                    <option >relance</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit"  onclick="return confirm('Ajout fait avec succés')">enregistrer</button>
                            <button type="reset" class="btn btn-primary" name="annuler">annuler</button>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </form>
    </div>
</body>
</html>
