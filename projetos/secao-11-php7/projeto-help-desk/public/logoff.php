<?php

  session_start();

  session_destroy();
  header('Location: index.php');

  // echo '<pre>';
  // print_r($_SESSION);
  // echo '</pre>';

  // Remover índices do array de sessão
  // unset() - serve para remover índices de qualquer array

  // unset($_SESSION['x']);

  // echo '<pre>';
  // print_r($_SESSION);
  // echo '</pre>';

  // Destruir a variável de sessão
  // session_destroy()

  // session_destroy();

  // echo '<pre>';
  // print_r($_SESSION);
  // echo '</pre>';


?>