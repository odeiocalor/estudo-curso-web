<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Operadores aritméticos</title>
	</head>
	<body>

		<h1>Operadores aritméticos</h1>

		<?php 

			$num1 = 13;
			$num2 = 4;

			echo "A soma entre $num1 e $num2 é " . ($num1 + $num2);
			echo '<br>';
			echo "A subtração entre $num1 e $num2 é " . ($num1 - $num2);
			echo '<br>';
			echo "A multiplicação entre $num1 e $num2 é " . ($num1 * $num2);
			echo '<br>';
			echo "A divisão entre $num1 e $num2 é " . ($num1 / $num2);
			echo '<br>';
			echo "O módulo entre $num1 e $num2 é " . ($num1 % $num2);

		?>

	</body>
</html>