<?php

require_once('redir_home_auth_index.php');
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="module">
      
    </script>
    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
      .error{
        font-weight: bold; 
        margin: 8px;
      }
      input{
        caret-color:orange;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php"  method="post">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="E-mail" name="email" required>

                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Senha" name="password" required>
                </div>

                <?php if(isset($_GET['login']) && $_GET['login'] === 'error'){
                ?>
                 <script type="text/javascript">
                    let email = document.getElementsByTagName('input')[0];
                    let key = document.getElementsByTagName('input')[1];

                    email.classList.add('is-invalid');
                    key.classList.add('is-invalid');
                  </script>
                  <div class="text-danger error"> Usuário ou senha inválidos</div>
                <?php
                  }
                ?>

                <?php
                if(isset($_GET['login']) && $_GET['login'] === 'error_auth'){
                
                ?>
                  <div class="text-danger error"> Faça login para continuar</div>

                <?php
                  }
                ?>
                <div id=""></div>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
