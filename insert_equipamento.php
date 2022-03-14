<?php
//Inicia Sessão 
session_start();

include_once("conexao.php");

$nomeEquipamento = $_POST['nomeEquipamento'];

if(!$nomeEquipamento == ""){
  $sql = "INSERT INTO equipamento (nome) VALUES ('$nomeEquipamento')";

if(mysqli_query($conexao,$sql)){
  $_SESSION['cadastroSucesso'] = "Equipamento Salvo com sucesso!!!";
  header("Location: cadastro_equipamento.php");
}
} else{
  $_SESSION['cadastroErro'] = "Todos os campos devem ser preenchidos";
  header("Location: cadastro_equipamento.php");
}

?>