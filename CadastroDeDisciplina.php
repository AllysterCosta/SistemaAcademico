<?php
 include 'header.html';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Disciplinas</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class="container">
            <div class="container-fluid row">
                <div class="col-10">
                <span class="tituloForm mb-2">Cadastro de Disciplinas: </span>
                    <form action="CadastroDeDisciplinaConnect.php" method="post" id="cadastrarDisciplina">
                        <div class="form-row row col-12">
                            <div class="form-group col-12">
                                <label for="nome"></label>
                                <input type="text" name="nome" id="nome" class="form-control campos" placeholder="Informe o nome do curso">
                            </div>
                            <div class="form-group col-4">
                                <label for="cargaHoraria"></label>
                                <input type="text" name="cargaHoraria" id="cargaHoraria" class="form-control campos" placeholder="Informe a carga horaria do curso">
                            </div>
                            <div class="form-group col-4">
                                <label for="creditos"></label>
                                <input type="text" name="creditos" id="creditos" class="form-control campos" placeholder="Créditos para disciplina">
                            </div>
                            <div class="form-group col-12">
                                <label for="ementa"></label>
                                <textarea class="form-control" name="ementa" id="ementa" cols=40 rows=6 placeholder="Informe a ementa"></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                                <div class="form-group col-md-3 mt-3">
                                    <button type="reset" name="limpar" id="limpar" class="btn btn-danger">Limpar</button>
                                    <button type="submit" name="enviar" id="enviar" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                    </form>
                </div>
                <!-- Aside Menu -->
                <aside class="col-sm sidebar side-menu">
                    <?php include 'asideMenu.html'; ?>
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
</body>
</html>