<?php

/* Requer o arquivo de conexão */
require('conexao.php');
/* Inicia a conexão com o BD "sistema_academico" */
mysqli_select_db($conexao,"sistema_academico");

/* Aqui é feita a consulta para os nomes dos Professores cadastrados no banco */
$consulta = 'SELECT nome FROM cursos';
$resultado = $conexao->query($consulta);

while ($row = $resultado->fetch_assoc()) {
    echo '<option value="' . $row['nome'] . '">' . $row['nome'] . '</option>';
};


mysqli_close($conexao);
?>