
<?php

if(isset($_POST['submit']) ){
if( !empty($_POST['designation']) && !empty($_POST['numeroFacture']) && !empty($_POST['idBF']))
{
    include("/xampp/htdocs/SOLUTION_B/config/db.php");
   // $idEff = $_POST['idEff']; 
    $designation = $_POST['designation'];
    $numeroFacture = $_POST['numeroFacture'];
    $idBF= $_POST['idBF'];
    
   
    $insert =("INSERT INTO commande( designation,numeroFacture, idBF) VALUES('$designation','$numeroFacture','$idBF')") ;


   $connexion->exec($insert);
    $location=$_SERVER['HTTP_REFERER'];
if($insert){

 // header("Location:?contenu=ajoutCommande");
}
   
}
else {
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

  $req="SELECT * from  bf";
  $RequeteStatementbf=$connexion->query($req);// select de tous les paiements
  $req="SELECT * from facture";
  $RequeteStatementfacture=$connexion->query($req);// select de tous les clients
  
  ?>

<div class="p-3 mb-2 bg-white text-dark" align="center"><strong>FORMULAIRE AJOUT</strong> </div>
<?php 
if( $RequeteStatementfacture){?>


  <form action="" method="post" >
   

   
  <div class="card-body">
  
  <div class="mb-3">

   <label for="" class="form-label">Numero Facture</label>
    <select name="numeroFacture"   class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
      <?php
      while($row=$RequeteStatementfacture->fetch()){

     echo"<option value='$row[0]'> $row[1]  $row[2] </option>";

      
      }
      ?>
       </select>
    
  </div>
  <div class="mb-3">


<label for="" class="form-label">nom BF</label>
 <select name="idBF" id=""class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
 <?php
      while($row= $RequeteStatementbf->fetch()){

/*<option value="<?php $code;  ?>"> <?php $nom?></option>*/
         echo"<option value='$row[0]'> $row[1] </option>";
        
      }
      ?>
      </select>
 
   </div>
<div class="mb-3">
    <label for="" class="form-label">Designation</label>
    <input type="designation" class="form-control" name="designation">
  </div>
  
  
  <button type="submit" class="btn btn-primary" name="submit"  onclick="return confirm('Ajout fait avec succés')">Soumettre</button>
  <button type="reset" class="btn btn-primary">Annuler</button>
</div>
</form>
<?php }?>

</body>
</html>