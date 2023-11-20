<?php
include '/xampp/htdocs/SOLUTION_B/config/db.php';
$idcl = $_GET['idcl'];
$q = $connexion->prepare("SELECT * FROM client WHERE idcl=?");
$q->execute(array($idcl));



while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
    $nomcl = $row['nomcl'];
    $tel = $row['tel'];
    $email = $row['email'];
    $bp = $row['bp'];
    $rue = $row['rue'];
}

if (isset($_POST['update'])) {

    $nomcl = $_POST['nomcl'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $bp = $_POST['bp'];
    $rue = $_POST['rue'];




    $r = "UPDATE client SET nomcl='$nomcl', tel='$tel', email='$email', bp='$bp', rue='$rue' WHERE idcl='" . $_GET["idcl"] . "'";
$connexion->exec($r);
if($r){
    //header("location:?contenu=listeclient");
}

  
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>client</title>
</head>

<body>


    <div class="container mt-3">
        <div class="card">
            <div class="card-header bg-white text-dark" align="center">
                client
               </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Nom:</label>
                        <input type="text" name="nomcl" id="" class="form-control" value="<?php echo $nomcl; ?>">
                    </div>

                    <div class="form-group">
                        <label for="">téléphone:</label>
                        <input type="number" name="tel" id="" class="form-control" value="<?php echo $tel; ?>">
                    </div>
                    
            
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" name="email" id="" class="form-control" value="<?php echo $email; ?>">
                    </div>

                    <div class="form-group">
                        <label for="">BP:</label>
                        <input type="text" name="bp" id="" class="form-control" value="<?php echo $bp; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Rue:</label>
                        <input type="text" name="rue" id="" class="form-control" value="<?php echo $rue; ?>">
                    </div>



                        <input type="submit" class="btn btn-primary" value="Enregistrer" name="update">
                </form>
            </div>
        </div>
    </div>

</body>

</html>