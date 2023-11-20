
<?php
if(isset($_POST['submit']) ){
  include("/xampp/htdocs/SOLUTION_B/config/db.php");
if(!empty($_POST['nomcl']) && !empty($_POST['description']) && !empty($_POST['email']) && !empty($_POST['bp']) && !empty($_POST['rue']))
{
    
    $nomprod = $_POST['nomprod'];
    $description = $_POST['description'];
    $image = $_POST['image'];
   ;
   
    $insert =("INSERT INTO produit(nomprod, description,email, bp, rue) VALUES('$nomprod','$description','$image')") ;
    $connexion->exec($insert);
    $location=$_SERVER['HTTP_REFERER'];
if($insert){
  
  header("Location:?contenu=ajoutcl");
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

    <title>Document</title>
</head>
<body>

<div class="container-sm">
<form method="post" action="" align="center" class="formeStyle">
  <div class="card-body">

  
<div class="mb-3">
    <label for="" class="form-label">Nom</label>
    <input type="text" class="form-control"  name="nomprod" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">description</label>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">image</label>
    <input type="text" class="form-control"  name="bp" >
  </div>
  

  <button type="submit" class="btn btn-primary" name="submit">enregistrer</button>
  <button type="reset" class="btn btn-primary" name="annuler">annuler</button>
  </div>
</form>
</div>
</body>
</html>