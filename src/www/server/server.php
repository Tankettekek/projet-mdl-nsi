<?php
//on récupére les variables du formulaire						
$prenom = $_POST["prenom"];
$nom2 = $_POST["nom"];
$niveau = $_POST["niveau"];
$classe = $_POST["classe"];							
$instrument = $_POST["Instrument"];                  
$instrument2 = $_POST["Instrument2"];				 
$jour = $_POST["jour"];								 
$creneaux = $_POST["Creneaux"];						 
$classe_t = $niveau . " " . $classe;

// on vérifie que on ne prend la bonne variable si le client choisi "Autre"
if ($instrument == "Autre"){
    $instrument =  $instrument2;
;}

// on envoie le résultat dans le fichier csv
$fichier = fopen("info.csv", "a");
fputs($fichier, $jour.";".$creneaux.";".$nom2.";".$prenom.";".$classe_t.";".$instrument."\n" );
fclose($fichier);


?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<html>
	<head>
		<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
		<style>
        		body{
				padding-top:30px; 
           			background-image: url("../img/bg.webp");
        			min-height: 100vh;
			}
			.container{
				border-radius: 15px;
				text-align:center;
				background-color: #11191f;
            			padding: 50px;
			}
    	</style>
	</head>
	<body>
		<main class="container">
			<h3>Votre réservation a bien été prise en compte</h3>
			<img src="/img/logo2.png" style="width:60vh; height: auto;"/>
			<h3 style="padding-top: 20px;">Merci <?php echo $prenom . " " . $nom2 ?> de vous être enregistré(e) !</h3>
		</main>
	</body>
</html>
