<?php
session_start();
if ($_SESSION['acceso'] <> true) {
    header("Location: ./login");
}
header('Content-Type: text/html; charset=UTF-8');
@$active = 'registrar_empleado';
?>

<!DOCTYPE html>
<html>
    <head>
        <script src="script/variables.js" type="text/javascript"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>ISC Control | Registrar Empleado</title>
        <meta name="viewport" content= "width=device-width, user-scalable=no">
        <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />        
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="assets/css/ready.css">
        <link rel="stylesheet" href="assets/css/demo.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link href="css/css_alert.css" rel="stylesheet" type="text/css"/>
        <script src="script/cerrar_alert.js" type="text/javascript"></script>
        
    </head>
    <body>
        <div class="container_alert" id="container_alert">
        </div>
        <?php if (@$_GET["m"] == 1) { ?>

            <script>
                document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-success animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-clock-o"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">Empleado Registrado</span><a href="#" target="_blank" data-notify="url"></a></div>';
            </script>
        <?php } ?>
        <div class="wrapper">
            <div class="main-header">
                <div class="logo-header">
                    <a href="index" class="logo">
                        <center>ISC Control</center>
                    </a>
                    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
                </div>
                <?php
                // Navbar
                include "./include/navbar.php";
                ?>
            </div>
            <?php
            // slidebar
            include "./include/slidebar.php";
            ?>
            <div class="main-panel">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Registrar Horario</div>
                                    </div>
                                    <div class="card-body col-md-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <input type="hidden" id="idhorario">
                                                <div class="col-md-5">
                                                    <label>Hora de Entrada :</label>
                                                    <input type="time" value="--:--:--" max="24:59:59" min="00:00:00" step="1" class="form-control" id="txthoraentrada"/> 
                                                </div>
                                                <div class="col-md-5">
                                                    <label>Hora de Salida :</label>
                                                    <input type="time" value="--:--:--" max="24:59:59" min="00:00:00" step="1" class="form-control" id="txthorasalida"/> 
                                                </div>
                                                <div class="col-md-2">
                                                    <label>&nbsp;</label><br>
                                                    <button class="btn btn-success" title="Verificar/Registrar Horario" style="font-size: 18px; height: 40px;" id="btnverificarhorario">
                                                        <i class="la">Verificar</i> <i class="la la-play-circle-o"></i> 
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group" style="display: none;" id="displaymore">
                                            <div class="row">

                                                <form method="GET" id="form-actualizar-horario">
                                                    <div class="col-md-6">
                                                        <label>Registrar DNI de Empleado :</label>

                                                        <input type="text" class="form-control" id="DNIempleado"/> 
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Registrar Nombre De Empleado :</label>

                                                        <input type="text" class="form-control" id="txtbuscarempleado"/> 
                                                    </div>
                                                    <div style="margin-top:10px;" class="col-md-6">
                                                        <label>Lugar al que pertenece :</label>

                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row">                                                
                                                            <select id="select-locales-a" class="form-control col-md-2" style="margin: 12px;" onchange="">
                                                            </select>
                                                            <select id="select-departamentos-a" class="form-control col-md-2" style="margin: 12px;">
                                                            </select>
                                                        </div>
                                                        <label style="margin-left:15px;margin-top:30px">Elegir día de semana :</label>
                                                        <div class="contenidito">
                                                            <p><input type="checkbox" id="1" value="1" /><label for="1"><span class="ui"></span>Lunes</label></p>
                                                            <p><input type="checkbox" id="2" value="2"/><label for="2"><span class="ui"></span>Martes</label></p>
                                                            <p><input type="checkbox" id="3" value="3"/><label for="3"><span class="ui"></span>Miercoles</label></p>
                                                            <p><input type="checkbox" id="4" value="4"/><label for="4"><span class="ui"></span>Jueves</label></p>
                                                            <p><input type="checkbox" id="5" value="5"/><label for="5"><span class="ui"></span>Viernes</label></p>
                                                            <p><input type="checkbox" id="6" value="6"/><label for="6"><span class="ui"></span>Sábado</label></p>

                                                        </div>


                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-action">

                                        <a class="btn btn-success" href="#" onclick="nuevoempleado()"><i class="la la-file-excel-o"></i> Registrar Empleado</a>

                                        <button class="btn btn-danger" type="reset">Limpiar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/core/jquery.3.2.1.min.js"></script>
        <script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/plugin/chartist/chartist.min.js"></script>
        <script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
        <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
        <script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
        <script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
        <script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
        <script src="assets/js/plugin/chart-circle/circles.min.js"></script>
        <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
        <script src="assets/js/ready.min.js"></script>
        <script type="text/javascript" src="script/reportes.js"></script>
        <script src="script/select-dinamicos2.js" type="text/javascript"></script>
        <!--Ejemplo a seguir es esto : https://makitweb.com/jquery-ui-autocomplete-with-php-and-ajax/-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script>

                                            // VERIFICAR SI EXISTE
                                            $(document).ready(function () {
                                                $("#btnverificarhorario").click(function () {
                                                    var he = document.getElementById("txthoraentrada").value;
                                                    var hs = document.getElementById("txthorasalida").value;
                                                    if ((he == '' || hs == '') || (he == '--:--:--' || hs == '--:--:--')) {
                                                        document.getElementById("idhorario").value = "";
                                                        document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-clock-o"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">Uno de los campos están vacios.</span><a href="#" target="_blank" data-notify="url"></a></div>';
                                                    } else {
                                                        $.ajax({
                                                            url: rutaWS + "verificar-horario.php?cmd=verificarhorario&he=" + he + "&hs=" + hs,
                                                            type: 'GET',
                                                            dataType: "json",
                                                            success: function (data) {
                                                                if (data['status'] == 'Error') {
                                                                    document.getElementById("idhorario").value = '';
                                                                    document.getElementById("displaymore").style.display = 'none';
                                                                    document.getElementById("form-actualizar-horario").reset();
                                                                    document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-clock-o"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">' + data['msg'] + '</span><a href="#" target="_blank" data-notify="url"></a></div>';

                                                                } else if (data['status'] == 'Ok') {
                                                                    document.getElementById("idhorario").value = data['data'].idhorario;
                                                                    document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-success animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-clock-o"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">' + data['msg'] + '</span><a href="#" target="_blank" data-notify="url"></a></div>';
                                                                    document.getElementById("displaymore").style.display = 'inline-block';
                                                                }
                                                            }
                                                        });
                                                    }
                                                });
                                            });
                                            //


        </script>




        <script>
            $(function () {
                // Single Select
                $("#txtbuscarhorario").autocomplete({

                    source: function (request, response) {
                        // Fetch data
                        $.ajax({
                            url: rutaWS + "listado-horario.php",
                            type: 'POST',
                            dataType: "json",
                            data: {
                                search: request.term,
                                cmd: 'buscarhorarioparaempleado'
                            },
                            success: function (data) {
                                response(data['data']);
                            }
                        });
                    },
                    select: function (event, ui) {
                        // Set selection
                        document.getElementById("txtbuscarhorario").value = ui.item.label;
                        document.getElementById("idhorariohidden").value = ui.item.value;
                        //$('#txtbuscarempleado').val(ui.item.name); // display the selected text
                        //$('#idempleadohidden').val(ui.item.value); // save selected id to input
                        return false;
                    }
                });
            });
            function split(val) {
                return val.split(/,\s*/);
            }
            function extractLast(term) {
                return split(term).pop();
            }
            $(function () {
                // Single Select
                $("#txtdepartamento").autocomplete({

                    source: function (request, response) {
                        // Fetch data
                        $.ajax({
                            url: rutaWS + "list-departamento.php",
                            type: 'POST',
                            dataType: "json",
                            data: {
                                search: request.term,
                                cmd: 'lista-departamento',
                            },
                            success: function (data) {
                                response(data['data']);
                            }
                        });
                    },
                    select: function (event, ui) {
                        // Set selection
                        document.getElementById("txtdepartamento").value = ui.item.label;
                        document.getElementById("departamentohidden").value = ui.item.value;
                        //$('#txtbuscarempleado').val(ui.item.name); // display the selected text
                        //$('#idempleadohidden').val(ui.item.value); // save selected id to input
                        return false;
                    }
                });
            });
            function split(val) {
                return val.split(/,\s*/);
            }
            function extractLast(term) {
                return split(term).pop();
            }
        </script>
    </body>
</html>