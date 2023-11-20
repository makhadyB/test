<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div  class="p-3 mb-2 bg-white text-dark" align="center"strong> liste ligne commande</strong> </div>
<link rel="stylesheet" href="style.css">
<div class="card-body">
<?php
// Établir la connexion PDO avec votre base de données
include("/xampp/htdocs/SOLUTION_B/config/db.php");

$sql =$connexion->query("SELECT * FROM lignecommande");
 

?>

<table class='table'>
<tr >
<th>identifiant</th>
<th>identidiant client</th> 
<th>Numero commande</th>
<th>date commande</th> 
<th>quantité</th>
<th>prix</th> 

<th>Action</th>

</tr> 
<?php
while($row=$sql->fetch()) {?>
   <tr>
                        <td><?php echo $row["idLC"] ?></td>
                        <td><?php echo $row["idcl"]; ?></td>
                        <td><?php echo $row["idC"] ?></td>
                        <td><?php echo $row["dateC"]; ?></td>
                        <td><?php echo $row["qteC"] ?></td>
                        <td><?php echo $row["prixC"]; ?></td>
                        
                        
                        
                        <td><a class="btn btn-warning"
                                href="?contenu=modifligneCommande&idLC=<?php echo $row['idLC']; ?>"> Modifier</a></td>
                        <td><a class="btn btn-danger"
                                href="?contenu=suppligneCommande&idLC=<?php echo $row['idLC']; ?>">Supprimer</a>
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