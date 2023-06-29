<?php
    $ALUNO = $_POST['aluno'];
    $CURSO = $_POST['curso'];

    /* Fazendo a requisição de conexão com o banco de dados */
    require('conexao.php');
    mysqli_select_db($conexao,"sistema_academico");


    $editar = "UPDATE turmas
                SET
                    aluno = '$ALUNO',
                    curso = '$CURSO'
                    WHERE id_turma=".$_REQUEST['id_turma'];
    if ($conexao->query($editar) === FALSE){
        die("Erro ao editar dados: ".$conexao->error);
    }else{
        // Informar o sucesso da inserção em sistema.
        echo '<script>alert("Atualizado com sucesso! Volte para a página de consulta.")</script><script>window.location.href = "ConsultasDeInfo.php";</script>';
    };
    mysqli_close($conexao);
    exit();



?>