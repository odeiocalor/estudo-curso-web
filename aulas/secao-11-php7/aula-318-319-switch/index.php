<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Switch</title>
	</head>
	<body>

		<h1>Switch</h1>

		<?php 

			// No PHP o switch compara por igualdade e não por identidade, sendo assim, caso seja comparado '1' com 1, o algoritimo entrará nesse case
			// Outro detalhe é que caso o valor que está sendo checado seja true e exista um case 1, o algoritimo entrará nesse case, pois o PHP considera true e 1 como iguais.
			$parametro = 2;

			switch($parametro) {
				case 1:
					echo 'Entrou no case 1';
					break;
				case 'abc':
					echo 'Entrou no case 2';
					break;
				case false:
					echo 'Entrou no case 3';
					break;
				default:
					echo 'Default';
					break;
			}

		?>

	</body>
</html>