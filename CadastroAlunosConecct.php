<?php
    /* Criando a tabela de cadastro de Aluno
    Definindo as variaveis */
    $nome = $_POST('nome');
    $nomeSocial = $_POST('CampoNomeSocial');
    $cpf = $_POST('cpf');
    $telefone = $_POST('telefone');
    $cep = $_POST('cep');
    $endereco = $_POST('endereco');
    $numeroCasa = $_POST('numeroCasa');
    $complemento = $_POST('complemento');
    $bairro = $_POST('bairro');
    $cidade = $_POST('cidade');
    $estado = $_POST('estado');
    /* Fazendo a requisição de conexão com o banco de dados */
    require('conexao.php');
    mysqli_select_db($conexao,"");
/*
    $inserir = " INSERT INTO Alunos 
                (nome, nome_social, cpf, telefone, cep, endereco, numeroCasa, complemento, bairro, cidade, estado)
                VALUES ('$nome', '$nomeSocial', '$cpf', '$telefone', '$cep', '$endereco', '$numeroCasa', '$complemento', '$bairro', '$cidade', '$estado')";


mysqli_query($conexao, $inserir);

*/
echo "$nome', '$nomeSocial', '$cpf', '$telefone', '$cep', '$endereco', '$numeroCasa', '$complemento', '$bairro', '$cidade', '$estado'";

mysqli_close($conexao);


?>