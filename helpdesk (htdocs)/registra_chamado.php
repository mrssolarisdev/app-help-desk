<?php
	require_once('valida_acesso.php');

	$path = fopen('../../Apps/app_help_desk/arquivo.solar','a');



	$texto = implode('#', $_POST);
	$texto = $_SESSION['id'].'#'.$texto.PHP_EOL;
	fwrite($path, $texto);
	fclose($path);
	header('Location: abrir_chamado.php?chamado=okay');//poderia redirecionar para uma página bonitinha indicando que o chamado foi aberto, mas tambem serve
?>