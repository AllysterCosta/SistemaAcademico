<?php
    include 'header.html';
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Cadastro de Curso</title>
</head>
<body>
    <!-- Aqui será feito o cadastro de Cursos para inserção no banco -->
    <main>
        <div class="container">
            <div class="container-fluid row">
                <div class="col-10">
                    <span class="tituloForm">Cadastro de Cursos: </span>
                    <form method="post" action="CadastroDeCursosConnect.php" class="form-inline mt-3" id="formCadastroCursos">
                        <div class="row form-row align-items-center mb-4">
                            <label for="nome"></label>
                            <input type="text" id="nome" name="nome" class="form-control campos" placeholder="Nome do Curso" oninput="ValidandoNome()">
                        </div>
                        <!-- Aqui é dividio os campos -->
                        <div class="row form-row aling-items-center mb-4">
                            <div class="from-group col-4">
                                <div class="input-group">
                                    <label for="duracao"></label>
                                    <input type="text" name="duracao" id="duracao" placeholder="Duração" class="form-control campos">
                                    <span class="input-group-text">- Meses</span>
                                </div>
                            </div>
                            <div class="row form-group col-8">
                                <label for="selectDoBD"></label>
                                <select class="form-control form-select campos" name="coordenador" id="selectDoBD">
                                   <option value="">Escolha o coordenador</option>
                                   
                                </select>
                            </div>
                        </div>
                        <div class="row form-group col-12 mb-4">
                            <div class="row form-group col-4">
                                <label for="nivel"></label>
                                <select class="form-select campos" name="nivel" id="nivel" aria-label=".form-select-sm">
                                    <option value="">Escolha o nível</option>
                                    <option value="tecnico">Técnico</option>
                                    <option value="tecnologo">Tecnólogo</option>
                                    <option value="bacharelado">Bacharelado</option>
                                    <option value="licenciatura">Licenciatura</option>
                                    <option value="especializacao">Especialização</option>
                                </select>
                            </div>
                            <div class="row form-group col-8">
                                <label for="modalidade"></label>
                                <select class="form-select campos" name="modalidade" id="modalidade">
                                    <option value="">Escolha a modalidade do curso</option>
                                    <option value="presencial">Presencial</option>
                                    <option value="adistancia">À distância</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group col-12 justify-content-center">
                            <div class="col-md-3 mt-3">
                                <button class="btn btn-primary" type="submit" name="enviar" id="bntEnviar">Enviar</button>
                                <button class="btn btn-danger" type="reset">Limpar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Aqui fica a separação do Aside menu com o restante -->
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
    <script src="JS/ConexaoAoBD.js"></script>
    <script src="JS/ValidacaoCursos.js"></script>
</body>
</html>