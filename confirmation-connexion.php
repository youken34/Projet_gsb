<?php
include "fonction-page-accueil.php";

include "config-page-accueil.php";

# Première méthode 
$var_recup = GETPDO($config);
$var_recup_ex = $var_recup->prepare("SELECT `identifiant`, `motDePasse` FROM authentification");
$var_recup_ex->execute();
$données_verif = $var_recup_ex->fetchAll();

# Deuxième méthode 
$X = $_POST['identifiant-co'];
$Y = $_POST['mdp-co']; 
$recup_user = $var_recup->prepare('SELECT * FROM authentification WHERE identifiant = ? AND motDePasse = ? ');
$recup_user->execute(array($X, $Y)); 

# Troisième méthode 


if (!empty($_POST['identifiant-co'] && $_POST['mdp-co'])) {
    foreach ($données_verif as $données_verif) {
        echo "zebi <br>";
        echo($données_verif['identifiant'] . " ");
        echo($données_verif['motDePasse'] . " ");

        /* if ($données_verif['identifiant'] === $X &&
       $données_verif['motDePasse'] === $Y) {
           header('location:index.php'); 
       } */
       if ($recup_user->rowCount() > 0) {
           header('location:index.php');
       } 
       else {
           header('location:config-page-accueil.php');
       } 
    }
}
else {
    header('location:page-connexion.php');
}
?>