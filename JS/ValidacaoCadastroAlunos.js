/* A validação dos dados do cadastro de alunos será realizada por este script */

const campos = document.querySelectorAll('.campos');
/* Função para validação do FORM */

/* Aqui é setado o estilo do campo a ser validado */
function setError(index){
    campos[index].classList.add('is-invalid');
}
function noError(index){
    campos[index].classList.remove('is-invalid');
    campos[index].classList.add('is-valid');
}

/* Validação do campo nome */
function NameValidate(){
    if (campos[0].value.length < 3){
        setError(0);
    }
    else{
        noError(0);
    }
}
/* Validação de Nome Social */
function EnableNomeSocial(){
    let checkbox = document.getElementById("NomeSocial");
    let nomeSocial = document.getElementById("CampoNomeSocial");
    if (checkbox.checked){
        nomeSocial.disabled = false;
        nomeSocial.required = true;
        console.log(nomeSocial.required);
    }else{
        nomeSocial.disabled = true;
        nomeSocial.value = '';
        nomeSocial.required = false;
        console.log(nomeSocial.required);
        noError(1);
    }
}
function CampoNomeSocialValido(){
    if (campos[1].value.length < 3){
        setError(1);
    }else{
        noError(1);
    }
}

/* Validação do campo CPF */
function CpfValidateFormatar(){
    let cpf = campos[2].value;
    cpf = cpf.replace(/\D/g, ''); /* Tudo que não for digito será removido */
    if (cpf.length > 0){ /* Aqui é feita a formatação do cpf */
        cpf = cpf.substring(0, 3) + "." + cpf.substring(3, 6) + "." + cpf.substring(6, 9) + "-" + cpf.substring(9);
        CpfValidate();
    }
    campos[2].value = cpf;
}
function CpfValidate(){
    let cpf = campos[2].value;
    cpf = cpf.replace(/[^\d]+/g, '') /* Tudo que não for digito será removido */
    if (cpf.length !== 11){ /* Aqui será verificado o tamanho do cpf */
        setError(2);
        return false;
    }else{
        noError(2);
    }
    if (/^(\d)1+$/.test(cpf)){ /* Aqui será verificado se os digitos são todos iguais */
        setError(2);
        return false;
    }
}

/* Validação do campo telefone */
function telefoneValidate(){
    let telefone = campos[3].value;
    telefone = telefone.replace(/[^\d]+/g, '') /* Aqui será removido tudo que não for digito */
    campos[3].value = telefone;
    if (telefone.length !== 11){
        setError(3);
        return false;
    }else{
        noError(3);
    }
    
}
function telefoneFormatadoValido(){
    let telefone = campos[3].value;
    telefone = telefone.replace(/[^\d]+/g, ''); /* Aqui será removido tudo que não for digito */
    if (telefone.length > 0){
        telefone = "(" + telefone.substring(0, 2) + ")" + telefone.substring(2, 7) + "-" + telefone.substring(7, 11);
        telefoneValidate();
    }
    campos[3].value = telefone;
}

/* Validação de CEP --> Aqui está sendo consumido a API do ViaCEP para buscar de forma automatica e preencher os campos conforme o CEP digitado no formulario */

function ValidaCEP(){
    console.log('CARAMBOLAS');
}


