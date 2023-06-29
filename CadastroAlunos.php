<?php 
    include 'header.html';
    include 'indexProtect.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
    
    <main class="container">
        <!-- Aqui está o menu lateral -->
        <div class="container-fluid">
            <div class="row">
                <!-- Aqui fica o form de cadastro dos alunos -->
                <div class="col-10">
                    <form id="formAlunos" method="post" action="CadastroAlunosConnect.php" class="align-items-center needs-validation" novalidate>
                        <span class="tituloForm">Cadastre os dados do Aluno:</span><br>
                        <div class="row form-row campos-agrupados">
                            <div class="form-group col-sm-6 mb-2">
                            <label for="nome">Nome:</label>
                            <input type="text" id="nome" name="nome" class="form-control campos" placeholder="Nome Completo" oninput="NameValidate('nome')" required>
                            <div class="valid-feedback">Muito bem!</div>
                            <div class="invalid-feedback">O nome deve ter pelo menos 3 caracteres</div>
                            </div>
                            <div class="col-sm mb-2">
                                <div class="form-check">
                                    <input type="checkbox" id="NomeSocial"class="form-check-input" onchange="EnableNomeSocial()">
                                    <label class="form-check-label" for="NomeSocial">Usar nome social</label><br>
                                </div>
                                <label for="CampoNomeSocial"></label>
                                <input type="text" id="CampoNomeSocial" name="CampoNomeSocial" class="form-control campos" placeholder="Nome Social Completo" disabled="true" oninput="CampoNomeSocialValido()">
                                <div class="valid-feedback">Muito bem!</div>
                            </div>
                        </div>
                        <div class="row form-row campos-agrupados">
                            <div class="form-group col-sm-6 mb-2 has-validation">
                                <label for="cpf">CPF: </label>
                                <input type="text" id="cpf" name="cpf" class="form-control campos" placeholder="000.000.000-00" maxlength="14" oninput="CpfValidateFormatar()" required>
                                <div class="invalid-feedback">CPF inválido!</div>
                            </div>
                            <div class="form-group col-sm mb-2">
                                <label for="telefone">Telefone: </label>
                                <input type="text" class="form-control campos" id="telefone" name="telefone" placeholder="(99) 99999-9999" oninput="telefoneFormatadoValido()" maxlength="14" required>
                            </div>
                        </div>
                        <div class="row form-row campos-agrupados">
                            <div class="form-group col-sm-4 mb-2">
                                <label for="cep">CEP: </label>
                                <input type="text" id="cep" name="cep" class="form-control campos" placeholder="99999-999" maxlength="8" required oninput="ValidaCEP()">
                            </div>
                            <div class="form-group col-sm-5 mb-2">
                                <label for="endereco">Endereço: </label>
                                <input type="text" id="endereco" name="endereco" class="form-control campos" placeholder="Rua ou Avenida..." readonly>
                            </div>
                            <div class="form-group col-sm-2 mb-2">
                                <label for="numeroCasa">N°</label><input type="text" id="numeroCasa" name="numeroCasa" class="form-control campos campo-menor" placeholder="9999">
                            </div>
                            <div class="form-check col-sm">
                                <input type="checkbox" id="SNum"class="form-check-input" onchange="SemNumdeCasa()">
                                <label>S/N°</label>
                            </div>
                            <div class="form-group col-sm-12 mb-2">
                                <label for="complemento">Complemento: </label>
                                <input type="text" id="complemento" name="complemento" class="form-control campos" placeholder="Complemento">
                            </div>
                            <div class="form-group col-md-4 mb-2">
                                <label for="bairro">Bairro: </label>
                                <input type="text" id="bairro" name="bairro" class="form-control campos form-control" placeholder="Bairro" readonly>
                            </div>
                            <div class="form-group col-sm-4 mb-2">
                                <label for="cidade">Cidade: </label>
                                <input type="text" id="cidade" name="cidade" class="form-control campos" placeholder="Cidade" readonly>
                            </div>
                            <div class="form-group col-sm-2 mb-2">
                                <label for="estado">Estado: </label>
                                <input type="text" id="estado" name="estado" class="form-control campos" placeholder="Estado" readonly>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-3 mt-3">
                                <button id="btnEnviar" class="btn btn-primary" type="submit">Enviar dados</button>
                                <button id="btnLimpar" class="btn btn-danger" type="reset">Limpar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Aqui fica o menu lateral -->
                <!-- Aside Menu -->
                <aside class="col-sm sidebar side-menu">
                    <?php include 'asideMenu.html'; ?>
                </aside>
            </div>
        </div>                 
             
    </main>
    
    <?php
    include 'footer.html';
    ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <!-- Font -->
    <script src="https://kit.fontawesome.com/1fcd89be8b.js" crossorigin="anonymous"></script>
    <script src="JS/ValidacaoCadastroAlunos.js"></script>
</body>
</html>