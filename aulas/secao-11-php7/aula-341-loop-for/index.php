<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Loops - For</title>
	</head>
	<body>

		<h1>Loops - For</h1>

		<?php 

			for($i = 0; $i <= 10; $i++) {
				echo "$i<br>";
			}

			echo '<hr>';

			for($x = 0; true; $x++) {

				if($x >= 20) {
					break;
				}

				echo "$x<br>";
			}

			echo '<hr>';

			for($n = 10; true; $n--) {

				if($n == 0) {
					break;
				}

				// break
				// continue

				echo "$n<br>";
			}

		?>

	</body>
</html>