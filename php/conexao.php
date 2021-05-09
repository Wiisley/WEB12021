<?php

$host = "localhost";
$nome_usuario = 'root';
$senha = "";
$nome_banco = "ufmtweb2021";

$conexao = mysqli_connect($host, $nome_usuario, $senha, $nome_banco);
mysqli_set_charset($conexao,"utf8");
if(!$conexao){
    echo "Falha na Conexão!";
}