/* Caso haja mensagens a exibir antes da execução da pagina */


/* Validações dos campos */
const form = document.getElementById('formProfessores');
const campos = document.querySelectorAll('.campos');

/* Validação usando as classes para alterar estilo */
function setError(index){
    campos[index].classList.remove('is-valid');
    campos[index].classList.add('is-invalid');
}
function noError(index){
    campos[index].classList.remove('is-invalid');
    campos[index].classList.add('is-valid');
}
/* ######################################################################### */
/* Validações em momento de digitação */
function validaNome(){
    if(campos[0].value.length < 4){
        setError(0);
    }else{
        noError(0);
    }
}

function validaCPF(){
    if(campos[1].value.length < 11){
        setError(1);
    }else{
        noError(1);
    }
}

function validaFormacao(){
    if(campos[2].value.length < 4){
        setError(2);
    }else{
        noError(2);
    }
}

/* ############################################################################## */
/* Validação antes de enviar */
let formValues = {};
/* Ao tentar enviar o formulario */
// Caso form tenha algum valor errado evitar envio

form.addEventListener('submit', (event) => {
    event.preventDefault();

    if(campos[0] !== '' && campos[0].value.length >= 4 && campos[1] !== '' && campos[1].value.length === 11 && campos[2] !== '' && campos[2].value.length >= 4 && campos[3].value !== 'Selecione a graduação'){
        formValues.nome = campos[0].value;
        formValues.cpf = campos[1].value;
        formValues.formacao = campos[2].value;
        formValues.titulacao = campos[3].value;
        
        form.submit();
    }
    else if(campos[0] === '' || campos[0].value.length < 4){
        campos[0].classList.add('is-invalid');
    }else if(campos[1] === '' || campos[1].value.length !== 11){
        campos[1].classList.add('is-invalid');
    }else if(campos[2] === '' || campos[2].value.length < 4){
        campos[2].classList.add('is-invalid');
    }else if(campos[3].value === 'Selecione a graduação'){
        campos[3].classList.add('is-invalid');
    }
    
        
});

/* Limpando o formulario com o botão limpar */
form.addEventListener('reset', (event) => {
    for(let i = 0; i< campos.length; i++){
        campos[i].classList.remove('is-valid');
        campos[i].classList.remove('is-invalid');
    }
})



