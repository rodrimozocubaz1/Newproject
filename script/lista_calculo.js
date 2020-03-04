
function buscar_ga(btnid) {

    var idempl = "";
    var fecha1 = "";
    var fecha2 = "";

    if (btnid == 'btnbusquedageneral') {
        idempl = document.getElementById("select-empleados-g").value;
        fecha1 = document.getElementById("fechadesde-g").value;
        fecha2 = document.getElementById("fechahasta-g").value;
        document.getElementById("btnid1hidden").value = 'btnbusquedageneral';
        document.getElementById("btnid2hidden").value = 'btnbusquedageneral';

    } else if (btnid == 'btnbusquedaavanzada') {
        idempl = document.getElementById("select-empleados-a").value;
        fecha1 = document.getElementById("fechadesde-a").value;
        fecha2 = document.getElementById("fechahasta-a").value;
        document.getElementById("btnid1hidden").value = 'btnbusquedaavanzada';
        document.getElementById("btnid2hidden").value = 'btnbusquedaavanzada';
    } else {
        document.getElementById("btnid1hidden").value = '';
//        document.getElementById("btnid2hidden").value = '';
    }

    if (idempl != "" && fecha1 != "" && fecha2 != "") {
        $.ajax({
            url: rutaWS + 'lista_calculo.php?cmd=lista_calculo&idnieto=' + idempl + "&fecha1=" + fecha1 + "&fecha2=" + fecha2,
            method: 'GET', //en este caso
            dataType: 'json',
            asycn: false,
            success: function (res) {
                if (res['status'] == 'Ok') {
                    var tr = "";
                    var datos = res['data'];
                    for (var i = 0; i < datos.length; i++) {
                        tr += '<tr>';
                        tr += '<td>' + datos[i].nomempleado + '</td>';
                        tr += '<td>' + datos[i].dia + '</td>';
                        tr += '<td>' + datos[i].fecha + '</td>';
                        tr += '<td>' + datos[i].horaentrada + '</td>';
                        tr += '<td>' + datos[i].horasalida + '</td>';
                        tr += '<td>' + datos[i].marcacioningreso + '</td>';
                        tr += '<td>' + datos[i].iniciobreak + '</td>';
                        tr += '<td>' + datos[i].finalbreak + '</td>';
                        tr += '<td>' + datos[i].marcacionsalida + '</td>';
                        tr += '<td>' + datos[i].tardanza + '</td>';
                        tr += '<td>' + datos[i].salidatemprana + '</td>';
                        tr += '<td>' + datos[i].tiempojusto + '</td>';
                        tr += '<td>' + datos[i].tiempototal + '</td>';
                        tr += "<td><a class='btn btn-success btn-xs' href='#' onclick='crearanotacion(" + datos[i].idempleado + "," + "\"" + datos[i].fecha + "\"" + ");' title='Registrar Anotación' data-toggle='modal' data-target='#crearanotacion'><i class='la la-newspaper-o'></i></a> <a class='btn btn-primary btn-xs' href='#' title='Ver Anotaciones' data-toggle='modal' data-target='#listado_anotaciones' onclick='veranotaciones(" + datos[i].idempleado + "," + "\"" + datos[i].fecha + "\"" + ");'><i class='la la-eye'></i></a></td>";
                        tr += '</tr>';
                    }

                    document.getElementById("calculo_empleados").innerHTML = tr;
                } else if (res['status'] == 'Error') {
                    document.getElementById("calculo_empleados").innerHTML = '<tr><td colspan="14"><center>No se encontraron resultados</center></td></tr>';
                }
            },
        });


        $.ajax({
            url: rutaWS + 'calculos/procesar.php?idnieto=' + idempl + "&fecha1=" + fecha1 + "&fecha2=" + fecha2,
            method: 'GET', //en este caso
            dataType: 'html',
            asycn: false,
            success: function (data) {

                if (data == '') {
                    document.getElementById("horas_laborables").innerHTML = "<td>Sin resultado</td><td>Sin resultado</td><td>Sin resultado</td><td>Sin resultado</td>";
                } else {
                    document.getElementById("horas_laborables").innerHTML = data;
                }
            },
        });
    } else {
        document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-bell"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">Uno de los campos están vacios.</span><a href="#" target="_blank" data-notify="url"></a></div>';
    }
}



