<html>
	<head>
		<meta charset="utf-8" />
		<title>App Mail Send</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	</head>

	<body>

		<div class="container">  

			<div class="py-3 text-center">
				<img class="d-block mx-auto mb-2" src="img/logo.png" alt="" width="72" height="72">
				<h2>Send Mail</h2>
				<p class="lead">Seu app de envio de e-mails particular!</p>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="card-body font-weight-bold">
						
						<form action="processa_envio.php" method="POST">
							<div class="mb-3">
								<label class="fw-bold" for="destinatario">Destinatário</label>
								<input type="text" class="form-control" id="destinatario" placeholder="joao@dominio.com.br" name="destinatario">
							</div>

							<div class="mb-3">
								<label class="fw-bold" for="assunto">Assunto</label>
								<input type="text" class="form-control" id="assunto" placeholder="Assunto do e-mail" name="assunto">
							</div>

							<div class="mb-3">
								<label class="fw-bold" for="mensagem">Mensagem</label>
								<textarea class="form-control" id="mensagem" name="mensagem"></textarea>
							</div>

							<div class="d-flex justify-content-end">
								<button type="submit" class="btn btn-primary btn-lg">Enviar Mensagem</button>
							</div>
						</form>

					</div>
				</div>
			</div>
		
		</div>

	</body>
</html>