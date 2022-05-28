$(document).ready(function () {    
    $.ajax({
        type: "GET",
        url: "load/load_procedimentos_json.php",
        dataType: "html",
        success: function (data) {
            console.log('Load dos procedimentos concluído.');
            $('#proc').html(data);

        },
        error: function (error) {
            // error alert message
            console.log('Falha no load dos procedimentos.')
        }
    });
    $('#submit_cot').click(function () { 
        // e.preventDefault();
        console.log('feito');
        $.ajax({
            type: "POST",
            url: "processa_cotacao.php",
            dataType: "text",
            success: function (data) {
                $('#msg').html('Procedimento inserido com sucesso!');
                
            },
            error: function (error) {
                // error alert message
                console.log('Falha na inserção dos procedimentos.')
            }
        });
    });

    $('#proc').change(function (e) { 
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "load/load_cotacao.php",
            data: {'proc': $('#proc').val()},
            dataType: "text",
            success: function (dados) {
                $('#tablecotacao').append(dados);                
            }
        });
    });
    
});