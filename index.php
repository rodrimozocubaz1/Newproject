<?php
session_start();
if ($_SESSION['acceso'] <> true) {
    header("Location: ./login");
}
header('Content-Type: text/html; charset=UTF-8');
@$active = 'index';
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="script/variables.js" type="text/javascript"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>ISC Control | Busqueda</title>
        <meta name="viewport" content= "width=device-width, user-scalable=no">
        <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="assets/css/ready.css">
        <link rel="stylesheet" href="assets/css/demo.css">
        <link href="css/css_alert.css" rel="stylesheet" type="text/css"/>
        <link href="css/autocompleteempleado.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

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
                                    <div class="card-body">

                                        <div id="accordion">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            > Busqueda General
                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <div class="col-md-12">
                                                            <div class="row">

                                                                <input placeholder="Nombre Empleado ó DNI" id="select-empleados-g" class="form-control col-md-3" style="margin: 5px;">
                                                                <div class="bgcolor" style="margin: 5px;">    
                                                                </div>
                                                                <input type="date" id="fechadesde-g" class="form-control col-md-3" style="margin: 5px;">
                                                                <input type="date" id="fechahasta-g" class="form-control col-md-3" style="margin: 5px;">

                                                                <button class="btn btn-primary" id="btnbusquedageneral" style="margin: 5px;" style="margin: 5px;">Buscar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            > Busqueda Avanzada
                                                        </button>

                                                        <?php
                                                        if ($_SESSION['rol'] == 1) {
                                                            ?>
                                                            <div class="dropdown" style="float: right;">
                                                                <button title="REPORTES" class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="la la-bar-chart-o"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item" href="#" onclick="reporte();"><i class="la la-file-excel-o"></i> Reporte</a>
                                                                    <a class="dropdown-item" href="#" onclick="reporteidoneo();"><i class="la la-file-excel-o"></i> Reporte Idóneo</a>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <div class="col-md-12">
                                                            <div class="row">                                                
                                                                <select id="select-locales-a" class="form-control col-md-2" style="margin: 5px;" onchange="">
                                                                </select>
                                                                <select id="select-departamentos-a" class="form-control col-md-2" style="margin: 5px;">
                                                                </select>
                                                                <select id="select-empleados-a" class="form-control col-md-2" style="margin: 5px;">
                                                                </select>
                                                                <input type="date" step="1" id="fechadesde-a" class="form-control col-md-2" style="margin: 5px;">
                                                                <input type="date" step="1" id="fechahasta-a" class="form-control col-md-2" style="margin: 5px;">
                                                                <button class="btn btn-primary" id="btnbusquedaavanzada" style="margin: 5px;">Buscar</button>

                                                                <!--                                                                <br>
                                                                                                                                <center>
                                                                                                                                    <button class="btn btn-success" id="btnreporte" style="margin: 5px;">
                                                                                                                                        <i class="la la-file-excel-o"></i> Reporte
                                                                                                                                    </button>
                                                                                                                                    <button class="btn btn-success" id="btnreporte" style="margin: 5px;">
                                                                                                                                        <i class="la la-file-excel-o"></i> Reporte Idóneo
                                                                                                                                    </button>
                                                                                                                                </center>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <center>Total</center>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table mt-3" style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Tiempo Laborado</th>
                                                                <th scope="col" colspan="3">Tiempo No Laborado</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>        
                                                            <tr>
                                                                <td style="font-weight: bolder;">Total</td>
                                                                <td style="font-weight: bolder;">Tardanza</td>
                                                                <td style="font-weight: bolder;">Salidas Temprana</td>
                                                                <td style="font-weight: bolder;">No Marcadas</td>
                                                            </tr>
                                                            <tr id="horas_laborables">

                                                                <td>Sin Especificar</td>
                                                                <td>Sin Especificar</td>
                                                                <td>Sin Especificar</td>
                                                                <td>Sin Especificar</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Dia</th>
                                                        <th>Fecha</th>
                                                        <th>Horario Entrada</th>
                                                        <th>Horario Salida</th>
                                                        <th>Marcación Ingreso</th>
                                                        <th>Inicio Refrigerio</th>
                                                        <th>Fin Refrigerio</th>
                                                        <th>Marcación Salida</th>
                                                        <th>Tardanza</th>
                                                        <th>Salida Temprana</th>
                                                        <th>Tiempo Justo</th>
                                                        <th>Tiempo Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="calculo_empleados">
                                                    <tr>
                                                        <td colspan="13">
                                                <center>No se encontraron resultados</center>
                                                </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">									
                            <p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
                            <p>
                                <b>We'll let you know when it's done</b></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
    </body>

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
    <script src="script/busqueda.js" type="text/javascript"></script>

    <script src="script/typeahead.js" type="text/javascript"></script>
    <script src="script/autocompleteempleado.js" type="text/javascript"></script>

    <script src="script/reportes.js" type="text/javascript"></script>
</html>