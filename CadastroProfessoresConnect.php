<?php

    require('conexao.php');

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $formacao = $_POST['formacao'];
    $titulacao = $_POST['titulacao'];

    mysqli_select_db($conexao,"sistema_academico");

    #Fazer consulta se a tabela 'Professores' já estiste
    $result = $conexao->query("SHOW TABLES like 'professores'");
    if($result->num_rows == 0){

        $criar_tabela_professores = "CREATE TABLE professores (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(255) NOT NULL,
            cpf VARCHAR(15) NOT NULL UNIQUE,
            formacao VARCHAR(255) NOT NULL,
            titulacao VARCHAR(255) NOT NULL
        )";
        if ($conexao->query($criar_tabela_professores) === FALSE) {
            die("Erro ao criar a tabela: " . $conexao->error);
        }
        echo "<script>alert('Tabela de professores criada com sucesso.');</script>";

    }

    /* Verificando se o CPF que está sendo inserido já existe no banco de dados */
    $verificaCPF = $conexao->query("SELECT * FROM professores WHERE cpf = '$cpf'");
    if ($verificaCPF->num_rows > 0){
        /* Informa ao usuário que o CPF já está cadastrado e interrompe a inserção */       
        echo '<script>if(confirm("CPF já cadastrado! Deseja voltar para a página de cadastro de alunos?")){window.location.href = "CadastroProfessores.html";}</script>';
        // Interrompe a inserção
        $mensagem = 'CPF_ja_cadastrado!';
    }
    echo $mensagem;


    /* Verificado que o cpf ainda não cadastrado e tabela já criada inserir dados no banco */
    $inserir = " INSERT INTO professores
                 (nome, cpf, formacao, titulacao)
                 VALUES ('$nome','$cpf','$formacao','$titulacao') ";
    
    if($conexao->query($inserir) === FALSE){
        die("Erro ao inserir dados: ".$conexao->error);
    }else{
         // Informa inserção com sucesso
         echo '<script>if(confirm("Professor cadastrado com sucesso! Volte para a página de cadastro.")){window.location.href = "CadastroProfessores.html";}</script>';
         // Mostra mensagem
         $mensagem = 'Professor cadastrado!';
    }

    mysqli_close($conexao);
    exit();

?>