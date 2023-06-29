/* Conexão ao banco de dados para a pagina de cadastro de turmas */

const form = document.getElementById('formTurmas');
const selectAluno = document.getElementById('aluno');
const selectCurso = document.getElementById('curso');

$(document).ready(function(){
    $.get('OptionsParaTurmas.php', function(data){
        $('#aluno').append(data);
    })
    $.get('OptionsParaTurmasCurso.php', function(data){
        $('#curso').append(data);
    })
})



