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
        console.log()
        $.ajax({
            type: "POST",
            url: "processa_cotacao.php",
            data: {proc: $('#proc').val(), forn: $('#forn').val(), valor: $('#valor').val()},
            dataType: "html",
            success: function (data) {
                $('#msg').html('data');
                
            },
            error: function (error) {
                // error alert message
                console.log('Falha na inserção dos procedimentos.')
            }
        });
    });
});
