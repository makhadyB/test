<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div  class="p-3 mb-2 bg-white text-dark" align="center"><strong> Liste client</strong> </div>
<div class="card-body">
<?php
// Établir la connexion PDO avec votre base de données
include("/xampp/htdocs/SOLUTION_B/config/db.php");

$sql =$connexion->query("SELECT * FROM client");
 

?>

<table class='table'>
<tr >
<th>identifiant</th>
<th>nom</th> 
<th>telephone</th>
<th>email</th> 
<th>boite postal</th>
<th>rue</th> 

<th>Action</th>

</tr> 
<?php
while($row=$sql->fetch()) {?>
   <tr>
                        <td><?php echo $row["idcl"] ?></td>
                        <td><?php echo $row["nomcl"]; ?></td>
                        
                        <td><?php echo $row["tel"] ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        
                        <td><?php echo $row["bp"] ?></td>
                        <td><?php echo $row["rue"]; ?></td>
                        
                        <td><a class="btn btn-warning"
                                href="?contenu=modifclient&idcl=<?php echo $row['idcl']; ?>"> Modifier</a></td>
                        <td><a class="btn btn-danger"
                                href="?contenu=suppclient&idcl=<?php echo $row['idcl']; ?> ">Supprimer</a>
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