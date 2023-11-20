<?php 
$utilisateur='root';
$pass='';
$serveur='localhost';
$baseDeDonnees='bdstockuahb';

try{
    $connexion=new PDO("mysql:host=$serveur;dbname=$baseDeDonnees;charset=UTF8",$utilisateur,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    die("erreur lors de la connexion :" .$e->getMessage());
}
?>