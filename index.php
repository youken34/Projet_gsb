<?php
/* session_start();
$_SESSION['nom'] = "Bonal";
$_SESSION['prenom'] = "Côme"; */
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
<form action="page-inscription.php" method="POST">
    <fieldset>
        <legend>Bonjour, veuillez remplir le formulaire suivant </legend>
        <label>Nom : </label>
        <input type="text" name="nom"/>
        <br><br>
        <label>Prénom : </label>
        <input type="text" name="prenom"/>
        <br><br>
        <label>Adresse mail : </label>
        <input type="text" name="mail"/>
        <br><br>
        <label>Identifiant : </label>
        <input type="text" name="identifiant"/>
        <br><br>
        <label>Mot de passe : </label>
        <input type="password" name="mdp"/>
        <br>
        <input type="submit" value="Envoyer"/>
    </fieldset>
</form>
</body>
</html>