<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>If/Else</title>
	</head>
	<body>

		<h1>If/Else</h1>
		
		<?php 

			echo 'Operadores lógicos:<br><br>';
			// AND ou && operador E - Todas as expressões verdadeiros
			// OR ou || operador OU - Ao menos uma expressão verdadeira
			// XOR operador Xor - Apenas uma das expressões verdadeiras
			// ! operador Negação - Inverte o resultado da expressão

			// F e V = F
			if(5 == 3 && 10 > 3) {
				echo 'Verdadeiro<br><br>';
			} else {
				echo 'Falso<br><br>';
			}

			// V e F = F
			if(2 <= 3 || 10 > 15) {
				echo 'Verdadeiro<br><br>';
			} else {
				echo 'Falso<br><br>';
			}

			// V e F = F
			if(2 <= 3 XOR 10 > 15) {
				echo 'Verdadeiro<br><br>';
			} else {
				echo 'Falso<br><br>';
			}

			// !(V) = F
			if(!(1 == 1)) {
				echo 'Verdadeiro<br><br>';
			} else {
				echo 'Falso<br><br>';
			}

			// () estabelecer precedência
			// (V e V) = V ou F = V
			if((22 == 22 && 3 == 3) || 5 != 5) {
				echo 'Verdadeiro<br><br>';
			} else {
				echo 'Falso<br><br>';
			}


		?>

	</body>
</html>