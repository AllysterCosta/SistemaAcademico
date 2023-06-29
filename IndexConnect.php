<?php
    include 'conexao.php';

    if(isset($_POST['login']) || isset($_POST['password'])){
        if(strlen($_POST['login']) == 0){
            echo "Preencha seu e-mail";
        }else if(strlen($_POST['password']) == 0){
            echo "Preencha sua senha!";
        }else{
            $email = mysqli_real_escape_string($conexao, $_POST['login']);
            $senha = mysqli_real_escape_string($conexao, $_POST['password']);

            $sql_code = "SELECT * FROM login WHERE email = '$email' AND senha = '$senha' ";
            $sql_query = $conexao->query($sql_code) or die("Falha na execução". mysqli_connect_error());

            if($sql_query->num_rows > 0){
                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                header('Location: teste_index.php');
            }else{
                /* Informa ao usuário que acesso ou senha incorretos e interrompe o login */       
                echo '<script>if(confirm("Usuario ou senha incorreto!")){window.location.href = "index.php";}</script>';
            }
        }
    }
?>