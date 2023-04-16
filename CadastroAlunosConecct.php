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

    /* Verificando se a tabela já existe, se a tabela não existir cria a tabela alunos */
    $result = $conexao->query("SHOW TABLES LIKE 'alunos'");
    if ($result->num_rows == 0) {
        // Cria a tabela "alunos" com os campos necessários
        $criartabela = "CREATE TABLE alunos (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(255) NOT NULL,
            nome_social VARCHAR(255),
            cpf VARCHAR(15) NOT NULL UNIQUE,
            telefone VARCHAR(15) NOT NULL,
            cep VARCHAR(8) NOT NULL,
            endereco VARCHAR(255) NOT NULL,
            numero_casa VARCHAR(10) NOT NULL,
            complemento VARCHAR(255),
            bairro VARCHAR(255) NOT NULL,
            cidade VARCHAR(255) NOT NULL,
            estado VARCHAR(2) NOT NULL
        )";
        if ($conexao->query($criartabela) === FALSE) {
            die("Erro ao criar a tabela: " . $conexao->error);
        }
        echo "<script>alert('Tabela criada com sucesso.');</script>";
    }

    /* Verificando se o CPF que está sendo inserido já existe no banco de dados */
    $verificaCPF = $conexao->query("SELECT * FROM alunos WHERE cpf = '$cpf'");

    if ($verificaCPF->num_rows > 0){
        /* Informa ao usuário que o CPF já está cadastrado e interrompe a inserção */       
        echo '<script>if(confirm("CPF já cadastrado! Deseja voltar para a página de cadastro de alunos?")){window.location.href = "CadastroAlunos.html";}</script>';
        // Interrompe a inserção
        $mensagem = 'CPF_ja_cadastrado!';
    }
    echo $mensagem;

    $inserir = " INSERT INTO Alunos 
                (nome, CampoNomeSocial, cpf, telefone, cep, endereco, numeroCasa, complemento, bairro, cidade, estado)
                VALUES ('$nome', '$nomeSocial', '$cpf', '$telefone', '$cep', '$endereco', '$numeroCasa', '$complemento', '$bairro', '$cidade', '$estado')";

    if ($conexao->query($inserir) === FALSE){
        die("Erro ao inserir dados: ".$conexao->error);
    }else{
        echo 'Cadastrado com sucesso!';
    }

mysqli_close($conexao);
sleep(3);
header('Location: CadastroAlunos.html');
exit();


?>