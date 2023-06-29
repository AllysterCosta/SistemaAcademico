<?php
    require('conexao.php');
    mysqli_select_db($conexao,"sistema_academico");
    
    $exclusao = "DELETE FROM turmas WHERE id_turma=".$_REQUEST['id_turma'];

    if ($conexao->query($exclusao) === FALSE){
        die("Erro ao inserir dados: ".$conexao->error);
    }else{
        // Informa inserção com sucesso
        echo '<script>if(confirm("Turma excluida com sucesso! retorne a consulta do cadastro")){window.location.href = "ConsultasDeInfo.php";}</script>';
        // Mostra mensagem
        $mensagem = 'Turma excluida!';
    }
    echo $mensagem;

    mysqli_close($conexao);
    exit();


?>