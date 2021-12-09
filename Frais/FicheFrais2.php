<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">


<form action ="frais.php" method="POST">

<h1>Veuillez remplir cette fiche pour vous faire rembourser de vos frais </h1>

<br><br>
<label for="nbr_km"> Nombre de kilomètre </label>
<input type="text" name="nbr_km">
<br><br><br>
<?php
$nbr_km = isset ($_POST["nbr_km"]) ?$_POST['nbr_km'] : null;
$cout_km = $nbr_km * 0.5;
?>
<div class="d-flex">
<label for="kilometrique"> Indemnités kilométriques <br> &emsp;</label>
<input type="text" name="cout_km"> 
<p>  &emsp; Nombre de kilometres / 2 ( exemple : 100km = 50€) </p>
<?php
// echo '<br> <input type="text" disabled name="cout_km" value="'.$nbr_km. '"/>';
?>

<br><br>
<?php

// echo  '<input type="text" disabled  name="cout_km" '.$cout_km. '"/>';
?>
</div>


<br>
<br>

<label for="restauration"> Restauration</label>
<input type="text" name="Restauration">
<br>
<br>
<br>
<label for="hotel"> Hôtel</label>
<input type="text" name="hôtel">
<br>
<br>
<br>
<label for="evenementiel"> Evènementiel</label>
<input type="text" name="Evènementiel">
<br>
<br>
<br>

<br>
<label for="autre">Pour les demande de remboursement tier, veuillez deposer ci-dessous la facture de la dépense en question.</label><br><br>
<input type="file">

<button type="submit"> envoyer</button>
</form>