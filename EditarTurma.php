<?php 
    include 'header.html';
    /* include 'indexProtect.php'; */
    include 'conexao.php';
    $sql = "SELECT * FROM turmas WHERE id_turma=".$_REQUEST['id_turma'];
    $res = $conexao->query($sql);
    $row = $res->fetch_object();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Cadastro de Turmas</title>
</head>

<body>
    <main>
        <!-- Aqui será feito o cadastro de turmas para lançar no banco de dados -->
        <div class="container-fluid row">
            <div class="col-10 mt-4">
                <span class="tituloForm">Cadastro aluno na turma: </span>
                <form method="post" action="EditarTurmaConnect.php" id="formTurmas">
                    <input type="hidden" name="id_turma" value="<?php print $row->id_turma; ?>">
                    <div class="row form-row aling-items-center">
                        <div class="form-group col-5">
                            <label for="aluno"></label>
                            <select class="form-select" name="aluno" id="aluno">
                                <option value="">Selecione o Aluno</option>
                            </select>
                        </div>
                        <div class="form-group col-5">
                            <label for="curso"></label>
                            <select class="form-select" name="curso" id="curso">
                                <option value="">Selecione o Curso</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group justify-content-center">
                        <div class="col-md-3 mt-3">
                            <button class="btn btn-primary" type="submit">Confirmar</button>
                            <button class="btn btn-danger" type="reset">Limpar</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Aside Menu -->
            <aside class="col-sm sidebar side-menu">
                <?php include 'asideMenu.html'; ?>
            </aside>
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
    <script src="JS/ConexaoAoBD_Turmas.js"></script>
</body>

</html>