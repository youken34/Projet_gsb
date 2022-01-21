<?php
include "config-page-accueil.php";

function GETPDO($config):PDO {
/* Grâce à cette fonction, on pourra désormais se connecter à la PDO en utilisant la syntaxe :
    $variable = GETPDO($config)->prepare('Requête SQL') */
try {
    $host = $config['host'];
    $db = $config['nombdd'];
    $iddbdd = $config['pseudo'];
    $mdpbdd = $config['mdpbdd'];

$PDO = new PDO("mysql:host=$host;dbname=$db;charset=utf8", "$iddbdd", "$mdpbdd");

/* Ici on accède à la Base de données de manière différente, les idd/mdp, l'host et le nom de la base
    de données correspondent à des variables */
return $PDO;
} catch (Exception $e) {
    die("Erreur : ". $e->getMessage());
}

}
?>