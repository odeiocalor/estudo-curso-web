<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Constantes</title>
	</head>
	<body>

		<h1>Constantes</h1>
		
		<?php 
			
			// Constantes não poderão ter seu conteúdo alterado ao decorrer da lógica do programa
			define('BD_URL', 'endereco_bd_dev');
			define('BD_USUARIO', 'usuario_dev');
			define('BD_SENHA', 'senha_bd_dev');

			echo BD_URL . '<br>';
			echo BD_USUARIO . '<br>';
			echo BD_SENHA . '<br>';

		?>

	</body>
</html>