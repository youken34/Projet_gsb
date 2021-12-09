<?php
include_once ("fonction.php");
include_once ("config.php");


$nombre_km = isset($_POST['nbr_km']) ?$_POST['nbr_km'] : null;
$coutkm = isset ($_POST['cout_km']) ?$_POST['cout_km'] : null;
$restau = isset($_POST['Restauration']) ?$_POST['Restauration'] : null;
$htl = isset ($_POST['hôtel']) ?$_POST['hôtel'] : null;
$event = isset($_POST['Evènementiel']) ?$_POST['Evènementiel'] : null;

$frais = GETPDO($config);
if (!empty($nombre_km) and !empty($restau) and !empty($htl) and !empty($event))
{

    $insérer = $frais->prepare('INSERT INTO fichefrais (nbr_km, cout_km, restauration, hotel, evenementiel	) VALUES (? , ? , ? , ? , ?)');

$resql = $insérer->execute(array($nombre_km, $coutkm, $restau, $htl, $event));
var_dump($insérer->errorInfo());

echo "Données retourné";

}

else{
    echo 'Erreur';
}
?>