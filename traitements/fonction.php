<?php
function getadmin($login,$password)
{
    if(require("/xampp/htdocs/SOLUTION_B/config/db.php"))
    {
        $recupUser= $connexion->prepare("SELECT * FROM users WHERE login = ?");
        $recupUser->execute( array($login));
        
        if($recupUser->rowCount() ==1){
            $user = $recupUser->fetch();
            
            
              return $user;
    
        }
    }
}

?>