<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Funções para manipular datas</title>
	</head>
	<body>

		<h1>Funções para manipular datas</h1>

		<?php 

			// Recuperação da data atual / data corrente
			echo date('d/m/Y | H:i');

			echo '<hr>';

			// Recupera o fuso horário atual
			echo date_default_timezone_get();

			// Seta um fuso horário
			// echo date_default_timezone_set('America/Sao_Paulo');

			echo '<hr>';

			// Calcular a diferença de dias entre duas datas
			$data_inicial = '2018-04-24';
			$data_final = '2018-05-15';

			// timestamp
			// 01/01/1970 -- 2018-04-24 (js => milissegundos / php => segundos)

			$time_inicial = strtotime($data_inicial);
			$time_final = strtotime($data_final);

			echo $data_inicial . ' - ' . $time_inicial;
			echo '<br>';
			echo $data_final . ' - ' . $time_final;

			echo '<br>';

			$diferenca_times = $time_final - $time_inicial;
			echo 'A diferença de segundos entre a data inicial e a final é ' . $diferenca_times;

			$segundos_dia = 24 * 60 * 60;

			echo '<br>';
			echo 'Um dia possui ' . $segundos_dia . ' segundos';

			$diferenca_dias = $diferenca_times / $segundos_dia;

			echo '<br>';
			echo 'A diferença em dias é: ' . $diferenca_dias;
		?>

	</body>
</html>