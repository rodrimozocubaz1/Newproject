function calcular(idbtn) {

    var idempl = "";
    var fecha1 = "";
    var fecha2 = "";

    if (idbtn == 'btncalculargeneral') {
        idempl = document.getElementById("select-empleados-g").value;
        fecha1 = document.getElementById("fechadesde-g").value;
        fecha2 = document.getElementById("fechahasta-g").value;
    } else if (idbtn == 'btncalcularavanzada') {
        idempl = document.getElementById("select-empleados-a").value;
        fecha1 = document.getElementById("fechadesde-a").value;
        fecha2 = document.getElementById("fechahasta-a").value;
    }

    if (idempl != "" && fecha1 != "" && fecha2 != "") {
        $.ajax({
            url: rutaWS + 'calculos/procesar3.php?idnieto=' + idempl + "&fecha1=" + fecha1 + "&fecha2=" + fecha2,
            method: 'GET', //en este caso
            dataType: 'html',
            asycn: false,
            beforeSend: function () {
                document.getElementById("container_alert").innerHTML = '<div class="ok_alert">Espere un mommento &nbsp;&nbsp;<img src="img/loading.gif" width="25" height="18"/></div>';

            },
            success: function (res) {
                document.getElementById("container_alert").innerHTML = '<div class="ok_alert">' + res + ' <span onclick="cerraralert();" style="float: right;cursor: pointer;">x</span></div>';
            },
        });
    } else {
        document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-bell"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">Uno de los campos están vacios.</span><a href="#" target="_blank" data-notify="url"></a></div>';
    }
}