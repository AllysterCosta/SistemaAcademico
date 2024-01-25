<?php
// criando as variaveis
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "sistemaacademico";

//Criando a conexão
$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$conexao) {
    die('Conexão falhou: ' . mysqli_connect_error());
}
mysqli_set_charset($conexao, "utf8");
