<?php
session_start();
session_destroy();
header("location: http://localhost:3000/Frais/FicheFrais2.php");
?>