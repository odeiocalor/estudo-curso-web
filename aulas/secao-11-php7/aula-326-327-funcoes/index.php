<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Funções</title>
	</head>
	<body>

		<h1>Funções</h1>

		<?php 

			// Função do tipo void => Não retorna nada
			function exibirBoasVindas() {
				echo 'Bem-vindo a essa página!<br>';
			}

			exibirBoasVindas();

			// Função com retorno (return)
			function calcularAreaTerreno($largura, $comprimento) {
				$area = $largura * $comprimento;
				return $area;
			}

			$resultado = calcularAreaTerreno(5, 25);

			echo $resultado;
			echo '<br>';
			echo calcularAreaTerreno(20, 30);
			echo '<br>';
			echo calcularAreaTerreno(14, 24);
			echo '<br>';
			echo calcularAreaTerreno(67, 54);

		?>

	</body>
</html>