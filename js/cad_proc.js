$(document).ready(function () {    
    $.ajax({
        type: "GET",
        url: "load/load_procedimentos_table.php",
        dataType: "html",
        success: function (data) {
            console.log('Load dos procedimentos concluído.');
            $('#tableproc').append(data);

        },
        error: function (error) {
            // error alert message
            console.log('Falha no load dos procedimentos.')
        }
    });
    $('#submit_proc').click(function () { 
        // e.preventDefault();
        console.log()
        $.ajax({
            type: "POST",
            url: "submit_proc.php",
            data: {proc: $('#proc').val()},
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
});
