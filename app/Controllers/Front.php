<?php

namespace App\Controllers;

class Front extends BaseController
{
    /* public function index()
    {
        return view('noteDeFrais.php');
    } */


    public function deconnection() {
        return view("deconnexion.php");
    }

    public function Fiche2Frais() {
        return view("Fiche2Frais.php");
    }

    public function index() {
        return view("index.php");
    }

    public function inscription() {
        return view("inscription.php");
    }

    public function noteDeFrais() {
        return view("inscription.php");
    }
}
