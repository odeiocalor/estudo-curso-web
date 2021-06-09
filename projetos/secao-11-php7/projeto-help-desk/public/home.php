<? require_once "valida_acesso.php" ?>

<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Help Desk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  </head>

  <body>

    <? include_once "shared/header.php" ?>

    <main>
      
      <div class="container">    
        <div class="row mt-5">
          <div class="card-home">
            <div class="card">
              
              <div class="card-header">
                Menu
              </div>

              <div class="card-body">
                <div class="row">

                  <div class="col-6 d-flex justify-content-center">
                      <a href="abrir_chamado.php"><img src="formulario_abrir_chamado.png" width="70" height="70"></a>
                  </div>

                  <div class="col-6 d-flex justify-content-center">
                      <a href="consultar_chamado.php"><img src="formulario_consultar_chamado.png" width="70" height="70"></a>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

    </main>
  </body>
</html>