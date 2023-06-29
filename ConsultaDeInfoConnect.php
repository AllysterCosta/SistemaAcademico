<?php
    include 'conexao.php';

    if(isset($_POST['pesquisa'])){
        $valorSelecionado = $_POST['pesquisa'];

        switch ($valorSelecionado){
            case 'alunos':
                $consulta = "SELECT * FROM alunos";
                if(isset($consulta)){
                    $resultado = mysqli_query($conexao, $consulta);
                    if(mysqli_num_rows($resultado) > 0) {
                        echo "<table class='table table-striped table-bordered table-hover mt-5'>";
                        echo "<tr><th class='text-center'>#</th><th class='text-center'>Nome</th><th class='text-center'>Nome Social</th><th class='text-center'>Ações</th></tr>";
                        while($row = mysqli_fetch_assoc($resultado)) {
                            echo "<tr>";
                            echo "<td class='text-center'>" . $row['id'] . "</td>";
                            echo "<td class='text-center'>" . $row['nome'] . "</td>";
                            echo "<td class='text-center'>" . $row['CampoNomeSocial'] . "</td>";
                            echo "<td class='text-center'>";
                            echo "<button type='button' onclick=\"if(confirm('Tem certeza que deseja excluir o aluno?')){location.href='exclusaoAluno.php?id=".$row['id']."';}else{false;};\" class='btn btn-danger btn-apagar me-2' data-id='" . $row['id'] . "'><i class='bi bi-trash'></i></button>";
                            echo "<button type='button' onclick=\"location.href='EditarAluno.php?id=".$row['id']."';\" class='btn btn-primary btn-editar ms-2' data-id='" . $row['id'] . "'><i class='bi bi-pencil'></i></button>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                }
                $conexao->close();
                break;
            case 'professores':
                $consulta = "SELECT * FROM professores";
                if(isset($consulta)){
                    $resultado = mysqli_query($conexao, $consulta);
                    if(mysqli_num_rows($resultado) > 0) {
                        echo "<table class='table table-striped table-bordered table-hover mt-5'>";
                        echo "<tr><th class='text-center'>#</th><th class='text-center'>Nome</th><th class='text-center'>Formação</th><th class='text-center'>Titulação</th><th class='text-center'>Ações</th></tr>";
                        while($row = mysqli_fetch_assoc($resultado)) {
                            echo "<tr>";
                            echo "<td class='text-center'>" . $row['id'] . "</td>";
                            echo "<td class='text-center'>" . $row['nome'] . "</td>";
                            echo "<td class='text-center'>" . $row['formacao'] . "</td>";
                            echo "<td class='text-center'>" . $row['titulacao'] . "</td>";
                            echo "<td class='text-center'>";
                            echo "<button type='button' onclick=\"if(confirm('Tem certeza que deseja excluir o professor?')){location.href='exclusaoProfessor.php?id=".$row['id']."';}else{false;};\" class='btn btn-danger btn-apagar me-2' data-id='" . $row['id'] . "'><i class='bi bi-trash'></i></button>";
                            echo "<button type='button' onclick=\"location.href='EditarProfessor.php?id=".$row['id']."';\" class='btn btn-primary btn-editar ms-2' data-id='" . $row['id'] . "'><i class='bi bi-pencil'></i></button>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                }
                $conexao->close();
                break;
            case 'coordenadores':
                $consulta = "SELECT * FROM cursos";
                if(isset($consulta)){
                    $resultado = mysqli_query($conexao, $consulta);
                    if(mysqli_num_rows($resultado) > 0){
                        echo "<table class='table table-striped table-bordered table-hover mt-5'>";
                        echo "<tr><th class='text-center'>#</th><th class='text-center'>Curso</th><th class='text-center'>Coordenador</th><th class='text-center'>Modalidade</th><th class='text-center'>Ações</th></tr>";
                        while($row = mysqli_fetch_assoc($resultado)){
                            echo "<tr>";
                            echo "<td class='text-center'>" . $row['id_curso'] . "</td>";
                            echo "<td class='text-center'>" . $row['nome'] . "</td>";
                            echo "<td class='text-center'>" . $row['coordenador'] . "</td>";
                            echo "<td class='text-center'>" . $row['modalidade'] . "</td>";
                            echo "<td class='text-center'>";
                            echo "<button type='button' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='exclusaoTurmas.php?id_curso=".$row['id_curso']."';}else{false;};\" class='btn btn-danger btn-apagar me-2' data-id='" . $row['id_curso'] . "'><i class='bi bi-trash'></i></button>";
                            echo "<button type='button' onclick=\"location.href='EditarCurso.php?id_curso=".$row['id_curso']."';\" class='btn btn-primary btn-editar ms-2' data-id='" . $row['id_curso'] . "'><i class='bi bi-pencil'></i></button>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                }
                $conexao->close();
                break;
            case 'turmas':
                $consulta = "SELECT * FROM turmas";
                if(isset($consulta)){
                    $resultado = mysqli_query($conexao, $consulta);
                    if(mysqli_num_rows($resultado) > 0){
                        echo "<table class='table table-striped table-bordered table-hover mt-5'>";
                        echo "<tr><th class='text-center'>#</th><th class='text-center'>Aluno</th><th class='text-center'>Curso</th><th class='text-center'>Ações</th></tr>";
                        while($row = mysqli_fetch_assoc($resultado)){
                            echo "<tr>";
                            echo "<td class='text-center'>" . $row['id_turma'] . "</td>";
                            echo "<td class='text-center'>" . $row['aluno'] . "</td>";
                            echo "<td class='text-center'>" . $row['curso'] . "</td>";
                            echo "<td class='text-center'>";
                            echo "<button type='button' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='Exclusao_Turmas_cadas.php?id_turma=".$row['id_turma']."';}else{false;};\" class='btn btn-danger btn-apagar me-2' data-id='" . $row['id_turma'] . "'><i class='bi bi-trash'></i></button>";
                            echo "<button type='button' onclick=\"location.href='EditarTurma.php?id_turma=".$row['id_turma']."';\" class='btn btn-primary btn-editar ms-2' data-id='" . $row['id_turma'] . "'><i class='bi bi-pencil'></i></button>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                }
                $conexao->close();
                break;
            default:
                echo "Ops! nenhuma informação localizada! Tente novamente.";
                break;
        }
    }

?>