<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Arrays com While, Do while e For</title>
	</head>
	<body>

		<h1>Arrays com While, Do while e For</h1>

		<?php 

			$registros = [
				['titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'], 
				['titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'], 
				['titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'],
				['titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4']
			];

			echo '<pre>';
				print_r($registros);
			echo '</pre>';

			$idx = 0;

			// While
			/*
			while($idx < count($registros)) {
				
				echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
				echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
				
				echo '<hr>';

				$idx++;
			};
			*/

			// Do while
			/*
			do {
				echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
				echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
				
				echo '<hr>';

				$idx++;
			} while($idx < count($registros));
			*/

			// For
			for($idx = 0; $idx < count($registros); $idx++) {
				echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
				echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
				
				echo '<hr>';
			}

		?>

	</body>
</html>