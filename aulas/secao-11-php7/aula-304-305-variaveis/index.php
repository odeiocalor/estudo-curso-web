<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Variáveis</title>
	</head>
	<body>

		<h1>Variáveis</h1>
		
		<?php 
			
			// string
			$nome = 'Carlos Souza';

			// int
			$idade = 20;

			// float
			$peso = 61.5;

			// bool
			$fumante_sn = false;


		?>

		<h1>Ficha cadastral</h1>
		<br>
		<p>Nome: <?= $nome ?></p>
		<p>Idade: <?= $idade ?></p>
		<p>Peso: <?= $peso ?></p>
		<p>Fumante: <?= $fumante_sn ?></p>

	</body>
</html>