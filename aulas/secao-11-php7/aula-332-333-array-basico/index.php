<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Array</title>
	</head>
	<body>

		<h1>Array</h1>

		<?php 

			// Sequenciais (numéricos)
			// $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacate');
			$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'];

			$lista_frutas[] = 'Abacaxi';
			echo '<pre>';
				var_dump($lista_frutas);
			echo '</pre>';
		
			echo '<hr>';
		
			echo '<pre>';
				print_r($lista_frutas);
			echo '</pre>';
		
			echo '<hr>';
			
			echo $lista_frutas[4];

			// Associativos

			// $lista_frutas = [
			// 	'a' => 'Banana', 
			// 	'b' => 'Maçã', 
			// 	'x' => 'Morango', 
			// 	'z' => 'Uva', 
			// 	'2' => 'Abacate'
			// ];

			// $lista_frutas['w'] = 'Abacaxi';

			// echo '<pre>';
			// 	var_dump($lista_frutas);
			// echo '</pre>';

			// echo $lista_frutas['w'];

		?>

	</body>
</html>