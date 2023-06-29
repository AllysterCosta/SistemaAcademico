// Aqui é realizado a verificação 

$(document).ready(function() {
    $('#btnPesquisar').click(function() {
        var valorSelecionado = $('#lista-info').val();

        $.ajax({
            url: 'ConsultaDeInfoConnect.php',
            type: 'POST',
            data: { pesquisa: valorSelecionado },
            success: function(response) {
                // Processar a resposta do PHP aqui
                $('#PainelTabela').html(response);
            }
        });
    });
});