<?php
	session_start();
	$aut = false;
	$user_id = null;
	$user_perfil = null;

	$perfis = array(1 => 'Admin', 2 => 'Usuario');

	$usuarios = array(
		array('id' => 1, 'email' => 'adm@teste.com.br', 'password' => 'admin', 'perfil_id' => 1),
		array('id' => 2,'email' => 'user@teste.com.br', 'password' => '1234', 'perfil_id' => 1),
		array('id' => 3,'email' => 'maria@teste.com.br', 'password' => '1234', 'perfil_id' => 2),
		array('id' => 4,'email' => 'joaquim@teste.com.br', 'password' => '1234','perfil_id' => 2)
	);

	foreach ($usuarios as $value) {
		if ($value['email'] === $_POST['email'] && $value['password'] === $_POST['password']) {
			$aut = true;
			$user_id = $value['id'];
			$user_perfil = $value['perfil_id'];
		}
	}

	try{
		if($aut){
			$_SESSION['autenticado'] = 'yes';
			$_SESSION['id'] = $user_id; # faz isso pro id do usuário ficar acessível em qualquer página da sessão.
			$_SESSION['perfil_id'] = $user_perfil; # decide com base no perfil se o chamado recuperado deve ou não ser exibido.
			header('Location: home.php');
		}
		else{
			$_SESSION['autenticado'] = 'no';
			header('Location: index.php?login=error');
		}
	}
	catch (e){
		echo 'erro';
	}
	
	
?>
