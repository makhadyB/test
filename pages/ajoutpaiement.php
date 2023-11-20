
<?php
if(isset($_POST['submit']) ){
  include("/xampp/htdocs/SOLUTION_B/config/db.php");
if( !empty($_POST['libelleP']) && !empty($_POST['description']) )
{
    
    
    $libelleP = $_POST['libelleP'];
    $description = $_POST['description'];
   
   
    $insert =("INSERT INTO paiement(libelleP,description) VALUES('$libelleP','$description')") ;
    $connexion->exec($insert);
    $location=$_SERVER['HTTP_REFERER'];
if($insert){
  
  //header("Location:?contenu=ajoutpaiement");
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
    <link rel="stylesheet" href="style.css">

    <title>Paiement</title>
</head>
<body>
<div class="p-3 mb-2 bg-white text-dark" align="center"><strong>FORMULAIRE AJOUT</strong> </div>
<div class="container-sm">
<form method="post" action="" align="center" class="formeStyle">
  <div class="card-body">

  <div class="mb-3">
    <label for="" class="form-label">libelle</label>
    <input type="text" class="form-control"  name="libelleP" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="description" >
  </div>

  <button type="submit" class="btn btn-primary" name="submit"  onclick="return confirm('Ajout fait avec succés')">enregistrer</button>
  <button type="reset" class="btn btn-primary" name="annuler">annuler</button>
  </div>
</form>
</div>
</body>
</html>