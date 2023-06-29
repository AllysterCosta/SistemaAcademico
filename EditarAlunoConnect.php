<?php
    /* Declarando as variáveis e verificando se os campos opcionais estão vazios. */
    $nome = $_POST['nome'];
    $nomeSocial = isset($_POST['CampoNomeSocial']) && !empty($_POST['CampoNomeSocial']) && $_POST['CampoNomeSocial'] != 'disabled' ? $_POST['CampoNomeSocial'] : 'Sem nome social';
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $numeroCasa = isset($_POST['numeroCasa']) ? $_POST['numeroCasa'] : null;
    $complemento = isset($_POST['complemento']) ? $_POST['complemento'] : null;
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    /* Fazendo a requisição de conexão com o banco de dados */
    require('conexao.php');
    mysqli_select_db($conexao,"sistema_academico");

    $atualizar = " UPDATE Alunos
                SET 
                    nome = '$nome',
                    CampoNomeSocial = '$nomeSocial',
                    cpf = '$cpf',
                    telefone = '$telefone',
                    cep = '$cep',
                    endereco = '$endereco',
                    numeroCasa = '$numeroCasa',
                    complemento = '$complemento',
                    bairro = '$bairro',
                    cidade = '$cidade',
                    estado = '$estado'
                WHERE id=".$_REQUEST['id'];

    if ($conexao->query($atualizar) === FALSE){
        die("Erro ao inserir dados: ".$conexao->error);
    }else{
        // Informa inserção com sucesso
        echo '<script>if(confirm("Aluno atualizado com sucesso! retorne a consulta do cadastro")){window.location.href = "ConsultasDeInfo.php";}</script>';
        // Mostra mensagem
        $mensagem = 'Aluno cadastrado!';
    }
    echo $mensagem;

    mysqli_close($conexao);
    /* sleep(3);
    header('Location: CadastroAlunos.html'); */
    exit();


?>