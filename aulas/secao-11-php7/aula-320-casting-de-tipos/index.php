<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Casting de tipos</title>
	</head>
	<body>

		<h1>Casting de tipos</h1>

		<?php 

			// gettype() => retorna o tipo da variável
			$valor = 15;
			
			// Número racional => (float)/(real)/(double) => retorna double
			$valor_double = (float) $valor;

			// String
			$valor_string = (string) $valor;

			// Número inteiro => (int)/(integer) => retorna integer
			$valor_int = (int) $valor;

			// Boolean => caso true retorna 1, caso false não retorna nada
			$valor_bool = (bool) $valor;

			echo $valor . ' ' . gettype($valor);
			echo '<br>';
			echo $valor_double . ' ' . gettype($valor_double);
			echo '<br>';
			echo $valor_string . ' ' . gettype($valor_string);
			echo '<br>';
			echo $valor_int . ' ' . gettype($valor_int);
			echo '<br>';
			echo $valor_bool . ' ' . gettype($valor_bool);

		?>

	</body>
</html>