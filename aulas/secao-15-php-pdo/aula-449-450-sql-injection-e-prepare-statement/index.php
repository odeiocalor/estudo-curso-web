<?php

  if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {
    // info db
    $dsn = 'mysql:host=localhost;dbname=db_php_com_pdo';
    $user = 'root';
    $password = '';

    try {
      // cria a conexão
      $conexao = new PDO($dsn, $user, $password);

      // cria a query
      $query = "select * from tb_usuarios where ";
      $query .= "email = :usuario ";
      $query .= "and senha = :senha";

      // prepara a query
      $stmt = $conexao->prepare($query);
      
      // seta os valores por meio da função bindValue(), que protege contra SQLInjection's
      $stmt->bindValue(':usuario', $_POST['usuario']);
      $stmt->bindValue(':senha', $_POST['senha']);

      // executa a query
      $stmt->execute();

      $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

      echo '<pre>';
      print_r($usuario);
      echo '</pre>';

    } catch(PDOException $e) {
      echo 'Erro: ' . $e->getCode() . ' | Mensagem: ' . $e->getMessage();
    }
  }

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <form class="mt-5" method="post" action="index.php">
        <div class="mb-3">
          <input class="form-control" type="text" placeholder="Usuário" name="usuario">
        </div>

        <div class="mb-3">
          <input class="form-control" type="password" placeholder="Senha" name="senha">
        </div>

        <div class="d-flex justify-content-end">
          <button class="btn btn-success" type="submit">Entrar</button>
        </div>
      </form>
    </div>
  </body>
</html>