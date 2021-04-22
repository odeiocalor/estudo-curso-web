<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Loop - Foreach</title>
	</head>
	<body>

		<h1>Loop - Foreach</h1>

		<?php 

			$itens = ['Sofá', 'Mesa', 'Cadeira', 'Fogão', 'Geladeira'];

			echo '<pre>';
				print_r($itens);
			echo '</pre>';

			foreach($itens as $item) {
				echo "$item ";

				if($item == 'Mesa') {
					echo '(*Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras)';
				}

				echo '<br>';
			}

		?>

	</body>
</html>