<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Help Desk</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
      .card-login {
        width: 350px;
      }
    </style>
  </head>

  <body>
    
    <header>
      <nav class="navbar navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            App Help Desk
          </a>
        </div>
      </nav>
    </header>
    
    <main>
      <div class="container">    
        <div class="row justify-content-center mt-5">

          <div class="card-login">
            <div class="card">
              <div class="card-header">
                Login
              </div>
              <div class="card-body">
                <form action="valida_login.php" method="post">
                  <? if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                    <div class="text-danger fs-6 mb-2">
                      Usuário ou senha inválido(s)
                    </div>
                  <? } ?>

                  <? if(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
                    <div class="text-danger fs-6 mb-2">
                      Faça login antes de acessar as páginas protegidas
                    </div>
                  <? } ?>
                  
                  <input type="email" class="form-control mb-4" placeholder="E-mail" name="email">
                  
                  <input type="password" class="form-control mb-4" placeholder="Senha" name="senha">
                  
                  <button class="btn btn-lg btn-info text-white w-100" type="submit">Entrar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>