/* Aqui será feita a validação do formulario de cadastro de Cursos */

const form = document.getElementById('formCadastroCursos');
const campos = document.querySelectorAll('.campos');

//Setando os erros
function setError(index){
    campos[index].classList.remove('is-valid');
    campos[index].classList.add('is-invalid');
}
function noError(index){
    campos[index].classList.remove('is-invalid');
    campos[index].classList.add('is-valid');
}

function ValidandoNome(){
    if(campos[0].value.length < 4){
        setError(0);
    }else{
        noError(0);
    }
}
function ValidandoDuracao(){
    if(campos[1].value.length < 1){
        setError(1);
    }else{
        noError(1);
    }
}


let FormValores = {};
/* Verificação antes de enviar o formulario */
form.addEventListener('submit', (event) => {
    
    event.preventDefault();
    
    if(campos[0].value !== '' && campos[0].value.length >= 4 && campos[1].value !== '' && campos[1].value.length >= 1 && campos[2].value !== '' && campos[3].value !== '' && campos[4].value !== ''){
        console.log('Opa tudo deu certo e nada deu errado!');
        FormValores.nome = campos[0].value;
        FormValores.duracao = campos[1].value;
        FormValores.coordenador = campos[2].value;
        FormValores.nivel = campos[3].value;
        FormValores.modalidade = campos[4].value;
        form.submit();

    }else if(campos[0] === '' || campos[0].value.length < 4){
        setError(0)
    }else if(campos[1] === '' || campos[1].value.length < 1){
        setError(1)
    }
})

