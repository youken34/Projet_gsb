<?php

session_start();

echo "Bonjour" . " " . $_SESSION['nom'] ." " . $_SESSION['prenom'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>         <!-- Définition du style css !-->
    <style>
        fieldset {
           width: 70%;
           margin: 0 auto;
           border: 5px dotted gray;
           margin-bottom: 20px;
           background-color: #FAEBD7;
       }
       legend {
           color: purple;
           font-size: 1.2em;
           padding: 10px 10px;
           text-align: left;
       }
       input {
           padding: 5px;
           margin: 5px;
       }
       
       h1 {
           font-size: 1.2em;
       }
       
       p {
       
           text-align: left;
       }
        </style> 
        <!-- Formulaire de connexion !-->
<form action="confirmation-connexion.php" method="POST">
    <fieldset>
        <label>Identifiant : </label>
        <input type="text" name="identifiant-co"/>
        <br><br>
        <label>Mot de passe : </label>
        <input type="password" name="mdp-co"/>
        <br>
        <input type="submit" value="Envoyer"/>
    </fieldset>
</form>
</body>
</html>
