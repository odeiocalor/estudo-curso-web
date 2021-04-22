<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Atividade - Mega-Sena</title>
	</head>
	<body>

		<h1>Atividade - Mega-Sena</h1>

		<?php 

			$mega_sena = array();

			while(count($mega_sena) < 6) {
				$num_rand = rand(1, 60);
				
				if(in_array($num_rand, $mega_sena) == false) {					
					$mega_sena[] = $num_rand;
				} 
			}

			echo '<pre>';
				print_r($mega_sena);
			echo '</pre>';
			
		?>

	</body>
</html>