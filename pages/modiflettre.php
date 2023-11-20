<?php
include '/xampp/htdocs/SOLUTION_B/config/db.php';
if(isset($_GET['numeroL'])){
$numeroL=$_GET['numeroL'];
$q = $connexion->query("SELECT * FROM lettre WHERE numeroL=$numeroL");
 $mod=$q->fetch();

}

if (isset($_POST['update'])) {
   
    $idcl = $_POST['idcl'];
    $objet= $_POST['objet'];
    $type = $_POST['type'];


    $r = "UPDATE lettre SET idcl='$idcl',objet='$objet',type='$type' WHERE numeroL= '" . $_GET["numeroL"] . "'";
$connexion->exec($r);


    if ($r) {
      
       // header('Location:?contenu=listelettre');
    }
}
$req="SELECT * from client";
  $RequeteStatementclient=$connexion->query($req);
 
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
            <div class="card-header bg-white text-dark " align="center">
                lettre
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

 <label class="form-label"></label>
 <select class="form-select" id="floatingSelectGrid" name="type">
                                    <option selected>le type de la lettre?</option>
                                    <option >rejet</option>
                                    <option >relance</option>
                                </select>
  
    </div>
 <div class="mb-3">
     <label for="" class="form-label">objet</label>
     <input type="text" class="form-control" name="objet"
     value="<?php echo $mod['objet']; ?>">
   </div>
   

                    <input type="submit" class="btn btn-primary" value="Enregistrer" name="update">
                </form>
            </div>
        </div>
    </div>
    
</body>

</html>
