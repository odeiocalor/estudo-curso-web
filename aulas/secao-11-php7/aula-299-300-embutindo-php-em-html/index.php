<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Embutindo PHP no HTML</title>
	</head>
	<body>
		<?php 
			echo 'Utilizando a tag padrão';
		?>
		<br>
		<?= 'Utilizando a tag impressão '?>
		<br>
		<? 
			echo 'Utilizando a tag curta';
		?>
	</body>
</html>