<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Array multidimensional</title>
	</head>
	<body>

		<h1>Array multidimensional</h1>

		<?php 

			$lista_coisas = [];

			$lista_coisas['frutas'] = [
				'1' => 'Banana',
				'2' => 'Maçã',
				'3' => 'Morango',
				'4' => 'Uva'
			];

			$lista_coisas['pessoas'] = [
				'1' => 'João',
				'2' => 'José',
				'3' => 'Maria'
			];

			echo '<pre>';
				print_r($lista_coisas);
			echo '</pre>';

			echo '<hr>';

			echo $lista_coisas['frutas'][3];
			echo '<br>';
			echo $lista_coisas['pessoas'][3];

		?>

	</body>
</html>