<?php

  // info db
  $dsn = 'mysql:host=localhost;dbname=db_php_com_pdo';
  $user = 'root';
  $password = '';

  try {
    // cria a conexão
    $conexao = new PDO($dsn, $user, $password);

    // criar a tabela caso ela não exista
    $query = '
      create table if not exists tb_usuarios(
        id int not null primary key auto_increment,
        nome varchar(50) not null,
        email varchar(100) not null,
        senha varchar(32) not null
      )
    ';
    // executa a query
    $conexao->exec($query);
    
    /*
    // insere informações na tabela
    $query = '
        insert into tb_usuarios(
          nome, email, senha
        ) values (
          "Carlos Souza", "carlos@teste.com.br", "123456"
        )
    ';
    $conexao->exec($query);
    */
    
    // seleciona tudo de tb_usuarios
    $query = '
      select * from tb_usuarios
    ';
    
    // guarda o statement resultado da query
    //$stmt = $conexao->query($query);
    
    // recupera o resultado da query em um array
    // recupera tanto associativo, quanto numérico
    //$lista_usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // recupera como objeto em vez de array
    //$lista_usuarios = $stmt->fetchAll(PDO::FETCH_OBJ);

    // recupera apenas uma ocorrência
    //$usuario = $stmt->fetch()
    
    /*
    // exibe o array formatado
    echo '<pre>';
    print_r($lista_usuarios);
    echo '</pre>';
    */

    // exibe o índice nome do índice 0 de tb_usuarios
    //echo $lista_usuarios[0]['nome'];
    
    // exibir caso seja um objeto
    //echo $lista_usuarios[0]->nome;

    // exibir caso seja usado apenas o fetch()
    //echo $usuario['nome'];

    /*
    // percorre o array gerado pelo fetchAll() usando um foreach
    foreach($lista_usuarios as $user => $value) {
      echo $value['nome'];
      echo '<hr>';
    }
    */

    // percorre o array gerado ao chamar a função query() dentro do foreach
    foreach($conexao->query($query) as $user => $value) {
      echo $value['nome'];
      echo '<hr>';
    }

  } catch(PDOException $e) {
    echo 'Erro: ' . $e->getCode() . ' | Mensagem: ' . $e->getMessage();
  }

?>