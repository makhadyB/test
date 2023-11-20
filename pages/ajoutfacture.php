<?php

if(isset($_POST['submit']) ){
 if(!empty($_POST['designationF']) && !empty($_POST['idcl']) && !empty($_POST['numP']))
{
    include("/xampp/htdocs/SOLUTION_B/config/db.php");
   // $idEff = $_POST['idEff'];
    $designationF = $_POST['designationF'];
    $idcl = $_POST['idcl'];
    $numP = $_POST['numP'];
    
   
    $insert =("INSERT INTO facture( designationF,idcl, numP) VALUES('$designationF','$idcl','$numP')") ;
    $connexion->exec($insert);
    $location=$_SERVER['HTTP_REFERER'];
if($insert){

 // header("Location:?contenu=ajoutfacture");
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

  $req="SELECT * from paiement";
  $RequeteStatementadherent=$connexion->query($req);// select de tous les paiements
  $req="SELECT * from client";
  $RequeteStatementclient=$connexion->query($req);// select de tous les clients
  
  ?>


<div class="p-3 mb-2 bg-white text-dark" align="center"><strong>FORMULAIRE AJOUT</strong> </div>
<?php 
if($RequeteStatementadherent &&  $RequeteStatementclient){?>


  <form action="" method="post" >
   

   
  <div class="card-body">
  
  <div class="mb-3">

   <label for="" class="form-label">Numero Paiement</label>
    <select name="numP"   class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
      <?php
      while($row=$RequeteStatementadherent->fetch()){

     echo"<option value='$row[0]'> $row[1]  $row[2] </option>";

      
      }
      ?>
       </select>
    
  </div>
  <div class="mb-3">


<label for="" class="form-label">nom Client</label>
 <select name="idcl" id=""class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
 <?php
      while($row= $RequeteStatementclient->fetch()){

/*<option value="<?php $code;  ?>"> <?php $nom?></option>*/
         echo"<option value='$row[0]'> $row[1] </option>";
        
      }
      ?>
      </select>
 
   </div>
<div class="mb-3">
    <label for="" class="form-label">Designation</label>
    <input type="designationF" class="form-control" name="designationF">
  </div>
  
  
  <button type="submit" class="btn btn-primary" name="submit"  onclick="return confirm('Ajout fait avec succés')">Soumettre</button>
  <button type="reset" class="btn btn-primary">Annuler</button>
</div>
</form>
<?php }?>

</body>
</html>