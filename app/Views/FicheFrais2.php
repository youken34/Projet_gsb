<?php
session_start();
/* if (empty($_POST['identifiant-co'])) {
    $_SESSION['connecté'] = FALSE;
} */
?>

<div class="message">
<?php
if (isset($_SESSION['idd'])) {
    if ($_SESSION['connecté'] == TRUE) {
        echo('Bonjour ' .  $_SESSION['idd'] . ' ,Bienvenue !  ');
    }
    else {
        echo'Bonjour, vous n\'etes pas connecté';
    }
}
else {
    echo'Bonjour, vous n\'etes pas connecté';
    
}
?>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">


<body>         <!-- Définition du style css !-->
    <style>
    @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;	
	font-family: Raleway, sans-serif;
}

.message {
    color: white;
    
    text-align: center;
}

body {
	background: linear-gradient(90deg, #C7C5F4, #776BCC);		
}

label {

    padding-left: 10px;
    margin-left: 10px;
}

.container {
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 100vh;
 
}

.screen {		
	background: linear-gradient(90deg, #5D54A4, #7C78B8);		
	position: relative;	
	height: 750px;
	width: 450px;	
	box-shadow: 0px 0px 24px #5C5696;
    border-radius: 30px;
}

.screen__content {
	z-index: 1;
	position: relative;	
	height: 100%;
    padding-left: 10px;
    margin-top: 20px;
}

.screen__background {		
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 0;
	-webkit-clip-path: inset(0 0 0 0);
	clip-path: inset(0 0 0 0);	
}

.screen__background__shape {
	transform: rotate(45deg);
	position: absolute;
}

.screen__background__shape1 {
	height: 520px;
	width: 520px;
	background: #FFF;	
	top: -50px;
	right: 120px;	
	border-radius: 0 72px 0 0;
}

.screen__background__shape2 {
	height: 220px;
	width: 220px;
	background: #6C63AC;	
	top: -172px;
	right: 0;	
	border-radius: 32px;
}

.screen__background__shape3 {
	height: 540px;
	width: 190px;
	background: linear-gradient(270deg, #5D54A4, #6A679E);
	top: -24px;
	right: 0;	
	border-radius: 32px;
}

.screen__background__shape4 {
	height: 400px;
	width: 200px;
	background: #7E7BB9;	
	top: 420px;
	right: 50px;	
	border-radius: 60px;
}

.login {
	width: 320px;
	padding: 30px;
	padding-top: 156px;
}

.login__field {
	padding: 20px 10px;	
	position: relative;

}
.login__input {
	border: none;
	border-bottom: 2px solid #D1D1D4;
	background: none;

	padding-left: 24px;
	font-weight: 700;
	width: 75%;
	transition: .2s;
    margin-top: 13px;	
    margin-bottom: 13px;

}

.login__input:active,
.login__input:focus,
.login__input:hover {
	outline: none;
	border-bottom-color: #6A679E;
}

.login__submit {
	background: #fff;
	font-size: 14px;
	margin-top: 20px;
	padding: 16px 20px;
	border-radius: 26px;
	border: 1px solid #D4D3E8;
	text-transform: uppercase;
	font-weight: 700;
	display: flex;
	align-items: center;
	width: 95%;
	color: #4C489D;
	box-shadow: 0px 2px 2px #5C5696;
	cursor: pointer;
	transition: .2s;
    text-align: center;
    justify-content: center;
    align-items: center;
}

.login__submit:active,
.login__submit:focus,
.login__submit:hover {
	border-color: #6A679E;
	outline: none;
}
        /*fieldset {
           width: 70%;
           margin: 0 auto;
           border: 5px dotted gray;
           margin-bottom: 20px;
           background-color: #FAEBD7;
       } */
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
 

<div class="container">
	<div class="screen">
		        <div class="screen__content">
                        
                    <!-- Formulaire de la fiche de frais -->
                    <form action ="http://localhost:3000/Frais/frais.php" method="POST">
                        <label for="nbr_km"> Nombre de kilomètre </label><br>
                        <input type="text" name="nbr_km">

                        <br><br>
                      
                        <label for="kilometrique"> Indemnités kilométriques  &emsp;</label><br>
                        <input type="text" name="cout_km"> 

                        <br><br>

                        <label for="restauration"> Restauration</label><br>
                        <input type="text" name="Restauration">
                        <br>
                        <br>

                        <label for="hotel"> Hôtel</label><br>
                        <input type="text" name="hôtel">

                        <br><br>

                        <label for="evenementiel"> Evènementiel</label><br>
                        <input type="text" name="Evènementiel">   
                        <br><br>     
                        </form>
                        <input class="login__submit" type="submit"> </input>

                        <form action="http://localhost:3000/Inscription&connexion/deconnexion.php">
				        <input class="login__submit" type="submit" value="Deconnexion">
                        </input>
                    </form>

                    <form action="http://localhost:3000/Inscription&connexion/index.php" method="POST">                  
                        <input class="login__submit" type="submit" value="Connexion">	
                    </form>		
                    
            </div>
        <!-- Définition des arrières plan superposés-->
		<div class="screen__background"> 
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	
</body>
</html>
<!-- 
<form action ="http://localhost:3000/Frais/frais.php" method="POST">

<h1>Veuillez remplir cette fiche pour vous faire rembourser de vos frais </h1>

<br><br>
<label for="nbr_km"> Nombre de kilomètre </label>
<input type="text" name="nbr_km">
<br><br><br>
<?php
//$nbr_km = isset ($_POST["nbr_km"]) ?$_POST['nbr_km'] : null;
//$cout_km = $nbr_km * 0.5;
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
</form> -->

<!-- <form action="http://localhost:3000/Inscription&connexion/index.php">
<input type="submit" value="Connexion"/>
</form>
<form action="http://localhost:3000/Inscription&connexion/deconnexion.php">
<input type="submit" value="Déconnexion"/>
</form> -->