<? require_once "valida_acesso.php" ?>

<?php

  // Chamados
  $chamados = array();

  // Abrir o arquivo.hd
  $arquivo = fopen('../app_help_desk/arquivo.hd', 'r');

  // Enquanto houver registros (linhas) a serem recuperados
  while(!feof($arquivo)) { // Testa para achar o fim do arquivo
    $registro = fgets($arquivo, );
    
    $registro_dados = explode('|', $registro);

    if($_SESSION['perfil_id'] == 2) {
      // Só exibir o chamado, se ele foi criado pelo user
      if($_SESSION['id'] != $registro_dados[0]) {
        continue;
      } else {
        $chamados[] = $registro;
      }
    } else {
      $chamados[] = $registro;
    }
  }

  fclose($arquivo);
?>

<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Help Desk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  </head>

  <body>

    <? include_once "shared/header.php" ?>

    <div class="container">    
      <div class="row mt-5">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

              <? foreach($chamados as $chamado) { ?>
                
                <?php
                  $chamado_dados = explode('|', $chamado);

                  if(count($chamado_dados) < 3) {
                    continue;
                  }
                ?>

                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title"><?=$chamado_dados[1]?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?=$chamado_dados[2]?></h6>
                    <p class="card-text"><?=$chamado_dados[3]?></p>

                  </div>
                </div>

              <? } ?>

              <div class="row mt-5">
                <div class="col">
                  <a href="home.php" class="btn btn-lg btn-warning w-100 text-white" type="submit">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>