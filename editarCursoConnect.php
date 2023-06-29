<?php
    require('conexao.php');
    
    //Aqui são declaradas as variaveis
    $nome = $_POST['nome'];
    $duracao = $_POST['duracao'];
    $coordenador = $_POST['coordenador'];
    $nivel = $_POST['nivel'];
    $modalidade = $_POST['modalidade'];

    mysqli_select_db($conexao,"sistema_academico");

    $atualizar = "UPDATE cursos 
                SET 
                    nome = '$nome',
                    duracao = '$duracao', 
                    coordenador = '$coordenador', 
                    nivel = '$nivel', 
                    modalidade = '$modalidade'
                WHERE id_curso=".$_REQUEST['id_curso'];

    if($conexao->query($atualizar) === FALSE){
        die("Erro ao inserir dados: ".$conexao->error);
    }else{
        echo '<script>alert("Curso atualizado com sucesso! Volte para a página de consulta de cursos.")</script><script>window.location.href = "ConsultasDeInfo.php";</script>';
    }
    mysqli_close($conexao);
    exit();

?>