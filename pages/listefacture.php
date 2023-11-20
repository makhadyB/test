<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div  class="p-3 mb-2 bg-white text-dark" align="center"><strong> Liste facture</strong> </div>
<link rel="stylesheet" href="style.css">
<div class="card-body">
<?php
// Établir la connexion PDO avec votre base de données
include("/xampp/htdocs/SOLUTION_B/config/db.php");

$sql =$connexion->query("SELECT * FROM facture");
 

?>

<table class='table'>
<tr >
<th>identifiant</th>
<th>Description</th> 
<th>identidiant client</th>
<th>Numero paiement</th> 

<th>Action</th>

</tr> 
<?php
while($row=$sql->fetch()) {?>
   <tr>
                        <td><?php echo $row["numeroFacture"] ?></td>
                        <td><?php echo $row["designationF"]; ?></td>
                        <td><?php echo $row["idcl"] ?></td>
                        <td><?php echo $row["numP"]; ?></td>
                        
                        <td><a class="btn btn-warning"
                                href="?contenu=modiffacture&numeroFacture=<?php echo $row['numeroFacture']; ?>"> Modifier</a></td>
                        <td><a class="btn btn-danger"
                                href="?contenu=suppfacture&numeroFacture=<?php echo $row['numeroFacture']; ?>">Supprimer</a>
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