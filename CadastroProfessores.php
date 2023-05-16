<?php
    include 'header.html';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Professores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="container-fluid col-10">
                    <span class="tituloForm">Cadastro de Professores:</span>
                    <form action="CadastroProfessoresConnect.php" method="post" id="formProfessores" class="align-items-center" novalidate>
                        <label for="nome"></label>
                        <input type="text" id="nome" name="nome" placeholder="Nome completo" oninput="validaNome()" class="form-control campos" required>
                        <label for="cpf"></label>
                        <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" class="form-control campos" maxlength="11" oninput="validaCPF()" required>
                        <label for="formacao"></label>
                        <input type="text" id="formacao" name="formacao" placeholder="Formação acadêmica" class="form-control campos" oninput="validaFormacao()" required>
                        <label for="titulacao"></label>
                        <select name="titulacao" id="titulacao" class="form-control campos select_titulacao">
                            <option value="Selecione a graduação">Selecione a graduação</option>
                            <option value="graduação">Graduação</option>
                            <option value="mestrado">Mestrado</option>
                            <option value="doutorado">Doutorado</option>
                        </select><br>
                        <input type="submit" value="Enviar" id="enviar" name="enviar">
                        <input type="reset" value="Limpar" id="limpar" name="limpar">
                    </form>
                </div>
                <!-- Aqui fica o menu lateral -->
                <!-- Aside Menu -->
                <aside class="col-sm sidebar side-menu">
                    <?php include 'asideMenu.html' ?>
                </aside>
            </div>
        </div>

        
    </main>
    
    <footer class="Rodape-site">Desenvolvido por Allyster Marques</footer>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <!-- Font -->
    <script src="https://kit.fontawesome.com/1fcd89be8b.js" crossorigin="anonymous"></script>
    <!-- Meus Scripts -->
    <script src="JS/ValidacaoProfessores.js"></script>

</body>
</html>