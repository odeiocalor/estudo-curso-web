<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>False, null e empty</title>
	</head>
	<body>

		<h1>False, null e empty</h1>

		<?php 

			// false - tipo variável boolean
			// null e empty - valores especiais

			$funcionario1 = null;
			$funcionario2 = '';
			$funcionario3 = false;

			// Valores null
			if(is_null($funcionario1)) {
				echo 'Sim, a variável é null';
			} else {
				echo 'Não, a variável não é null';
			}

			echo '<br>';

			if(is_null($funcionario2)) {
				echo 'Sim, a variável é null';
			} else {
				echo 'Não, a variável não é null';
			}

			echo '<br>';

			if(is_null($funcionario3)) {
				echo 'Sim, a variável é null';
			} else {
				echo 'Não, a variável não é null';
			}
			

			echo '<hr>';

			// Valores vazios
			if(empty($funcionario1)) {
				echo 'Sim, a variável está vazia';
			} else {
				echo 'Não, a variável não está vazia';
			}

			echo '<br>';

			if(empty($funcionario2)) {
				echo 'Sim, a variável está vazia';
			} else {
				echo 'Não, a variável não está vazia';
			}

			echo '<br>';

			if(empty($funcionario3)) {
				echo 'Sim, a variável está vazia';
			} else {
				echo 'Não, a variável não está vazia';
			}

		?>

	</body>
</html>