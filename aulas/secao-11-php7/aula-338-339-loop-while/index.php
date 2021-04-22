<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Loops - While</title>
	</head>
	<body>

		<h1>Loops - While</h1>

		<?php 

			$num = 1;

			echo '-- Início do loop --<br>';
			while($num < 10) {
				echo "$num <br>";
				$num++;
			}
			echo '-- Fim do loop --<br>';

			$num2 = 0;

			echo '-- Início do loop --<br>';
			while(true) {
				echo "$num2 <br>";
				$num2 += 5;

				if($num2 > 100) {
					break;
				}
			}
			echo '-- Fim do loop --';

			$num3 = 0;

			echo '-- Início do loop --<br>';
			while($num3 < 10) {
				
				$num3 += 1;

				if($num3 == 2 || $num3 == 6) {
					continue;
				}
				
				echo "$num3 <br>";
			}
			echo '-- Fim do loop --';


		?>

	</body>
</html>