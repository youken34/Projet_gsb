<?php

namespace App\Controllers;

class Back extends BaseController
{
    public function confirmationConnexion() {
        return view("confirmation-connexion.php");
    }

    public function pageInscription() {
        #if (empty($nom_utilisateur)) {
$nom_utilisateur = ($_POST['nom']);
$prenom_utilisateur = ($_POST['prenom']);
$mail_utilisateur = ($_POST['mail']);
$identifiant_utilisateur = ($_POST['identifiant']);
$mdp_utilisateur = ($_POST['mdp']);
include "../app/Views/fonction-page-accueil.php";

include "../app/Views/config-page-accueil.php";

/* $_SESSION['nom'] = $nom_utilisateur;
$_SESSION['prenom'] = $prenom_utilisateur; */

$connexion = GETPDO($config);
if (!empty($identifiant_utilisateur) and !empty($mdp_utilisateur)){
$insérer = $connexion->prepare('INSERT INTO authentification 
(nom, prenom, mail, identifiant, motDePasse) VALUES (? , ? , ? , ? , ?)');

$insérer->execute(array($nom_utilisateur, $prenom_utilisateur, $mail_utilisateur, 
$identifiant_utilisateur, $mdp_utilisateur));
        return redirect()->to("/Front/inscription");
}
        return view("page-inscription.php");
    }

    public function frais() {
        return view("frais.php");
    }

}
