<?php
 session_start();


#if (empty($nom_utilisateur)) {
$nom_utilisateur = ($_POST['nom']);
$prenom_utilisateur = ($_POST['prenom']);
$mail_utilisateur = ($_POST['mail']);
$identifiant_utilisateur = ($_POST['identifiant']);
$mdp_utilisateur = ($_POST['mdp']);
include "fonction-page-accueil.php";

include "config-page-accueil.php";

/* $_SESSION['nom'] = $nom_utilisateur;
$_SESSION['prenom'] = $prenom_utilisateur; */

$connexion = GETPDO($config);
if (!empty($identifiant_utilisateur) and !empty($mdp_utilisateur)){
$insérer = $connexion->prepare('INSERT INTO authentification 
(nom, prenom, mail, identifiant, motDePasse) VALUES (? , ? , ? , ? , ?)');

$insérer->execute(array($nom_utilisateur, $prenom_utilisateur, $mail_utilisateur, 
$identifiant_utilisateur, $mdp_utilisateur));

header('location:http://localhost:3000/Inscription&connexion/index.php');
}
else {
    echo "<script type=\"text/javascript\">window.alert ('Veuillez remplir tous les champs'); 
        window.location='inscription.php'; </script>";
}
#}






#session_destroy();
?>