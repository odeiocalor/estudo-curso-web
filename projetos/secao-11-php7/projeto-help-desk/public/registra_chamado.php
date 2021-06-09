<?php

  session_start();

  // Abrindo o arquivo
  $arquivo = fopen('../app_help_desk/arquivo.hd', 'a');

  $texto = $_SESSION['id'] . '|' . $_POST['titulo'] . '|' . $_POST['categoria'] . '|' . $_POST['descricao'] . PHP_EOL;
  
  // Escrevendo o arquivo
  fwrite($arquivo, $texto);

  // Fechando o arquivo
  fclose($arquivo);

  // Redireciona
  header('Location: abrir_chamado.php');
?>