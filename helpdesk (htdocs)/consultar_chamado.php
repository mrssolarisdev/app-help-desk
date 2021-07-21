<?php
require_once('valida_acesso.php');
require_once('valida_perfil.php');
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
     <ul class="navbar-nav">
        <li class="nav-item"></li>
          <a class="nav-link" href="logoff.php">Sair</a>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

              <?php
                foreach ($chamados as $indice_chamado => $chamado) {
                  $dados_chamado = explode('#',$chamado);
                  
                  if (count($dados_chamado) < 3){ #checa a quantidade de caracteres na linha, se for menor que 3, desconsideramos.
                    continue;
                  }
              ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $dados_chamado[1] ?></h5><!-- Título do chamado...-->
                  <h6 class="card-subtitle mb-2 text-muted"><?= $dados_chamado[2] ?></h6><!-- Categoria -->
                  <p class="card-text"><?= $dados_chamado[3] ?></p> <!-- descricao do chamado -->

                </div>
              </div>

              <?php
                }
              ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>