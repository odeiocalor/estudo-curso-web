<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  use PHPMailer\PHPMailer\SMTP;

  require "./vendor/PHPMailer/Exception.php";
  require "./vendor/PHPMailer/OAuth.php";
  require "./vendor/PHPMailer/PHPMailer.php";
  require "./vendor/PHPMailer/POP3.php";
  require "./vendor/PHPMailer/SMTP.php";

  class Mensagem {
    private $destinatario = null;
    private $assunto = null;
    private $mensagem = null;
    public $status = array( 'codigo_status' => null, 'descricao_status' => '' );

    public function __get($atributo) {
      return $this->$atributo;
    }

    public function __set($atributo, $valor) {
      $this->$atributo = $valor;
    }

    public function mensagemValida() {
      if(empty($this->destinatario) || empty($this->assunto) || empty($this->mensagem)) {
        return false;
      }

      return true;
    }
  }

  $mensagem = new Mensagem();

  $mensagem->__set('destinatario', $_POST['destinatario']);
  $mensagem->__set('assunto', $_POST['assunto']);
  $mensagem->__set('mensagem', $_POST['mensagem']);

  if(!$mensagem->mensagemValida()) {
    echo 'Mensagem inválida';
    header('Location: index.php');
  }

  //Copiado da documentação do PHPMailer
  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {
    //Server settings
    $mail->SMTPDebug = false;                //Enable verbose debug output
    $mail->isSMTP();                                      //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';               //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                             //Enable SMTP authentication
    $mail->Username   = 'Insira o endereço de email de onde será enviado';               //SMTP username
    $mail->Password   = 'Insira a senha do endereço de email';                         //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;      //Enable implicit TLS encryption
    $mail->Port       = 587;                              //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('Insira o email remetente', 'Insira o nome do remetente');
    $mail->addAddress($mensagem->__get('destinatario'));     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $mensagem->__get('assunto');
    $mail->Body    = $mensagem->__get('mensagem');
    $mail->AltBody = 'É necessário utilizar um client que suporte HTML para ter acesso total ao conteúdo dessa mensagem';

    $mail->send();
    $mensagem->status['codigo_status'] = 1;
    $mensagem->status['descricao_status'] = 'E-mail enviado com sucesso';

  } catch (Exception $e) {
    $mensagem->status['codigo_status'] = 2;
    $mensagem->status['descricao_status'] = 'Não foi possível enviar este e-mail. Por favor tente novamente mais tarde. Detalhes do erro: ' . $mail->ErrorInfo;

    echo "";
  }

?>

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
        <div class="col">

          <? if($mensagem->status['codigo_status'] == 1) { ?>

            <div class="resultado-envio text-center mt-3">
              <h1 class="display-4 text-success">Sucesso</h1>
              <p><?= $mensagem->status['descricao_status'] ?></p>
              <a href="index.php" class="btn btn-success btn-lg mt-5 text-white">Voltar</a>
            </div>

          <? } ?>

          <? if($mensagem->status['codigo_status'] == 2) { ?>

            <div class="resultado-envio text-center mt-3">
              <h1 class="display-4 text-danger">Ops!</h1>
              <p><?= $mensagem->status['descricao_status'] ?></p>
              <a href="index.php" class="btn btn-success btn-lg mt-5 text-white">Voltar</a>
            </div>

          <? } ?>

        </div>
      </div>

    </div>

  </body>
</html>