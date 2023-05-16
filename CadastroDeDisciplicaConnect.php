<?php

    require 'conexao.php';

    $nome = $_POST['nome'];
    $carga_horaria = $_POST['cargaHoraria'];
    $creditos = $_POST['creditos'];
    $ementa = $_POST['ementa'];

    mysqli_select_db($conexao, "sistema_academico");

    $result = $conexao->query("SHOW TABLES LIKE disciplina");
    if($result->num_rows == 0){
        /* Verificado que a tabela não existe a mesma será criada */
        $criartabela = "CREATE TABLE disciplina(
            id_disciplina INT(10) AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(100) NOT NULL,
            carga_horaria INT(10),
            creditos INT(10),
            ementa VARCHAR(1000)
            )";
            if($conexao->query($criartabela) === FALSE){
                die("Erro ao criar tabela: ".$conexao->error);
            }
            echo "<script>alert('Tabela criada com sucesso.');</script>";
    }

    $inserir = " INSERT INTO disciplina (nome, carga_horaria, creditos, ementa)
                VALUES ('$nome', '$carga_horaria', '$creditos', '$ementa')";
    if($conexao->query($inserir) === FALSE){
        die("Érro ao inserir dados: ".$conexao->error);
    }else{
        echo '<script>alert("Disciplina cadastrada com sucesso!")</script><script>window.location.href = "CadastroDeDisciplina.php";</script>';

    }

    
    mysqli_close($conexao);
    exit();

?>