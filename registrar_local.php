<?php
session_start();
if ($_SESSION['acceso'] <> true) {
    header("Location: ./login");
}
header('Content-Type: text/html; charset=UTF-8');
@$active = 'registrar_local';
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="script/variables.js" type="text/javascript"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>ISC Control | Local</title>
        <meta name="viewport" content= "width=device-width, user-scalable=no">
        <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="assets/css/ready.css">
        <link rel="stylesheet" href="assets/css/demo.css">
        <link href="css/css_alert.css" rel="stylesheet" type="text/css"/>
        <link href="css/autocompleteempleado.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="listarlocales();">

        <div class="container_alert" id="container_alert">
            <!--            <div class="ok_alert">
                            sfds
                        </div>-->
        </div>

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
                                    <!--                                    <div class="card-header">
                                                                            <div class="card-title">Locales</div>
                                                                        </div>-->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <br>
                                                        <h6><center>Registrar Local</center></h6>
                                                        <hr>
                                                        <div style="padding: 20px;">
                                                            <label>Nombre del Local</label><br><br>
                                                            <input class="form-control" placeholder="*Nombre del Local" id="nombre">

                                                            <br>
                                                            <label>Dirección del Local</label><br><br>
                                                            <input class="form-control" placeholder="*Dirección del Local" id="direccion">

                                                            <br><br>
                                                            <button class="btn btn-success" style="float: right;" onclick="registrarlocales();">Registrar</button>

                                                            <br>
                                                            <br>
                                                        </div>
                                                        <hr>

                                                    </div>
                                                    <div class="col-md-8">
                                                        <br>
                                                        <h6><center>Listado de Locales</center></h6>
                                                        <hr>
                                                        <div style="width: 100%; height: calc(100vh - 247px); overflow:auto;">
                                                            <div style="padding: 20px;">
                                                                <input type="text" id="myInput" class="form-control col-md-4" onkeyup="myFunction()" placeholder="Buscar Locales"> <br>
                                                                <table id="myTable" class="table">
                                                                    <tr class="header">
                                                                        <th style="width:60%;">Nombre del Local</th>
                                                                        <th style="width:40%;">Dirección</th>
                                                                        <th style="width:40%;">Opcion</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="3">No se encontraron resultados</td>
                                                                    </tr>                                                                
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
            <!-- Esto contiene el mensaje de bienvenida <script src="assets/js/demo.js"></script>-->

            <script src="script/cerrar_alert.js" type="text/javascript"></script>
            <script src="script/cerrarsesion.js" type="text/javascript"></script>
            <script src="script/select-dinamicos.js" type="text/javascript"></script>

            <script src="script/typeahead.js" type="text/javascript"></script>

            <script>
                                                                    function myFunction() {
                                                                        var input, filter, table, tr, td, i, txtValue;
                                                                        input = document.getElementById("myInput");
                                                                        filter = input.value.toUpperCase();
                                                                        table = document.getElementById("myTable");
                                                                        tr = table.getElementsByTagName("tr");
                                                                        for (i = 0; i < tr.length; i++) {
                                                                            td = tr[i].getElementsByTagName("td")[0];
                                                                            if (td) {
                                                                                txtValue = td.textContent || td.innerText;
                                                                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                                                                    tr[i].style.display = "";
                                                                                } else {
                                                                                    tr[i].style.display = "none";
                                                                                }
                                                                            }
                                                                        }
                                                                    }

                                                                    function listarlocales() {
                                                                        var tr = '<tr class="header"><th style="width:60%;">Nombre del Local</th><th style="width:40%;">Dirección</th><th style="width:40%;">Opcion</th></tr>';
                                                                        $.ajax({
                                                                            url: rutaWS + 'locales.php',
                                                                            method: 'GET', //en este caso
                                                                            dataType: 'json',
                                                                            asycn: false,
                                                                            success: function (res) {
                                                                                if (res['status'] == 'Ok') {
                                                                                    var datos = res['data'];

                                                                                    for (var l = 0; l < datos.length; l++) {
                                                                                        tr += '<tr><td>' + datos[l].padre + '</td><td>' + datos[l].direccion + '</td><td><button herf="#" class="btn btn-danger btn-sm" onclick="eliminarlocal(' + datos[l].idpadre + ');">x</button></td></tr>';
                                                                                    }
                                                                                    document.getElementById("myTable").innerHTML = tr;
                                                                                } else if (res['status'] == 'Error') {
                                                                                    document.getElementById("myTable").innerHTML = '<td colspan="3">No se encontraron resultados</td>';
                                                                                    document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-bell"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">' + res['msg'] + '</span><a href="#" target="_blank" data-notify="url"></a></div>';
                                                                                }
                                                                            },
                                                                        });
                                                                    }

                                                                    function eliminarlocal(idlocal) {
                                                                        $.ajax({
                                                                            url: rutaWS + 'locales.php?idlocal=' + idlocal,
                                                                            method: 'GET', //en este caso
                                                                            dataType: 'json',
                                                                            asycn: false,
                                                                            success: function (res) {
                                                                                if (res['status'] == 'Ok') {
                                                                                    document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-success animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-bell"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">' + res['msg'] + '</span><a href="#" target="_blank" data-notify="url"></a></div>';
                                                                                    listarlocales();
                                                                                } else if (res['status'] == 'Error') {
                                                                                    document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-bell"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">' + res['msg'] + '</span><a href="#" target="_blank" data-notify="url"></a></div>';
                                                                                }
                                                                            },
                                                                        });
                                                                    }


                                                                    function registrarlocales() {
                                                                        var nombre = document.getElementById("nombre").value;
                                                                        var direccion = document.getElementById("direccion").value;

                                                                        $.ajax({
                                                                            url: rutaWS + 'locales.php?nombre=' + nombre + '&direccion=' + direccion,
                                                                            method: 'GET', //en este caso
                                                                            dataType: 'json',
                                                                            asycn: false,
                                                                            success: function (res) {
                                                                                if (res['status'] == 'Ok') {
                                                                                    document.getElementById("nombre").value = "";
                                                                                    document.getElementById("direccion").value = "";
                                                                                    document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-success animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-bell"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">' + res['msg'] + '</span><a href="#" target="_blank" data-notify="url"></a></div>';
                                                                                    listarlocales();
                                                                                } else if (res['status'] == 'Error') {
                                                                                    document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-bell"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">' + res['msg'] + '</span><a href="#" target="_blank" data-notify="url"></a></div>';
                                                                                }
                                                                            },
                                                                        });
                                                                    }
            </script>
    </body>
</html>