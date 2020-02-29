/* 
 * busqueda general y busqueda avanzada
 * locales
 * departamentos
 * empleado
 */



// Listar Locales - avanzada
$(document).ready(function () {
    $.ajax({
        url: rutaWS + 'listado-locales.php?cmd=lista-locales',
        method: 'GET', //en este caso
        dataType: 'json',
        asycn: false,
        success: function (res) {
            var option = "<option value='' disabled='disabled' selected='selected' hidden='hidden'>Locales</option>";
            if (res['status'] == 'Ok') {
                var lista = res['data'];
                for (var i = 0; i < lista.length; i++) {
                    option += "<option value='" + lista[i]['idpadre'] + "'>" + lista[i]['padre'] + "</option>";
                }
            }
            document.getElementById("select-locales-a").innerHTML = option;

        },
    });
});


$(document).ready(function () {
    $('#select-locales-a').change(function () {

        // limpio el select empleados ya que se estaba quedando grabado
         
        //

        var idlocal = document.getElementById('select-locales-a');
        $.ajax({
            url: rutaWS + 'listado-departamento.php?cmd=lista-departamentoxlocal&idlocal=' + idlocal.value,
            method: 'GET', //en este caso
            dataType: 'json',
            asycn: false,
            success: function (data) {
                //$('#yourdiv').html(data);
                var option = "<option value='' disabled='disabled' selected='selected' hidden='hidden'>Departamentos</option>";
                if (data['status'] == 'Ok') {
                    var lista = data['data'];
                    for (var i = 0; i < lista.length; i++) {
                        option += "<option value='" + lista[i]['idhijo'] + "'>" + lista[i]['hijo'] + "</option>";
                    }
                }
                document.getElementById("select-departamentos-a").innerHTML = option;

            }

        });
    });
});



