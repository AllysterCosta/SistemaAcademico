<?php
    require('conexao.php');
    mysqli_select_db($conexao,"sistema_academico");
    
    $exclusao = "DELETE FROM alunos WHERE id=".$_REQUEST['id'];

    if ($conexao->query($exclusao) === FALSE){
        die("Erro ao inserir dados: ".$conexao->error);
    }else{
        // Informa inserção com sucesso
        echo '<script>if(confirm("Aluno excluido com sucesso! retorne a consulta do cadastro")){window.location.href = "ConsultasDeInfo.php";}</script>';
        // Mostra mensagem
        $mensagem = 'Aluno excluido!';
    }
    echo $mensagem;

    mysqli_close($conexao);
    exit();


?>