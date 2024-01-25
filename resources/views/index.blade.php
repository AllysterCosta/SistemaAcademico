{{-- Inclusão do templade --}}
@extends('layout');
@section('conteudo');
{{-- Conteudo dinamico da View --}}
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/resources/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>Sistema Acadêmico</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="container-fluid row justify-content-center">

                <div class="row col-6">
                    <h2>Área logada:</h2>
                    <form id="loginForm" method="POST" action="">
                        <label for="login"></label>
                        <input class="form-control" type="text" name="login" id="login" placeholder="Acesso">
                        <div class="password-container">
                            <label for="password"></label>
                            <input class="form-control" type="password" aria-label="Default" name="password" id="password" placeholder="Senha">
                            <i id="togglePassword" class="bi bi-eye"></i>
                        </div>
                        <div class="row aling-itens-center justify-content-center">
                            <div class="col-md mt-3">
                                <button class="btn btn-primary" type="submit" id="logar">Logar</button>
                                <button class="btn btn-danger" type="reset" id="reset">Limpar</button>
                            </div>

                        </div>
                        <div>
                            <label><a href="#">Ainda não possuo cadastro</a></label>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </main>

    <script src="JS/FormLogin.js"></script>
</body>
</html>