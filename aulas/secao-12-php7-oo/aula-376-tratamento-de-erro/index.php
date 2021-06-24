<?php

  try {
    echo '<h3> Try </h3>';

    // Força uma exception ou erro
    if(!file_exists('require_arquivo_a.php')) {
      throw new Exception('O arquivo em questão deveria estar disponível as ' . date('d/m/Y H:i:s') . ' mas não estava. Vamos seguir assim mesmo!');

      //throw new Erro('O arquivo em questão deveria estar disponível as ' . date('d/m/Y H:i:s') . ' mas não estava. Vamos seguir assim mesmo!');
    }

  } catch(Error $e) { // $e é ondo será armazenada a ocorrência do erro
    echo '<h3> Catch erro </h3>';
    echo $e;

  } catch(Exception $e){
    echo '<h3> Catch exception </h3>';
    echo $e;

  } finally { // finally é opcional
    echo '<h3> Finally </h3>';
  }

?>