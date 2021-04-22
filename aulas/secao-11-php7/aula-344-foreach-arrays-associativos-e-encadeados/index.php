<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Foreach em arrays associativos e Foreach encadeados</title>
	</head>
	<body>

		<h1>Foreach em arrays associativos e Foreach encadeados</h1>

		<?php 

			$funcionarios = [
				['nome' => 'João', 'salario' => 2500, 'data_nascimento' => '06/03/1970'], 
				['nome' => 'Maria', 'salario' => 3000, 'data_nascimento' => '24/12/1999'], 
				['nome' => 'Júlia', 'salario' => 2200, 'data_nascimento' => '15/08/2002']
			];

			echo '<pre>';
				print_r($funcionarios);
			echo '</pre>';

			foreach($funcionarios as $idx => $funcionario) {
				foreach($funcionario as $idx2 => $valor) {
					echo "$idx2 - $valor<br>";
				}
				echo '<hr>';
			}

		?>

	</body>
</html>