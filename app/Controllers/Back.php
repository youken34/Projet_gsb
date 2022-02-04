<?php

namespace App\Controllers;

class Back extends BaseController
{
    public function confirmationConnexion() {

        
        $session = session();
            include "../app/Views/fonction-page-accueil.php";
            include "../app/Views/config-page-accueil.php";
            $_SESSION['connecté'] = FALSE;


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

            # Assimilation de données aux variables de sessions
            $_SESSION['idd'] = $X;



            if (!empty($_POST['identifiant-co'] && $_POST['mdp-co'])) {
                foreach ($données_verif as $données_verif) {
                    

                    /* if ($données_verif['identifiant'] === $X &&
                $données_verif['motDePasse'] === $Y) {
                    header('location:index.php'); 
                } */
                if ($recup_user->rowCount() > 0) {
                        $_SESSION['connecté'] = TRUE;
                        return redirect()->to("/Front/FicheFrais2");
                    #header('location: http://localhost:3000/app/Views/FicheFrais2.php');   
                } 
                else {
                    #header('location:page-inscription.php');
                    echo "<script type=\"text/javascript\">window.alert ('Identifiant et/ou Mot de passe incorrect'); 
                    window.location='../index.php'; </script>";
                    $_SESSION['connecté'] = FALSE;
                } 
                }
            }
                    else {
                        return view("confirmation-connexion.php");
                        }

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
                    return redirect()->to("/Front/index");
            }
            else {
                    return view("page-inscription.php");
                }
            }

    public function frais() {

        $session = session();
        
        include_once ("../app/Views/fonction-frais.php");
        include_once ("../app/Views/config-frais.php");

        
            if (isset($_SESSION['idd'])) {

                if ($_SESSION['connecté'] == TRUE) {

                    $reponse = GETPDO($config);

                    $execution = $reponse->query('SELECT `id`, `identifiant` FROM authentification');

                    $execution->execute();

                    $fetch = $execution->fetchAll();

                    foreach($fetch as $fetch) {

                        if ($_SESSION['idd'] === $fetch['identifiant']) {
                            
                            $numéro_id = $fetch['id'];

                        }
                    }

                    $nombre_km = isset($_POST['nbr_km']) ?$_POST['nbr_km'] : null;
                    $coutkm = isset ($_POST['cout_km']) ?$_POST['cout_km'] : null;
                    $restau = isset($_POST['Restauration']) ?$_POST['Restauration'] : null;
                    $htl = isset ($_POST['hôtel']) ?$_POST['hôtel'] : null;
                    $event = isset($_POST['Evènementiel']) ?$_POST['Evènementiel'] : null;

                        $frais = GETPDO($config);
                        if (!empty($nombre_km) and !empty($restau) and !empty($htl) and !empty($event))
                        {

                            $insérer = $frais->prepare('INSERT INTO fichefrais (nbr_km, cout_km, restauration, hotel, evenementiel,
                            id_authentification	) VALUES (? , ? , ? , ? , ?, ?)');

                        $resql = $insérer->execute(array($nombre_km, $coutkm, $restau, $htl, $event, $numéro_id));
                         /*var_dump($insérer->errorInfo());

                        echo "Données retourné"; */
                        #header('Location: http://localhost:3000/app/Views/FicheFrais2.php');
                        return redirect()->to("/Front/noteDeFrais");
                        /*$data = array('user_idd' => $session->get("idd"), 'connected'=> $session->get("connecté"));
                        return view("FicheFrais2.php", $data); */
                      
                        #return view("noteDeFrais.php");
                        }

                        else {
                            return view("FicheFrais2.php");
                        }
                        
                    }
                }

                else {
                    echo "<script type=\"text/javascript\">window.alert ('Vous devez être connecté pour envoyez vos fiche de frais'); 
        window.location='/Front/FicheFrais2'; </script>";
                }

            }


}
