<?php

require("conexao.php");
mysqli_select_db($conexao, "sistema_academico");
$inserir = "INSERT INTO matricula
            (id, nome, curso, periodo)
            VALUES ('', 'fulaninho', 'desenvolver', '1')";

mysqli_query($conexao, $inserir);


mysqli_close($conexao);

?>