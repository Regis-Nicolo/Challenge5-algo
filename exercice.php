<!DOCTYPE html>
<html>
	<head>
		<title>Exercices algo</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Exercice 1</h1>
			<?php
				$cuissons = ["à point", "saignant","bleu","bien cuit"];
				$viandes = ["poulet","boeuf", "mouton"];
				$commandes = [];

				foreach ($viandes as $viande){
				foreach ($cuissons as $cuisson){
			  	array_merge($commandes, $viandes.""." of "."".$cuissons."\n");
			?>

		<h1>Exercice 2</h1>
			<?php
				$genre = "horreur fantastique action western thriller comédie drame romance historique";
				$tags = explode(''; $genre);
				print_r($tags);
			?>

		<h1>Exercice 3</h1>
			<?php
				$fruits = ["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"];
				$fruits_favoris =
			?>

		<h1>Exercice 4</h1>
			<?php
				$prenoms = $arrayName = array('' => , );["Harry", "Hilary","Harrington", "Hagrid", "Holmes"];

				array_splice($prenoms, [2]);

				print_r($prenoms);
			?>
	    </body>
</html>