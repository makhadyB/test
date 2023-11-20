<?php
include '/xampp/htdocs/SOLUTION_B/config/db.php';
if(isset($_GET['idLC'])){
$idLC=$_GET['idLC'];
$q = $connexion->query("SELECT * FROM lignecommande WHERE idLC=$idLC");
 $mod=$q->fetch();

}

if (isset($_POST['update'])) {
   
    $idcl = $_POST['idcl'];
    $dateC= $_POST['dateC'];
    $idC = $_POST['idC'];
    $qteC = $_POST['qteC'];
    $prixC = $_POST['prixC'];



    $r = "UPDATE ligneCommande SET idcl='$idcl',dateC='$dateC',idC='$idC' ,qteC='$qteC',prixC='$prixC' WHERE idLC= '" . $_GET["idLC"] . "'";
$connexion->exec($r);


    if ($r) {
      
       // header('Location:?contenu=listeligneCommande');
    }
}
$req="SELECT * from client";
  $RequeteStatementclient=$connexion->query($req);
  $req="SELECT * from commande";
  $RequeteStatementcommande=$connexion->query($req);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ligne Commande</title>
</head>

<body>
    
    <div class="card-body">
        <div class="card">
            <div class="card-header bg-white text-dark" align="center">
                ligne commande
            </div>
            <div class="card-body">
     <form action="" method="post" >
          <div class="card-body">
              <div class="mb-3">
                  <label for="" class="form-label">nom client</label>
                      <select name="idcl"   class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
       <?php
       while($row=$RequeteStatementclient->fetch()){?>
 
       <option value="<?=$row["idcl"] ?>"> <?=$row["nomcl"]?></option>
       <?php }
       ?>
        </select>
     
   </div>
   <div class="mb-3">

 <label class="form-label">nom Commande</label>
  <select name="idC" id=""class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
  <?php
       while($row=$RequeteStatementcommande->fetch()){?>
   <option value="<?=$row["idC"]?>"> <?=$row["designation"]?> </option>
        <?php 
       }
       ?>
       </select>
  
    </div>
 <div class="mb-3">
     <label for="" class="form-label">date comande</label>
     <input type="date" class="form-control" name="dateC"
     value="<?php echo $mod['dateC']; ?>">
   </div>
   <div class="mb-3">
     <label for="" class="form-label">prix</label>
     <input type="number" class="form-control" name="prixC"
     value="<?php echo $mod['prixC']; ?>">
   </div>
   <div class="mb-3">
     <label for="" class="form-label">Quantié</label>
     <input type="number" class="form-control" name="qteC"
     value="<?php echo $mod['qteC']; ?>">
   </div>
   

                    <input type="submit" class="btn btn-primary" value="Enregistrer" name="update">
                </form>
            </div>
        </div>
    </div>
    
</body>

</html>
