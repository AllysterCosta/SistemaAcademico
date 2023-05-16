<?php
    require('conexao.php');
    
    //Aqui são declaradas as variaveis
    $nome = $_POST['nome'];
    $duracao = $_POST['duracao'];
    $coordenador = $_POST['coordenador'];
    $nivel = $_POST['nivel'];
    $modalidade = $_POST['modalidade'];

    mysqli_select_db($conexao,"sistema_academico");

    // Verificando se a tabela já existe
    $cursos = $conexao->query("SHOW TABLES LIKE 'cursos'");
    if($cursos->num_rows == 0){
        // Criar a tabela de cursos
        $tabela_cursos = "CREATE TABLE cursos(
            id_curso INT(10) AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(100) NOT NULL UNIQUE,
            duracao VARCHAR (100),
            coordenador VARCHAR(100),
            nivel VARCHAR(25),
            modalidade VARCHAR(50),
            FOREIGN KEY (coordenador) REFERENCES professores(cpf)
            )";
            if($conexao->query($tabela_cursos) === FALSE){
                die("Erro ao criar a tabela: " . $conexao->error);
            }
            echo "<script>alert('Tabela criada com sucesso.');</script>";
    }
    // Verificando se já existe um curso com o mesmo nome
    $veficarCurso = $conexao->query("SELECT * FROM cursos WHERE nome = '$nome'");
    if($veficarCurso->num_rows > 0){
        /* Informa ao usuário que o CPF já está cadastrado e interrompe a inserção */       
        echo '<script>alert("Já existe um curso com este nome! Volte para a página de cadastro de cursos!")</script><script>window.location.href = "CadastroDeCursos.php";</script>';
        mysqli_close($conexao);
        exit();
    }

    /* Dando tudo certo inserir os dados */
    $inserir = "INSERT INTO cursos (nome, duracao, coordenador, nivel, modalidade) VALUES ('$nome', '$duracao', '$coordenador', '$nivel', '$modalidade')";
    if($conexao->query($inserir) === FALSE){
        die("Erro ao inserir dados: ".$conexao->error);
    }else{
        echo '<script>alert("Curso cadastrado com sucesso! Volte para a página de cadastro de cursos.")</script><script>window.location.href = "CadastroDeCursos.php";</script>';
    }
    mysqli_close($conexao);
    exit();
?>