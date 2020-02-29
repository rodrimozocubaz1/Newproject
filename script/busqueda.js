// boton de busqueda general
$('#btnbusquedageneral').on('click', function (e) {
    e.preventDefault();
    var id = $('#select-empleados-g').val();
    var fecha1 = $('#fechadesde-g').val();
    var fecha2 = $('#fechahasta-g').val();
    var funcion1 = listaxempleado();
    var funcion2 = resumenxempleado();

    if (id == "" || fecha1 == '' || fecha2 == '') {
        document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-bell"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">Uno de los campos están vacios.</span><a href="#" target="_blank" data-notify="url"></a></div>';
        $('#calculo_empleados').html('');
    } else {
        var realizados = $.when(funcion1, funcion2);
            realizados.done(function (x, y) {
                var newY = '';
                var newX = '';

                for (var re = 0; re < y.length; re++) {
                    if (y[re] != 'success' || y[re] != '[object Object]') {
                        newY += y[re];
                    }
                }

                for (var ex = 0; ex < x.length; ex++) {
                    if (x[ex] != 'success' || x[ex] != '[object Object]') {
                        newX += x[ex];
                    }
                }
                $('#horas_laborables').html(newY);
                $('#calculo_empleados').html(newX);
            });
//        } else {
//            $('#horas_laborables').html('<td>Sin Especificar</td><td>Sin Especificar</td><td>Sin Especificar</td><td>Sin Especificar</td>');
//            $('#calculo_empleados').html('<tr><td colspan="13"><center>No se encontraron resultados</center></td></tr>');
//        }
    }
});

function listaxempleado() {
    var id = $('#select-empleados-g').val();
    var fecha1 = $('#fechadesde-g').val();
    var fecha2 = $('#fechahasta-g').val();
    return $.ajax({
        type: 'POST',
        url: rutaWS + 'calculos/procesar2_1.php',
        data: {'idnieto': id, 'fecha1': fecha1, 'fecha2': fecha2}
    });
}

function resumenxempleado() {
    var id = $('#select-empleados-g').val();
    var fecha1 = $('#fechadesde-g').val();
    var fecha2 = $('#fechahasta-g').val();
    return $.ajax({
        type: 'POST',
        url: rutaWS + 'calculos/procesar_1.php',
        data: {'idnieto': id, 'fecha1': fecha1, 'fecha2': fecha2}
    });
}
//

// boton de busqueda avanzado
$('#btnbusquedaavanzada').on('click', function (e) {
    e.preventDefault();
    var id = $('#select-empleados-a').val();
    var fecha1 = $('#fechadesde-a').val();
    var fecha2 = $('#fechahasta-a').val();
    var funcion1 = lista();
    var funcion2 = resumen();

    if (id == 0 || fecha1 == '' || fecha2 == '') {
        document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-bell"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">Uno de los campos están vacios.</span><a href="#" target="_blank" data-notify="url"></a></div>';
        $('#calculo_empleados').html('');
    } else {

        var realizados = $.when(funcion1, funcion2);
        realizados.done(function (x, y) {
            var newY = '';
            var newX = '';

            for (var re = 0; re < y.length; re++) {
                if (y[re] != 'success' || y[re] != '[object Object]') {
                    newY += y[re];
                }
            }

            for (var ex = 0; ex < x.length; ex++) {
                if (x[ex] != 'success' || x[ex] != '[object Object]') {
                    newX += x[ex];
                }
            }
            $('#horas_laborables').html(newY);
            $('#calculo_empleados').html(newX);
        });
    }
});

function lista() {
    var id = $('#select-empleados-a').val();
    var fecha1 = $('#fechadesde-a').val();
    var fecha2 = $('#fechahasta-a').val();
    return $.ajax({
        type: 'POST',
        url: rutaWS + 'calculos/procesar2.php',
        data: {'idnieto': id, 'fecha1': fecha1, 'fecha2': fecha2}
    });
}

function resumen() {
    var id = $('#select-empleados-a').val();
    var fecha1 = $('#fechadesde-a').val();
    var fecha2 = $('#fechahasta-a').val();
    return $.ajax({
        type: 'POST',
        url: rutaWS + 'calculos/procesar.php',
        data: {'idnieto': id, 'fecha1': fecha1, 'fecha2': fecha2}
    });
}

