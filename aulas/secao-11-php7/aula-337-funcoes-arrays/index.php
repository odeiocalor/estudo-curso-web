<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Funçoes - Arrays</title>
	</head>
	<body>

		<h1>Funçoes - Arrays</h1>

		<?php 
		
			
			/*
			// is_array => verifica se é ou não um array
			$array = ['Notebook', 'Computador'];
			$retorno = is_array($array);
			
			if($retorno) {
				echo 'Sim, é um array';
			} else {
				echo 'Não, não é um array';
			}
			*/

			// -----------------------------------------------------

			/*
			// array_keys => retorna todas as chaves de um array
			$array = [1 => 'a', 7 => 'b', 18 => 'c'];

			echo '<pre>';
				print_r($array);
			echo '</pre>';

			$chaves_array = array_keys($array);

			echo '<pre>';
				print_r($chaves_array);
			echo '</pre>';
			*/

			// -----------------------------------------------------

			/*
			// sort => ordena o array e reajusta seus índices
			$array = ['Notebook', 'Computador', 'Celular', 'Teclado', 'Mouse'];

			echo '<pre>';
				print_r($array);
			echo '</pre>';

			sort($array); // reordena o próprio array e retorna true ou false para caso tenha sido possível reordenar ou não

			echo '<pre>';
				print_r($array);
			echo '</pre>';
			*/

			// -----------------------------------------------------

			/*
			// asort => ordena o array e preservand seus índices
			$array = ['Notebook', 'Computador', 'Celular', 'Teclado', 'Mouse'];
			
			echo '<pre>';
				print_r($array);
			echo '</pre>';

			asort($array); // reordena o próprio array e retorna true ou false para caso tenha sido possível reordenar ou não

			echo '<pre>';
				print_r($array);
			echo '</pre>';
			*/

			// -----------------------------------------------------

			/*
			// count => conta a qtd de elementos de um array
			$array = ['Notebook', 'Computador', 'Celular', 'Teclado', 'Mouse'];

			echo '<pre>';
				print_r($array);
				echo count($array);
			echo '</pre>';
			*/

			// -----------------------------------------------------

			/*
			// array_merge => funde um ou mais arrays
			$array = ['Notebook', 'Computador', 'Celular', 'Teclado', 'Mouse'];

			$array2 = ['Monitor', 'Escrivaninha', 'Fone de Ouvido'];

			$novo_array = array_merge($array, $array2);

			echo '<pre>';
				print_r($novo_array);
			echo '</pre>';
			*/

			// -----------------------------------------------------

			/*
			// explode => divide uma string baseada em um delimitador
			$string = '22/04/2021';

			$array_retorno = explode('/', $string);

			echo '<pre>';
				echo $string . '<br>';
				print_r($array_retorno);
				echo '<br>' . $array_retorno[2] . '-' . $array_retorno[1] . '-' . $array_retorno[0];
			echo '</pre>';
			*/

			// -----------------------------------------------------

			// implode => junta elementos de um array em uma string
			$array = ['a', 'b', 'x', 'y'];
			$string_retorno = implode(', ', $array);
			echo $string_retorno;



		?>

	</body>
</html>