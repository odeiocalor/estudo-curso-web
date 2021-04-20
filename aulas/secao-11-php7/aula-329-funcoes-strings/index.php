<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Funções para manipular strings</title>
	</head>
	<body>

		<h1>Funções para manipular strings</h1>

		<?php 

			$texto = 'curso completo de PHP';

			// string to lower
			echo $texto . '<br>';
			echo strtolower($texto);

			echo '<hr>';

			// string to upper
			echo $texto . '<br>';
			echo strtoupper($texto);

			echo '<hr>';

			// upper case first
			echo $texto . '<br>';
			echo ucfirst($texto);

			echo '<hr>';

			// string length / espaços também são contados
			echo $texto . '<br>';
			echo strlen($texto);	

			echo '<hr>';

			// string replace 
			echo $texto . '<br>';
			echo str_replace('PHP', 'JavaScript', $texto);

			echo '<hr>';

			// substr
			echo $texto . '<br>';
			echo substr($texto, 1, 4);
		?>

	</body>
</html>