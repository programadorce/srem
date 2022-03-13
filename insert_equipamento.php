<?php
//Inicia Sessão 
session_start();

include_once("conexao.php");

$nomeEquipamento = $_POST['nomeEquipamento'];

$sql = "INSERT INTO equipamento (nome) VALUES ('$nomeEquipamento')";

if(mysqli_query($conexao,$sql)){
  $_SESSION['cadastroSucesso'] = "Equipamento cadastrado com sucesso!!!";
  header("Location: cadastro_equipamento.php");
}else{
  $_SESSION['cadastroError'] = "Equipamento cadastrado com sucesso!!!";
  header("Location: cadastro_equipamento.php");
}

?>