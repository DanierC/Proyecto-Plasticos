$(buscar_datos1());

function buscar_datos1(consulta) {
    $.ajax({
            url: 'buscarca.php',
            type: 'POST',
            dataType: 'html',
            data: { consulta1: consulta },
        })
        .done(function(respuesta) {
            $("#datosca").html(respuesta);
        })
        .fail(function() {
            console.log("error");
        });
}


//$(document).on('keyup', '#ca1', function() {

var select = document.getElementById('id_prod');
select.addEventListener('change',
    function() {

        var valor = $(this).val();
        if (valor != "") {
            buscar_datos1(valor);
        } else {
            buscar_datos1();
        }
    });