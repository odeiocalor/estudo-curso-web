<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Funções para tarefas matemáticas</title>
	</head>
	<body>

		<h1>Funções para tarefas matemáticas</h1>

		<?php 

			$num = 7.6;

			// ceil => arredonda para cima
			echo ceil($num);

			echo '<hr>';

			// floor => arredenda para baixo
			echo floor($num);
			
			echo '<hr>';

			// round => arredonda
			echo round($num);

			echo '<hr>';

			// rand => número randômico entre 0 e randmax, ou entre os paramêtros indicados
			echo rand(10, 20);
			echo '<br>' . getrandmax();

			echo '<hr>';

			// sqrt => raiz quadrada
			echo sqrt($num);

		?>

	</body>
</html>