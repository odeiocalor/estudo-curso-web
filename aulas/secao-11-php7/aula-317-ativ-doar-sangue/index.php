<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Atividade - Doação de sangue</title>
	</head>
	<body>

		<h1>Atividade - Doação de sangue</h1>

		<?php 

			$idade = 20;
			$peso = 150;

			// Usando If/Else
			if ($idade >= 16 && $idade <= 69 && $peso >=50) {
				echo 'O doador atende aos requisitos';
			} else {
				echo 'O doador não atende aos requisitos';
			}

		?>
		
		<!-- Usando operador ternário -->
		<!-- <p> 
		<?= $idade >= 16 && $idade <= 69 && $peso >= 50 ? 'O doador atende aos requisitos' : 'O doador não atende aos requisitos'; ?> 
		</p> -->

	</body>
</html>