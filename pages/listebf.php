<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div  class="p-3 mb-2 bg-white text-dark" align="center"><strong> Liste bon</strong> </div>
<link rel="stylesheet" href="style.css">
<div class="card-body">
<?php
// Établir la connexion PDO avec votre base de données
include("/xampp/htdocs/SOLUTION_B/config/db.php");

$sql =$connexion->query("SELECT * FROM bf");
 

?>

<table class='table'>
<tr >
<th>identifiant</th>
<th>nom</th> 
<th>description</th> 

<th>Action</th>

</tr> 
<?php
while($row=$sql->fetch()) {?>
   <tr>
                        <td><?php echo $row["idBF"] ?></td>
                        <td><?php echo $row["nomBF"]; ?></td>
                        <td><?php echo $row["descriptionBF"]; ?></td>
                        
                        <td><a class="btn btn-warning"
                                href="?contenu=modifbf&idBF=<?php echo $row['idBF']; ?>"> Modifier</a></td>
                        <td><a class="btn btn-danger"
                                href="?contenu=suppbf&idBF=<?php echo $row['idBF']; ?>">Supprimer</a>
                        </td>

                    </tr>
</div>
                    <?php
                        }

                ?>
                    </tr>



</table>


</body>
</html>