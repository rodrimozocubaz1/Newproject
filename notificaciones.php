<?php
session_start();
if ($_SESSION['acceso'] <> true) {
    header("Location: ./login");
}
header('Content-Type: text/html; charset=UTF-8');
@$active = 'notificaciones';

$id = trim(@$_GET['idnotificacion']);
$ver= trim(@$_GET['ver']);
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="script/variables.js" type="text/javascript"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>ISC Control | Notificaciones</title>
        <meta name="viewport" content= "width=device-width, user-scalable=no">
        <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="assets/css/ready.css">
        <link rel="stylesheet" href="assets/css/demo.css">
        <link href="css/css_alert.css" rel="stylesheet" type="text/css"/>
        <link href="css/autocompleteempleado.css" rel="stylesheet" type="text/css"/>
        <style>
        * {
        box-sizing: border-box;
        }

        #myUL {
        list-style-type: none;
        padding: 0;
        margin: 0;
        }

        #myUL li a {
        border: 1px solid #ddd;
        margin-top: -1px; /* Prevent double borders */
        background-color: #f6f6f6;
        padding: 12px;
        text-decoration: none;
        font-size: 18px;
        color: black;
        display: block
        }
        </style>
    </head>
    <body onload="cargarnotificaiones();">

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

                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h4><center>Mis Notificaciones</center></h4>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <input type="text" id="myInput" class="form-control col-md-3 input-lg list-group-item" onkeyup="myFunction()" placeholder="Buscar Notificaciones...">
                                            </div>
                                            <ul id="myUL" class="list-group">
                                                <!--<li class="list-group-item" style="border: 1px solid transparent;"><a href="#">Adele</a></li>
                                                <li class="list-group-item" style="border: 1px solid transparent;"><a href="#">Agnes</a></li>
                                                <li class="list-group-item" style="border: 1px solid transparent;"><a href="#">Billy</a></li>-->
                                            </ul>
                                        </div>

                                        <input type="hidden" value="<?php echo $id;?>" id="idnotificacion">
                                        <input type="hidden" value="<?php echo $ver;?>" id="vernotificacion">
                                    </div>
                                </div>
                            </div>
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

    <script>
        function myFunction() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }

        function cargarnotificaiones(){
            var idnotificaion = document.getElementById("idnotificacion").value;
            var vernotificaion = document.getElementById("vernotificacion").value;
            $.ajax({
                url: rutaWS + 'notificaciones.php?cmd=listarnotificaiones&id=' + idnotificaion + '&ver=' + vernotificaion,
                method: 'GET', //en este caso
                dataType: 'json',
                asycn: false,
                success: function (res) {
                    if(res['status'] == 'Ok'){                    
                        var datos = res['data'];
                        var listanoti = '';
                        for(var o = 0; o < datos.length; o++){
                            var fechaperu = datos[o].fecha;
                            var separar = fechaperu.split('-');
                            var checks = "";
                            var ver = "one";

                            if(datos[o].fecha != <?php echo '"' . date('Y-m-d') . '"';?>){
                                ver = 'old';
                            }

                            if(vernotificaion == 'one' || vernotificaion == 'old'){

                                

                                listanoti += '<li class="list-group-item" style="border: 1px solid transparent;">';
                                
                                if(datos[o].visto == 1){
                                    checks = "<label style='margin-right: 10px; color: #fff;'>&#10004;&#10004; Visto</label>";
                                    listanoti += '<a href="notificaciones.php?cmd=listarnotificaiones&idnotificacion='+datos[o].id+'&ver='+ver+'" style="background-color: #ccc;border-radius: 5px;color: #000;">';
                                    listanoti += '<i class="la la-bell" style="margin-right: 15px;font-size: 30px;line-height: 50px;"></i>';
                                }else{
                                    checks = "<label style='margin-right: 10px; color: #fff;'>&#10004;&#10004;</label>";
                                    listanoti += '<a href="notificaciones.php?cmd=listarnotificaiones&idnotificacion='+datos[o].id+'&ver='+ver+'" style="background-color: #ff646d;border-radius: 5px;color: #fff;">';
                                    listanoti += '<i class="la la-bell" style="margin-right: 15px;font-size: 30px;line-height: 50px;"></i>';
                                }
                                listanoti += datos[o].mensaje;
                                listanoti += '<br><small style="float: right;">'+checks + ' ' +separar[2] + '/' + separar[1] + '/' + separar[0]+' '+ datos[o].hora +'</small><br>';
                                listanoti += '</a>';
                                listanoti += '</li>';

                            }else if(vernotificaion == 'all' || vernotificaion == 'history'){
                                
                                listanoti += '<li class="list-group-item" style="border: 1px solid transparent;">';
                                
                                if(datos[o].visto == 1){
                                    checks = "<label style='margin-right: 10px; color: #fff;'>&#10004;&#10004; Visto</label>";
                                    listanoti += '<a href="notificaciones.php?cmd=listarnotificaiones&idnotificacion='+datos[o].id+'&ver='+ver+'" style="background-color: #ccc;border-radius: 5px;color: #000;">';
                                    listanoti += '<i class="la la-bell" style="margin-right: 15px;font-size: 30px;line-height: 50px;"></i>';
                                }else{
                                    checks = "<label style='margin-right: 10px; color: #fff;'>&#10004;&#10004;</label>";
                                    listanoti += '<a href="notificaciones.php?cmd=listarnotificaiones&idnotificacion='+datos[o].id+'&ver='+ver+'" style="background-color: #ff646d;border-radius: 5px;color: #fff;">';
                                    listanoti += '<i class="la la-bell" style="margin-right: 15px;font-size: 30px;line-height: 50px;"></i>';
                                }
                                listanoti += datos[o].mensaje;
                                listanoti += '<br><small style="float: right;">'+checks + ' ' +separar[2] + '/' + separar[1] + '/' + separar[0]+' '+ datos[o].hora +'</small><br>';
                                listanoti += '</a>';
                                listanoti += '</li>'; 
                            }
                        }
                        document.getElementById("myUL").innerHTML = listanoti;
                    }

                },
            });
        }

        </script>


        
</html>