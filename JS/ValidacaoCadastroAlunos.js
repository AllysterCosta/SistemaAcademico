/* A validação dos dados do cadastro de alunos será realizada por este script */

const campos = document.querySelectorAll('.campos');

/* Aqui é setado o estilo do campo a ser validado */
function setError(index){
    campos[index].style.border = '2px solid red';
}
function noError(index){
    campos[index].style.border = '1px solid #c5c5c5';
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
/* Validação do campo CPF */
function CpfValidateFormatar(){
    let cpf = campos[1].value;
    cpf = cpf.replace(/\D/g, ''); /* Tudo que não for digito será removido */
    if (cpf.length > 0){ /* Aqui é feita a formatação do cpf */
        cpf = cpf.substring(0, 3) + "." + cpf.substring(3, 6) + "." + cpf.substring(6, 9) + "-" + cpf.substring(9);
        CpfValidate();
    }
    campos[1].value = cpf;
}
function CpfValidate(){
    let cpf = campos[1].value;
    cpf = cpf.replace(/[^\d]+/g, '') /* Tudo que não for digito será removido */
    if (cpf.length !== 11){ /* Aqui será verificado o tamanho do cpf */
        setError(1);
        return false;
    }else{
        noError(1);
    }
    if (/^(\d)1+$/.test(cpf)){ /* Aqui será verificado se os digitos são todos iguais */
        setError(1);
        return false;
    }
}

