<?php
$prenom = $_POST["prenom"];
$nom2 = $_POST["nom"];
$niveau = $_POST["niveau"];
$classe = $_POST["classe"];
$instrument = $_POST["Instrument"];
$instrument2 = $_POST["Instrument2"];
$jour = $_POST["jour"];
$creneaux = $_POST["Creneaux"];
$classe_t = $niveau . " " . $classe;

if ($instrument == "Autre"){
    $instrument =  $instrument2;
;}
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
            	background-image: url("../img/peakpx.jpg");
        	}
    	</style>
	</head>
	<body>
		<main>
			<?php echo"<h1>" . $nom2 . "</h1>" ; ?>
			<h1><?php echo $prenom ; ?></h1>
			<?php echo $classe_t ; ?>
			<?php echo $instrument ; ?>
			<?php echo $jour ; ?>
			<?php echo $creneaux ; ?>
		</main>
	</body>
</html>