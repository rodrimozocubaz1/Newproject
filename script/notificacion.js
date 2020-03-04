//ruta sirve para el consumo del webservice
var rutaWS = location.protocol + '//' + location.hostname + (location.port ? ':' + location.port : '') + '/webservice/web/';
function notificaciones(){
    $.ajax({
     url: rutaWS + 'notificaciones.php?cmd=navbarnoti',
     method: 'GET', //en este caso
     dataType: 'json',
     asycn: false,
     success: function(data){
         // Perform operation on the return value

         if(data['status'] == 'Ok'){
            var datos = data['data'];

            if(datos.length >= 1){
                document.getElementById("total_noti_visto").innerHTML = '<span class="notification">'+datos.length+'</span>';

                var listanotificaciones = '<li><div class="dropdown-title" id="cuantas_notificaciones">Tienes '+datos.length+' Notificaciones</div></li>';
                listanotificaciones += '<li>';
                listanotificaciones += '<div class="notif-center">';
                for (var i = 0; i < datos.length; i++) {
                    var fechaperu = datos[i].fecha;
                    var separar = fechaperu.split('-');
                    
                    listanotificaciones += '<a href="notificaciones.php?cmd=listarnotificaiones&ver=one&idnotificacion='+datos[i].id+'">';
                    listanotificaciones += '<div class="notif-icon notif-danger"> <i class="la la-bell"></i> </div>';
                    listanotificaciones += '<div class="notif-content">';
                    listanotificaciones += '<span class="block">';
                    listanotificaciones += datos[i].mensaje;
                    listanotificaciones += '</span>';
                    listanotificaciones += '<span class="time">' + separar[2] + '/' + separar[1] + '/' + separar[0]  +' ' + datos[i].hora + '</span>';
                    listanotificaciones += '</div>';
                    listanotificaciones += '</a>';
                }
                listanotificaciones += '</div>';
                listanotificaciones += '</li>';
                listanotificaciones += ' <li><a class="see-all" href="notificaciones.php?cmd=listarnotificaiones&idnotificacion=0&ver=all"> <center>Ver notificaciones actuales</center> <i class="la la-angle-right"></i> </a></li>'

                document.getElementById("listadodenotificaciones").innerHTML = listanotificaciones;
            }else{
                document.getElementById("total_noti_visto").innerHTML = '';
                document.getElementById("listadodenotificaciones").innerHTML = '';
            }
            // console.log(datos);
        }else{
            document.getElementById("total_noti_visto").innerHTML = '';
            document.getElementById("listadodenotificaciones").innerHTML = '<li><div class="dropdown-title" id="cuantas_notificaciones">No tiene notificaciones</div></li>';
        }
     }
    });
}
   
$(document).ready(function(){
    setInterval(notificaciones,4000);
});

notificaciones();