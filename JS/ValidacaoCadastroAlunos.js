
/* Verificando se há mensagens a serem exibidas antes da execução da pagina */


/* Função para validação do FORM */



/* Inicio do Script */
const campos = document.querySelectorAll('.campos');
/* Aqui é setado o estilo do campo a ser validado */
function setError(index){
    campos[index].classList.remove('is-valid');
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
    cpf = cpf.replace(/[^\d]+/g, ''); /* Tudo que não for digito será removido */
    console.log(cpf);
    if (cpf.length !== 11){ /* Aqui será verificado o tamanho do cpf */
        /* Aqui será verificado se os digitos são todos iguais */
        setError(2);
        return false;
    }else{
        noError(2);
    }
    if(/^(\d)1+$/.test(cpf)){
        console.log('Erro: CPF todo igual!');
        setError(2);
        return false;
    }else{
        noError(2);
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
    let cep = campos[4].value;
    cep = cep.replace(/[^\d]+/g, '');
    campos[4].value = cep;
    if (cep.length < 8){
        setError(4);
    }else{
        buscaCEP();
        noError(4)
    }
}
function buscaCEP(valor){
    let cep = campos[4].value;
    cep = cep.replace(/[^\d]+/g, '');
    if (cep != ""){
        let validandoCEP = /^[0-9]{8}$/;
        if (validandoCEP.test(cep)){
            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('endereco').value="...";
            document.getElementById('bairro').value="...";
            document.getElementById('cidade').value="...";
            document.getElementById('estado').value="...";

            //Cria um elemento javascript.
            let script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);
        }else{
            //Se o CEP for inválido
            limpaCampoCEP();
            setError(4);
        }
    }else{
        // CEP sem valor, limpar formulário
        limpaCampoCEP();
        setError(4);
    }
}

function limpaCampoCEP(){
    /* Atualziando os valors dos campos */
    document.getElementById('endereco').value = ("");
    document.getElementById('numeroCasa').value = ("");
    document.getElementById('bairro').value = ("");
    document.getElementById('cidade').value = ("");
    document.getElementById('estado').value = ("");   
}
function meu_callback(conteudo){
    if  (!("erro" in conteudo)){
        //Atualizar dados
        document.getElementById('endereco').value=(conteudo.logradouro);
        document.getElementById('bairro').value=(conteudo.bairro);
        document.getElementById('cidade').value=(conteudo.localidade);
        document.getElementById('estado').value=(conteudo.uf);
        noError(4)
    }else{
        // CEP não foi encontrado
        limpaCampoCEP();
        setError(4);
    }
}
/* Aqui temina a validação e inserção dos dados de CEP */

/* Aqui desativo o campo numero da residencia caso o check de sem num seja marcado */
function SemNumdeCasa(){
    let checkbox = document.getElementById('SNum');
    let numeroCasa = document.getElementById('numeroCasa');
    if (checkbox.checked){
        numeroCasa.disabled = true;
        numeroCasa.required = false;
    }else{
        numeroCasa.disabled = false;
        numeroCasa.value = '';
        numeroCasa.required = true;
    }

}





