<?php

    require('conexao.php');

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $formacao = $_POST['formacao'];
    $titulacao = $_POST['titulacao'];

    mysqli_select_db($conexao,"sistema_academico");

    $atualizar = " UPDATE professores
                SET 
                    nome = '$nome',
                    cpf = '$cpf',
                    formacao = '$formacao',
                    titulacao = '$titulacao'
                WHERE id=".$_REQUEST['id'];

    if ($conexao->query($atualizar) === FALSE){
        die("Erro ao inserir dados: ".$conexao->error);
    }else{
        // Informa inserção com sucesso
        echo '<script>if(confirm("Professor atualizado com sucesso! retorne a consulta do cadastro")){window.location.href = "ConsultasDeInfo.php";}</script>';
        // Mostra mensagem
        $mensagem = 'Professor atualizado!';
    }
    echo $mensagem;

    mysqli_close($conexao);
    /* sleep(3);
    header('Location: CadastroAlunos.html'); */
    exit();

?>