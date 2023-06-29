<?php
    require('conexao.php');
    mysqli_select_db($conexao,"sistema_academico");
    
    $exclusao = "DELETE FROM professores WHERE id=".$_REQUEST['id'];

    if ($conexao->query($exclusao) === FALSE){
        die("Erro ao inserir dados: ".$conexao->error);
    }else{
        // Informa inserção com sucesso
        echo '<script>if(confirm("Professor excluido com sucesso! retorne a consulta do cadastro")){window.location.href = "ConsultasDeInfo.php";}</script>';
        // Mostra mensagem
        $mensagem = 'Professor excluido!';
    }
    echo $mensagem;

    mysqli_close($conexao);
    exit();


?>