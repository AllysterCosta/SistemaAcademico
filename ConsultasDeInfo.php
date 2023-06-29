<?php
    include 'header.html';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>Consulte as informações</title>
</head>
<body>
    <main class="container">
        <h3 class="mt-10">Qual informação deseja verificar</h3>
        <div class="row">
            <div class="col-sm-8">
                <form>                    
                    <select class="form-select" id="lista-info" name="pesquisa">
                        <option value="escolhas">Escolha...</option>
                        <option value="alunos">Alunos</option>
                        <option value="professores">Professores</option>
                        <option value="coordenadores">Coordenadores</option>
                        <option value="turmas">Turmas</option>
                    </select>
                </form>
                
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <button type="button" id="btnPesquisar" class="btn btn-primary">Pesquisar</button>
                </div>
            </div>
        </div>

        <section>
            <div class="Painel" id="PainelTabela">
                <!-- Aqui será adicionado a tabela de resultados -->
            </div>
        </section>

    </main>

    <?php
    include 'footer.html';
    ?>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="JS/Consultas.js"></script>

</body>
</html>