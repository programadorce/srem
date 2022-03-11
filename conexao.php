<?php

//Criação de variáveis com os valores para realizar a conexão.
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "multimidia";

//Realização da conexão usando os valores das variáveis criado acima.
$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

?>