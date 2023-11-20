<?php
include '/xampp/htdocs/SOLUTION_B/config/db.php';
$idBF = $_GET['idBF'];
$q = $connexion->prepare("SELECT * FROM bf WHERE idBF=?");
$q->execute(array($idBF));



while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
    $nomBF = $row['nomBF'];
    $descriptionBF = $row['descriptionBF'];
}

if (isset($_POST['update'])) {

    $nomBF = $_POST['nomBF'];
    $descriptionBF = $_POST['descriptionBF'];




    $r = "UPDATE bf SET nomBF='$nomBF',descriptionBF='$descriptionBF' WHERE idBF= '" . $_GET["idBF"] . "'";
    $connexion->exec($r);

    if ($r) {
        // header('Location:?contenu=listeBF');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bon facturation</title>
</head>

<body>

    <div class="container mt-3">
        <div class="card">
            <div class="card-header bg-white text-dark" align="center">
                bon facturation
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Nom:</label>
                        <input type="text" name="nomBF" id="" class="form-control" value="<?php echo $nomBF; ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Description:</label>
                        <textarea name="descriptionBF" id="" class="form-control"><?php echo $descriptionBF; ?></textarea>

                    </div>

                        <input type="submit" class="btn btn-primary" value="Enregistrer" name="update">
                </form>
            </div>
        </div>
    </div>

</body>

</html>