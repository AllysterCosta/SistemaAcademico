<?php
    include('indexProtect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <p>Bem vindo ao sistema academico, <?php echo $_SESSION['nome']; ?></p>

    <a href="logout.php">Sair</a>
</body>
</html>