<?php
session_start();
session_destroy();
//header("location: http://localhost:3000/app/Views/FicheFrais2.php");
//$deconnectionPHP = base_url("Front/deconnection");
return redirect()->to("/Front/FicheFrais2");
?>