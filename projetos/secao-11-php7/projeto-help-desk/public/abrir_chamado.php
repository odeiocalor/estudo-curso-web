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

    <div class="container">    
      <div class="row mt-5">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Abertura de chamado
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="post" action="registra_chamado.php">
                    <div class="mb-4">
                      <label>Título</label>
                      <input type="text" class="form-control" placeholder="Título" name="titulo">
                    </div>
                    
                    <div class="mb-4">
                      <label>Categoria</label>
                      <select class="form-select" name="categoria">
                        <option selected hidden disabled>Selecione uma categoria</option>
                        <option>Criação Usuário</option>
                        <option>Impressora</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Rede</option>
                      </select>
                    </div>
                    
                    <div class="mb-4">
                      <label>Descrição</label>
                      <textarea class="form-control" rows="3" name="descricao"></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col">
                        <a href="home.php" class="btn btn-lg btn-warning w-100 text-white" type="submit">Voltar</a>
                      </div>

                      <div class="col">
                        <button class="btn btn-lg btn-info w-100 text-white" type="submit">Abrir</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>