<?php

namespace App\Controllers;

class Front extends BaseController
{
    /* public function index()
    {
        return view('noteDeFrais.php');
    } */


    public function deconnection() {
        $session = session();
        session_destroy();
        return redirect()->to("/Front/FicheFrais2");
        #return view("deconnexion.php");
    }

    public function FicheFrais2() {
        $session = session(); // Cette syntaxe remplace session_start();
        $data = array('user_idd' => $session->get("idd"), 'connected'=> $session->get("connecté"));
        /* 'user_idd' est modulable : on le nomme comme on veut, c'est le nom de la variable dans FicheFrais2
        'user_idd' équivaudra à la variable $_SESSION_['idd'], car on a préciser dans la suite de la syntaxe 
        $session->get("idd")
        $connected lui équivaudra à $_SESSION['connecté']
        Les variables de sessions doivent être inité une seule et unique fois*/
        return view("FicheFrais2.php", $data);
    }

    public function index() {
        return view("index.php");
    }

    public function inscription() {
        
        return view("inscription.php");
                
                
            }
    
    public function noteDeFrais() {
        $session = session();
        include_once ("../app/Views/fonction-frais.php");
        include_once ("../app/Views/config-frais.php");

        $reponse = GETPDO($config);

        $execution = $reponse->query('SELECT `id`, `identifiant` FROM authentification');

        $execution->execute();

        $fetchs = $execution->fetchAll();
        $dataToDisplay = array();
        foreach($fetchs as $fetch) {

            if ( $session->get("idd") === $fetch['identifiant']) {
                    
                    $execution2 = $reponse->query('SELECT * FROM fichefrais');

                    $execution2->execute();

                    $fetch2 = $execution2->fetchAll();
                
                    foreach ($fetch2 as $fetch20) {
                        
                        if ($fetch['id'] === $fetch20['id_authentification']) {
                            $dataToDisplay[] = $fetch20;
                            //$dataToDisplay est un tableau qui récuprèe chaque ligne où 
                            // $fetch['id'] === $fetch20['id_authentification']
                        }
                    }
                }
            }
        $data = array('dataToDisplay' => $dataToDisplay);
        // $data est un tableau avec ('nomVariableDansFichierSuivant' => $variableDansFichierLocal);
        return view("noteDeFrais.php", $data);
    }
}
