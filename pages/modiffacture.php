<?php
include '/xampp/htdocs/SOLUTION_B/config/db.php';
if(isset($_GET['numeroFacture'])){
$numeroFacture=$_GET['numeroFacture'];
$q = $connexion->query("SELECT * FROM facture WHERE numeroFacture=$numeroFacture");
 $mod=$q->fetch();

}

if (isset($_POST['update'])) {
   
    $idcl = $_POST['idcl'];
    $designationF= $_POST['designationF'];
    $numP = $_POST['numP'];


    $r = "UPDATE facture SET idcl='$idcl',designationF='$designationF',numP='$numP' WHERE numeroFacture= '" . $_GET["numeroFacture"] . "'";
$connexion->exec($r);


    if ($r) {
      
     //   header('Location:?contenu=listefacture');
    }
}
$req="SELECT * from client";
  $RequeteStatementclient=$connexion->query($req);
  $req="SELECT * from paiement";
  $RequeteStatementpaiement=$connexion->query($req);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>facture</title>
</head>

<body>
    

    
    <div class="card-body">
        <div class="card">
            <div class="card-header bg-white text-dark" align="center">
                facture
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

 <label class="form-label">nom paiement</label>
  <select name="numP" id=""class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
  <?php
       while($row=$RequeteStatementpaiement->fetch()){?>
   <option value="<?=$row["numP"]?>"> <?=$row["libelleP"]?> </option>
        <?php 
       }
       ?>
       </select>
  
    </div>
 <div class="mb-3">
     <label for="" class="form-label">designationF</label>
     <input type="text" class="form-control" name="designationF"
     value="<?php echo $mod['designationF']; ?>">
   </div>
   

                    <input type="submit" class="btn btn-primary" value="Enregistrer" name="update">
                </form>
            </div>
        </div>
    </div>
    
</body>

</html>
