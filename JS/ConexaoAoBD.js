
/* Esse arquivo será usado para aproveitar os locais em que necessario conexão com o BD */
/* Banco de dados com metodo Fecth */

const select = document.getElementById('selectDoBD');

/* Aqui é utilizado a função GET do Jquery para recurar os dados do Banco
e depois manipulando para que seja inserido dentro do HTML */
$(document).ready(function() {
    $.get('optionsDoSelect.php', function(data) {
      // adiciona as opções do select
      $('#selectDoBD').append(data);
    });
  });


