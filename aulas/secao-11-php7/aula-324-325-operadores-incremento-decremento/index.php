<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Operadores de incremento/decremento</title>
	</head>
	<body>

		<h1>Operadores de incremento/decremento</h1>

		<?php 

			echo '<h3>Pós-incremento</h3>';

			$a = 7;

			echo "O valor contido em a é $a<br>";
			echo 'O valor contido em a após o incremento é ' . $a++ . '<br>';
			echo "O valor atualizado é $a <br>";

			echo '<h3>Pré-incremento</h3>';

			$a = 7;

			echo "O valor contido em a é $a<br>";
			echo 'O valor contido em a após o incremento é ' . ++$a . '<br>';

			echo '<h3>Pós-decremento</h3>';

			$a = 7;

			echo "O valor contido em a é $a<br>";
			echo 'O valor contido em a após o decremento é ' . $a-- . '<br>';
			echo "O valor atualizado é $a <br>";

			echo '<h3>Pré-decremento</h3>';

			$a = 7;

			echo "O valor contido em a é $a<br>";
			echo 'O valor contido em a após o decremento é ' . --$a . '<br>';

		?>

	</body>
</html>