function crearanotacion(Cid, Cfecha) {
    document.getElementById("idemphidden").value = "";
    document.getElementById("fechahidden").value = "";

    document.getElementById("idemphidden").value = Cid;
    document.getElementById("fechahidden").value = Cfecha;
}

function veranotaciones(Lid, Lfecha) {
    document.getElementById("idemphiddenlista").value = Lid;
    document.getElementById("fechahiddenlista").value = Lfecha;
    var btnhidden = document.getElementById("btnid2hidden").value;

    if (Lid != '' && Lfecha != '' && btnhidden != '') {
        $.ajax({
            url: rutaWS + 'anotaciones.php?cmd=listado_anotacion&idempleado=' + Lid + "&fecha=" + Lfecha,
            method: 'GET', //en este caso
            dataType: 'json',
            asycn: false,
            success: function (res) {
                if (res['status'] == 'Ok') {

                    var datos = res['data'];
                    var li = "";
                    for (var r = 0; r < datos.length; r++) {
                        li += "<li class='list-group-item'><span style='float: right;margin: 5px;cursor: pointer;'><a href='#' title='Eliminar Anotación' onclick='eliminaranotacion(" + datos[r].id + ");'>x</a></span><strong>Fecha : " + datos[r].fecha + "</strong><br><br>" + datos[r].nota + "</li>";
                    }
                    document.getElementById("listado_de_anotaciones").innerHTML = li;

                    //document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-success animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-bell"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">' + res['msg'] + '</span><a href="#" target="_blank" data-notify="url"></a></div>';
                    //document.getElementById("txtanotacion").value = '';
                    //$(btnreganotacion).click();
                } else if (res['status'] == 'Error') {
                    document.getElementById("listado_de_anotaciones").innerHTML = '<center>Lista Vacia</center>';
                    document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-bell"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">' + res['msg'] + '</span><a href="#" target="_blank" data-notify="url"></a></div>';
                }
            },
        });
    } else {
        document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-bell"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">Uno de los campos están vacios.</span><a href="#" target="_blank" data-notify="url"></a></div>';
    }
}


function registrarnotacion() {
    var regId = document.getElementById("idemphidden").value;
    var regFecha = document.getElementById("fechahidden").value;
    var regMensaje = document.getElementById("txtanotacion").value;
    var btnreganotacion = document.getElementById("btnid1hidden").value;

    if (regId != '' && regFecha != '' && regMensaje != '' && btnreganotacion != '') {
        $.ajax({
            url: rutaWS + 'anotaciones.php?cmd=registrar_anotacion&idempleado=' + regId + "&fecha=" + regFecha + "&anotacion=" + regMensaje,
            method: 'GET', //en este caso
            dataType: 'json',
            asycn: false,
            success: function (res) {
                if (res['status'] == 'Ok') {
                    document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-success animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-bell"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">' + res['msg'] + '</span><a href="#" target="_blank" data-notify="url"></a></div>';
                    document.getElementById("txtanotacion").value = '';
//                    $("#"+btnreganotacion).click();
                } else if (res['status'] == 'Error') {
                    document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-bell"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">' + res['msg'] + '</span><a href="#" target="_blank" data-notify="url"></a></div>';
                }
            },
        });
    } else {
        document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-bell"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">Uno de los campos están vacios.</span><a href="#" target="_blank" data-notify="url"></a></div>';
    }
}

function eliminaranotacion(idnota) {
    if (idnota != '') {
        $.ajax({
            url: rutaWS + 'anotaciones.php?cmd=eliminar_anotacion&idnota=' + idnota,
            method: 'GET', //en este caso
            dataType: 'json',
            asycn: false,
            success: function (res) {
                if (res['status'] == 'Ok') {

                    document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-success animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-bell"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">' + res['msg'] + '</span><a href="#" target="_blank" data-notify="url"></a></div>';
                    $("#cerrarlistadoanotaciones").click();
//                    $(btnreganotacion).click();
                } else if (res['status'] == 'Error') {
                    document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-bell"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">' + res['msg'] + '</span><a href="#" target="_blank" data-notify="url"></a></div>';
                }
            },
        });
    } else {
        document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-bell"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">No existe la anotacion</span><a href="#" target="_blank" data-notify="url"></a></div>';
    }
}