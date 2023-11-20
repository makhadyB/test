<?php
include '/xampp/htdocs/SOLUTION_B/config/db.php';
$numP = $_GET['numP'];
$q = $connexion->prepare("SELECT * FROM paiement WHERE numP=?");
$q->execute(array($numP));

while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
    $description = $row['description'];
    $libelleP = $row['libelleP'];
    
}

if (isset($_POST['update'])) {

    $description = $_POST['description'];
    $libelleP = $_POST['libelleP'];

    $r = "UPDATE paiement SET description='$description',libelleP='$libelleP'  WHERE numP='" . $_GET["numP"] . "'";

    $connexion->exec($r);

    if ($r) {
        $success = "BF modifié avec succès...";
        // header('Location:?contenu=listepaiement');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>paiement</title>
</head>

<body>

    <div class="container mt-3">
        <div class="card">
            <div class="card-header bg-white text-dark" align="center">
                paiement
            </div>
            <div class="card-body">
                <form action="" method="post">
                    
                    <div class="form-group">
                        <label for="">libellé:</label>
                        <input type="text" name="libelleP" id="" class="form-control" value="<?php echo $libelleP; ?>">

                    </div>
                    <div class="form-group">
                        <label for="">Description:</label>
                        <textarea name="description" id="" class="form-control"><?php echo $description; ?></textarea>

                    </div>




                            <input type="submit" class="btn btn-primary" value="Enregistrer" name="update">
                </form>
            </div>
        </div>
    </div>

</body>

</html>