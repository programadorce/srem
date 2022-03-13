<?php

  session_start();

  unset(
    $_SESSION['id_usuario'],
    $_SESSION['nome_usuario'],
    $_SESSION['email_usuario']
  );

  $_SESSION['logindeslogado'] = "Deslogado com sucesso";
	//redirecionar o usuario para a página de login
  session_destroy();
	header("Location: index.php");


?>