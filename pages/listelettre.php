
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div  class="p-3 mb-2 bg-white text-dark" align="center"><strong> Liste lettre</strong> </div>
<link rel="stylesheet" href="style.css">
<div class="card-body">
<?php
// Établir la connexion PDO avec votre base de données
include("/xampp/htdocs/SOLUTION_B/config/db.php");

$sql =$connexion->query("SELECT * FROM lettre");
 

?>

<table class='table'>
<tr >
<th>identifiant</th>
<th>identidiant client</th>
<th>objet</th> 
<th>type</th> 

<th>Action</th>

</tr> 
<?php
while($row=$sql->fetch()) {?>
   <tr>
                        <td><?php echo $row["numeroL"] ?></td>
                       
                        <td><?php echo $row["idcl"] ?></td>
                        <td><?php echo $row["objet"]; ?></td>
                        <td><?php echo $row["type"]; ?></td>
                        
                        <td><a class="btn btn-warning"
                                href="?contenu=modiflettre&numeroL=<?php echo $row['numeroL']; ?>"> Modifier</a></td>
                        <td><a class="btn btn-danger"
                                href="?contenu=supplettre&numeroL=<?php echo $row['numeroL']; ?>">Supprimer</a>
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