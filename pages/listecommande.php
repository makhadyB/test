<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="p-3 mb-2 bg-white text-dark" align="center"><strong> liste commande</strong> </div>
<link rel="stylesheet" href="style.css">
<div class="card-body">
<?php
// Établir la connexion PDO avec votre base de données
include("/xampp/htdocs/SOLUTION_B/config/db.php");

$sql =$connexion->query("SELECT * FROM commande");
 

?>

<table class='table'>
<tr >
<th>identifiant</th>
<th>Designation</th> 
<th>Numero facture</th>
<th>Numero bf</th> 

<th>Action</th>

</tr> 
<?php
while($row=$sql->fetch()) {?>
   <tr>
                        <td><?php echo $row["idC"] ?></td>
                        <td><?php echo $row["designation"]; ?></td>
                        <td><?php echo $row["numeroFacture"] ?></td>
                        <td><?php echo $row["idBF"]; ?></td>
                        
                        <td><a class="btn btn-warning"
                                href="?contenu=modifcommande&idC=<?php echo $row['idC']; ?>"> Modifier</a></td>
                        <td><a class="btn btn-danger"
                                href="?contenu=supprimercommande&idC=<?php echo $row['idC']; ?>">Supprimer</a>
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