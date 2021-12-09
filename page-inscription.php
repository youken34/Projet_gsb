<?php
 session_start();
$nom_utilisateur = ($_POST['nom']);
$prenom_utilisateur = ($_POST['prenom']);
$mail_utilisateur = ($_POST['mail']);
$identifiant_utilisateur = ($_POST['identifiant']);
$mdp_utilisateur = ($_POST['mdp']);

$_SESSION['nom'] = $nom_utilisateur;
$_SESSION['prenom'] = $prenom_utilisateur;


include "fonction-page-accueil.php";

include "config-page-accueil.php";


$connexion = GETPDO($config);
if (!empty($identifiant_utilisateur) and !empty($mdp_utilisateur)){
$insérer = $connexion->prepare('INSERT INTO authentification 
(nom, prenom, mail, identifiant, motDePasse) VALUES (? , ? , ? , ? , ?)');

$insérer->execute(array($nom_utilisateur, $prenom_utilisateur, $mail_utilisateur, 
$identifiant_utilisateur, $mdp_utilisateur));

header('location:page-connexion.php');
}
else {
    echo 'ERREUR, reessaie';
}

?>