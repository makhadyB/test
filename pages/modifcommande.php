<?php
include '/xampp/htdocs/SOLUTION_B/config/db.php';
if(isset($_GET['idC'])){
$idC=$_GET['idC'];
$q = $connexion->query("SELECT * FROM commande WHERE idC=$idC");
 $mod=$q->fetch();

}

if (isset($_POST['update'])) {
   
    $idcl = $_POST['idAd'];
    $designation= $_POST['designation'];
    $numeroFacture = $_POST['numeroFacture'];


    $r = "UPDATE commande SET idcl='$idcl',designation='$designation',numeroFacture='$numeroFacture' WHERE idC= '" . $_GET["idC"] . "'";
$connexion->exec($r);


    if ($r) {
      
       // header('Location:?contenu=listecommande');
    }
}
$req="SELECT * from bf";
  $RequeteStatementbf=$connexion->query($req);
  $req="SELECT * from facture";
  $RequeteStatementfacture=$connexion->query($req);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Commande</title>
</head>

<body>
    

   
    <div class="card-body">
        <div class="card">
            <div class="card-header bg-white text-dark">
                commande
            </div>
            <div class="card-body">
     <form action="" method="post" >
          <div class="card-body">
              <div class="mb-3">
                  <label for="" class="form-label">nom facture</label>
                      <select name="idF"   class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
       <?php
       while($row=$RequeteStatementfacture->fetch()){?>
 
       <option value="<?=$row["numeroFacture"] ?>"> <?=$row["designationF"]?></option>
       <?php }
       ?>
        </select>
     
   </div>
   <div class="mb-3">

 <label class="form-label">nom BF</label>
  <select name="idBF" id=""class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
  <?php
       while($row=$RequeteStatementbf->fetch()){?>
   <option value="<?=$row["idBF"]?>"> <?=$row["nomBF"]?> </option>
        <?php 
       }
       ?>
       </select>
  
    </div>
 <div class="mb-3">
     <label for="" class="form-label">designation</label>
     <input type="description" class="form-control" name="designation"
     value="<?php echo $mod['designation']; ?>">
   </div>
   

                    <input type="submit" class="btn btn-primary" value="Enregistrer" name="update">
                </form>
            </div>
        </div>
    </div>
    
</body>

</html>
