<?php
session_start();
session_destroy();
//header("location: http://localhost:3000/app/Views/FicheFrais2.php");
$result = base_url("Test/deconnection");
echo $result;
?>