<?php
if(isset($_POST['submit']) ){
  include("/xampp/htdocs/SOLUTION_B/config/db.php");
if(!empty($_POST['nomcl']) && !empty($_POST['tel']) && !empty($_POST['email']) && !empty($_POST['bp']) && !empty($_POST['rue']))
{
    
    $nomcl = $_POST['nomcl'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $bp = $_POST['bp'];
    $rue = $_POST['rue'];
   
    $insert =("INSERT INTO client(nomcl, tel,email, bp, rue) VALUES('$nomcl','$tel','$email','$bp','$rue')") ;
    $connexion->exec($insert);
    $location=$_SERVER['HTTP_REFERER'];
if($insert){
 
 // header("Location:?contenu=ajoutclient");
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
<div class="p-3 mb-2 bg-white text-dark" align="center"><strong>FORMULAIRE AJOUT</strong> </div>
<div class="container-sm">
<form method="post" action="" align="center" class="formeStyle">
  <div class="card-body">

  
<div class="mb-3">
    <label for="" class="form-label">Nom</label>
    <input type="text" class="form-control"  name="nomcl" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telephone</label>
    <input type="number" class="form-control"  name="tel" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">BP</label>
    <input type="text" class="form-control"  name="bp" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Rue</label>
    <input type="text" class="form-control" name="rue" >
  </div>

  <button type="submit" class="btn btn-primary" name="submit" onclick="return confirm('Ajout fait avec succés')">enregistrer</button>
  <button type="reset" class="btn btn-primary" name="annuler">annuler</button>
  </div>
</form>
</div>
</body>
</html>