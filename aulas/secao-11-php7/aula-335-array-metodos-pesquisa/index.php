<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Array - Métodos de pesquisa</title>
	</head>
	<body>

		<h1>Array - Métodos de pesquisa</h1>

		<?php 

			

			$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

			echo '<pre>';
				print_r($lista_frutas);
			echo '</pre>';

			// in_array() => true ou false para a existência do que está sendo procurado
			$existe = in_array('Maçã', $lista_frutas); // true => 1 | false => vazio

			If($existe) {
				echo 'Sim, o valor pesquisado existe no array<br>';
			} else {
				echo 'Não, o valor pesquisado não existe no array<br>';
			};

			echo '<hr>';

			// array_search() => retorna o índice do valor pesquisado, caso ele exista
			$existe2 = array_search('Uva', $lista_frutas); // false => null

			If($existe2 != null) {
				echo 'Sim, o valor pesquisado existe no array<br>';
			} else {
				echo 'Não, o valor pesquisado não existe no array<br>';
			}

			echo '<hr>';

			$lista_coisas = [
				'frutas' => $lista_frutas,
				'pessoas' => ['João', 'Maria']
			];

			echo '<pre>';
				print_r($lista_coisas);
			echo '</pre>';

			echo in_array('Uva', $lista_coisas['frutas'])

		?>

	</body>
</html>