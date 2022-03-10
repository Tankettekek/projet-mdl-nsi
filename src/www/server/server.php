<?php
$prenom = $_POST["prenom"];
$nom2 = $_POST["nom"];
$niveau = $_POST["niveau"];
$classe = $_POST["classe"];
$instrument = $_POST["Instrument"];
$instrument2 = $_POST["Instrument2"];
$jour = $_POST["jour"];
$creneaux = $_POST["Creneaux"];
$classe_t = $niveau + $classe;

if ($instrument == "Autre"){
    $instrument =  $instrument2;
;}
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php echo $nom2 ; ?>
		<?php echo $prenom ; ?>
		<?php echo $classe_t ; ?>
		<?php echo $instrument ; ?>
		<?php echo $jour ; ?>
		<?php echo $creneaux ; ?>
	</body>
</html>