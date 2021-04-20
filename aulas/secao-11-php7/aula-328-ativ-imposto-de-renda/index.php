<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Atividade - Imposto de renda</title>
	</head>
	<body>

		<h1>Atividade - Imposto de renda</h1>

		<?php 

			function calcImpostoRenda($salario) {
				switch(true) {
					case $salario >= 1903.99 && $salario <= 2826.65:
						$imposto = ($salario * 7.5) / 100;
						break;
					case $salario >= 2826.66 && $salario <= 3751.05:
						$imposto = ($salario * 15) / 100;
						break;
					case $salario >= 3751.06 && $salario <= 4664.68:
						$imposto = ($salario * 22.5) / 100;
						break;
					case $salario > 4664.68:
						$imposto = ($salario * 27.5) / 100;
						break;
					default:
						$imposto = 0;
						break;
				}

				return $imposto;
			}

			$valor_imposto_renda = calcImpostoRenda(5000);

			echo "O valor de imposto de renda referente ao seu salário é: R$ $valor_imposto_renda"

		?>

	</body>
</html>