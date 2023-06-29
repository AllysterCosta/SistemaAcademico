<?php
    $ALUNO = $_POST['aluno'];
    $CURSO = $_POST['curso'];

    /* Fazendo a requisição de conexão com o banco de dados */
    require('conexao.php');
    mysqli_select_db($conexao,"sistema_academico");

    /* Verificando se a tabela já existe, se a tabela não existir cria a tabela alunos */
    $result = $conexao->query("SHOW TABLES LIKE 'turmas'");
    if ($result->num_rows == 0){
        // Cria a tabela "alunos" com os campos necessários
        $criartabela = "CREATE TABLE turmas (
                id_turma int AUTO_INCREMENT PRIMARY KEY,
                aluno varchar(100) not null,
                curos varchar(100) not null
            )";
        if ($conexao->query($criartabela) === FALSE){
            die("Erro ao criar a tabela: " . $conexao->error);
        }
        echo '<script><div class="custom-alert alert alert-info alert-dismissible fade show" role="alert">
        Tabela Criada com sucesso.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div></script>';
    };
    /* Verificando se o Aluno que está sendo inserido já existe no banco de dados */
    $verificarAluno = $conexao->query("SELECT * FROM turmas WHERE aluno = '$ALUNO'");
    if ($verificarAluno->num_rows > 0){
        /* Informa ao usuário que o Aluno já está cadastrado e interrompe a inserção */
        echo '<script><div class="custom-alert alert alert-info alert-dismissible fade show" role="alert">
        Aluno já existe em sistema.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div></script>';
    }

    $inserirAluno = "INSERT INTO turmas
                    (aluno, curso)
                    VALUES ('$ALUNO','$CURSO')";
    if ($conexao->query($inserirAluno) === FALSE){
        die("Erro ao inserir dados: ".$conexao->error);
    }else{
        // Informar o sucesso da inserção em sistema.
        echo '<script><div class="custom-alert alert alert-info alert-dismissible fade show" role="alert">
        Aluno cadastrado com sucesso.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div></script>';
    };
    mysqli_close($conexao);
    exit();

?>