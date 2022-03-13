<?php
//Inicia Sessão 
session_start();
//Incluindo a conexão com o banco de dados
include_once("conexao.php");
//O campo usuário e senha preenchido entra no if para validar
if((isset($_POST['email'])) && isset($_POST['senha'])){
  $usuario = mysqli_real_escape_string($conexao, $_POST['email']);
  $senha = mysqli_real_escape_string($conexao,$_POST['senha']);
//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
  $result_usuario = "SELECT * FROM usuario WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
  $resultado_usuario = mysqli_query($conexao, $result_usuario);
  $resultado = mysqli_fetch_assoc($resultado_usuario);

  if(isset($resultado)){
    $_SESSION['id_usuario'] = $resultado['id'];
    $_SESSION['nome_usuario'] = $resultado['nome'];
    $_SESSION['email_usuario'] = $resultado['email'];
    
    header("Location: painel_adm.php");
  }else{
    $_SESSION['loginErro'] = "Usuário ou senha inválido";
    header("Location: index.php");
  }



}else{
  $_SESSION['loginErro'] = "Usuário ou senha inválido";
  header("Location: index.php");
}
