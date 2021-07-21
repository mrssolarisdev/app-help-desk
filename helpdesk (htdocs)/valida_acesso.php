<?php
session_start();
if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] === 'no'){
  header('Location: index.php?login=error_auth');
}

?>