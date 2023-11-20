<?php
if(isset($_POST['valider'])){
    include("/xampp/htdocs/SOLUTION_B/config/db.php");
    $req=$connexion->prepare("INSERT INTO images(nom,taille,type,bin) values(?,?,?,?)");
    $req->execute(array($_FILES["image"]["name"],$_FILES["image"]["size"],$_FILES["image"]["type"], file_get_contents($_FILES["image"]["tmp_name"])));

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
    
<form method="post" action="" enctype="multipart/form-data">
  <input type="file" name="image" required>
  <input type="submit" value="Upload" name="valider">
</form>
</body>
</html>