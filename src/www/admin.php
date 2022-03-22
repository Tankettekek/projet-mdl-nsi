<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
	<?php
		$fichier = fopen("info.csv", "r");
		$resp="";
		$lignes = []; 
		while (($line = fgetcsv($fichier)) !== FALSE) {
			if (strtotime(str_replace('/', '-', $line[0])) < time() ) {
				$lignes[] = (strtotime(str_replace('/', '-', $line[0] . " " . $line[1])), array_slice($line, 2));
			}			
		}
		$colonne = array_column($lignes, 0);
		array_multisort($colonne, SORT_ASC, $lignes);
	?>
    <style>
        body{
            background-image: url("img/image3.png");
        }
        .container{
            background-color: #11191f;
            padding-left: 50px;
            padding-right: 50px;
        }
    </style>
</head>
<body>
    <main class="container">
        <h1>admin</h1>
		<?php echo "<pre>" ; print_r($lignes) ; echo "</pre>" ?>
    </main>
</body>
</html>