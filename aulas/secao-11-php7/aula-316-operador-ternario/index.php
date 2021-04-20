<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Operador ternário</title>
	</head>
	<body>

		<h1>Operador ternário</h1>
		
		<?php 

			$usuario_possui_cartao_loja = true;
			$valor_compra = 320;

			$valor_frete = 50;
			$recebeu_desconto_frete = true;

			// Não é recomendado encadiar operadores ternários. Apenas fins didáticos.
			$valor_frete_aux = $usuario_possui_cartao_loja && $valor_compra >= 400 ? 0 : ($usuario_possui_cartao_loja && $valor_compra >= 300 ? 10 : ($usuario_possui_cartao_loja && $valor_compra >= 100 ? 25 : $valor_frete));

			$recebeu_desconto_frete = $valor_frete != $valor_frete_aux ? true : false;

			$valor_frete = $valor_frete_aux;

		?>

		<h1>Detalhes do pedido</h1>

		<p>Possui cartão da loja?
			<?= $usuario_possui_cartao_loja ? 'SIM' : 'NÃO'; ?>
		</p>

		<p>Valor da compra: <?= $valor_compra ?></p>

		<p>Recebeu desconto no frete?
			<?=	$recebeu_desconto_frete ? 'SIM' : 'NÃO'; ?>
		</p>

		<p>Valor do frete: <?= $valor_frete ?></p>

	</body>
</html>