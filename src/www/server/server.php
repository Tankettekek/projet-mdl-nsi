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

// on envoie le résulta dans le fichier csv
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
            	background-image: url("../img/image3.png");
        	}
			.container{
				text-align:center;
				background-color: #11191f;
            	padding-left: 50px;
            	padding-right: 50px;
			}
    	</style>
	</head>
	<body>
		<main class="container">
			<h1>Votre réservation a été pris en compte</h1>
			<p style="font-size:190px;">✓</p>
			<h2>Merci <?php echo $nom2 . " " . $prenom ?> de vous être enregistrée !</h2>
		</main>
	</body>
</html>