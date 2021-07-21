<?php
$chamados = [];
$path = fopen('../../Apps/app_help_desk/arquivo.solar','r');
$line = null;

while(!feof($path)){
  $line = fgets($path);
  if($_SESSION['perfil_id'] == 2){ #checa se o perfil é de usuário
     if ($_SESSION['id'] != $line[0]) {#se for, checa se o id do usuário é igual ao id guardado na linha do chamado atual, se não for igual, ele pula essa iteração e procura o próximo.
          continue;  
      }
      $chamados[] = $line;
  } #se não é igual a 2, é perfil de adm então:
  else
    $chamados[] = $line;
}
?>