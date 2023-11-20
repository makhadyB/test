
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste paiement</title>
</head>
<body>
    
<div class="p-3 mb-2 bg-white text-dark" align="center"><strong> Liste paiement</strong> </div>
<div class="card-body">
<?php
// Établir la connexion PDO avec votre base de données
include("/xampp/htdocs/SOLUTION_B/config/db.php");

$sql =$connexion->query("SELECT * FROM paiement");
 

?>

<table class='table'>
<tr >
<th>identifiant</th>
<th>Description</th> 
<th>libellé</th>

<th>Action</th>

</tr> 
<?php
while($row=$sql->fetch()) {?>
   <tr>
                        <td><?php echo $row["numP"] ?></td>
                        <td><?php echo $row["description"]; ?></td>
                        <td><?php echo $row["libelleP"] ?></td>
                       
                        
                        <td><a class="btn btn-warning"
                                href="?contenu=modifpaiement&numP=<?php echo $row['numP']; ?>"> Modifier</a></td>
                        <td><a class="btn btn-danger"
                                href="?contenu=supppaiement&numP=<?php echo $row['numP']; ?>">Supprimer</a>
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