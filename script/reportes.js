function reporte() {
    var idempleado = document.getElementById("select-empleados-a");
    var fechadesde = document.getElementById("fechadesde-a");
    var fechahasta = document.getElementById("fechahasta-a");

    if (idempleado.value != "" && fechadesde.value != "" && fechahasta.value != "") {
        //alert(rutaWS + "calculos/reporte.php?nieto=" + idempleado.value + "&fecha1=" + fechadesde.value + "&fecha2=" + fechahasta.value;);
        window.location.href = rutaWS + "calculos/reporte.php?cmd=reporte&nieto=" + idempleado.value + "&fecha1=" + fechadesde.value + "&fecha2=" + fechahasta.value;
    } else {
        document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-bell"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">Uno de los campos están vacios.</span><a href="#" target="_blank" data-notify="url"></a></div>';
    }
}
function reporteidoneo() {
    var idempleado = document.getElementById("select-empleados-a");
    var fechadesde = document.getElementById("fechadesde-a");
    var fechahasta = document.getElementById("fechahasta-a");

    if (idempleado.value != "" && fechadesde.value != "" && fechahasta.value != "") {
        //alert(rutaWS + "calculos/reporte.php?nieto=" + idempleado.value + "&fecha1=" + fechadesde.value + "&fecha2=" + fechahasta.value;);
        window.location.href = rutaWS + "calculos/reporte.php?cmd=reporteidoneo&nieto=" + idempleado.value + "&fecha1=" + fechadesde.value + "&fecha2=" + fechahasta.value;
    } else {
        document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-bell"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">Uno de los campos están vacios.</span><a href="#" target="_blank" data-notify="url"></a></div>';
    }

}
function horario() {
    var horario = document.getElementById("idhorario");
    var idempleado = document.getElementById("idempleadohidden");
    var fechadesde = document.getElementById("txthoraentrada");
    var fechahasta = document.getElementById("txthorasalida");
    var id1 = document.getElementById("1").checked;
    var id2 = document.getElementById("2").checked;
    var id3 = document.getElementById("3").checked;
    var id4 = document.getElementById("4").checked;
    var id5 = document.getElementById("5").checked;
    var id6 = document.getElementById("6").checked;
    if(id1 == true){
        id1 = 1;
    }else{
        id1 = 0;
    }
    if(id2 == true){
        id2 = 2;
    }else{
        id2 = 0;
    }
    if(id3 == true){
        id3 = 3;
    }else{
        id3 = 0;
    }
    if(id4 == true){
        id4 = 4;
    }else{
        id4 = 0;
    }
    if(id5 == true){
        id5 = 5;
    }else{
        id5 = 0;
    }
    if(id6 == true){
        id6 = 6;
    }else{
        id6 = 0;
    }
    
    if (idempleado.value != "" && fechadesde.value != "" && fechahasta.value != "") {
        //alert(rutaWS + "calculos/reporte.php?nieto=" + idempleado.value + "&fecha1=" + fechadesde.value + "&fecha2=" + fechahasta.value;);
        window.location.href = rutaWS + "procesar_horario.php?cmd=reporteidoneo&nieto=" + idempleado.value + "&fecha1=" + fechadesde.value + "&fecha2=" + fechahasta.value + "&c1=" + id1 + "&c2=" + id2 + "&c3=" + id3
        + "&c4=" + id4+ "&c5=" + id5 + "&c6=" + id6 + "&horario=" + horario.value;
    } else {
        document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-bell"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">Uno de los campos están vacios.</span><a href="#" target="_blank" data-notify="url"></a></div>';
    }

}
function horario() {
    var horario = document.getElementById("idhorario");
    var idempleado = document.getElementById("idempleadohidden");
    var fechadesde = document.getElementById("txthoraentrada");
    var fechahasta = document.getElementById("txthorasalida");
    var id1 = document.getElementById("1").checked;
    var id2 = document.getElementById("2").checked;
    var id3 = document.getElementById("3").checked;
    var id4 = document.getElementById("4").checked;
    var id5 = document.getElementById("5").checked;
    var id6 = document.getElementById("6").checked;
    if(id1 == true){
        id1 = 1;
    }else{
        id1 = 0;
    }
    if(id2 == true){
        id2 = 2;
    }else{
        id2 = 0;
    }
    if(id3 == true){
        id3 = 3;
    }else{
        id3 = 0;
    }
    if(id4 == true){
        id4 = 4;
    }else{
        id4 = 0;
    }
    if(id5 == true){
        id5 = 5;
    }else{
        id5 = 0;
    }
    if(id6 == true){
        id6 = 6;
    }else{
        id6 = 0;
    }
    
    if (idempleado.value != "" && fechadesde.value != "" && fechahasta.value != "") {
        //alert(rutaWS + "calculos/reporte.php?nieto=" + idempleado.value + "&fecha1=" + fechadesde.value + "&fecha2=" + fechahasta.value;);
        window.location.href = rutaWS + "procesar_horario.php?cmd=reporteidoneo&nieto=" + idempleado.value + "&fecha1=" + fechadesde.value + "&fecha2=" + fechahasta.value + "&c1=" + id1 + "&c2=" + id2 + "&c3=" + id3
        + "&c4=" + id4+ "&c5=" + id5 + "&c6=" + id6 + "&horario=" + horario.value;
    } else {
        document.getElementById("container_alert").innerHTML = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger animated fadeInDown" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 20px; right: 20px;"><button onclick="cerraralert();" type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 5px; z-index: 1033;">×</button><span data-notify="icon" class="la la-bell"></span> <span data-notify="title">Mensaje :</span> <span data-notify="message">Uno de los campos están vacios.</span><a href="#" target="_blank" data-notify="url"></a></div>';
    }

}

function nuevoempleado() {
    var horario = document.getElementById("idhorario").value;
    var DNI = document.getElementById("DNIempleado").value;
    var nombreempleado = document.getElementById("txtbuscarempleado").value;
    var local = document.getElementById("select-locales-a");
    var departamento = document.getElementById("select-departamentos-a").value;
    var fechadesde = document.getElementById("txthoraentrada");
    var fechahasta = document.getElementById("txthorasalida");
    var id1 = document.getElementById("1").checked;
    var id2 = document.getElementById("2").checked;
    var id3 = document.getElementById("3").checked;
    var id4 = document.getElementById("4").checked;
    var id5 = document.getElementById("5").checked;
    var id6 = document.getElementById("6").checked;
    console.log(departamento);
    console.log(horario);
    console.log(nombreempleado);
    console.log(DNI);
    if(id1 == true){
        id1 = 1;
    }else{
        id1 = 0;
    }
    if(id2 == true){
        id2 = 2;
    }else{
        id2 = 0;
    }
    if(id3 == true){
        id3 = 3;
    }else{
        id3 = 0;
    }
    if(id4 == true){
        id4 = 4;
    }else{
        id4 = 0;
    }
    if(id5 == true){
        id5 = 5;
    }else{
        id5 = 0;
    }
    if(id6 == true){
        id6 = 6;
    }else{
        id6 = 0;
    }
    
    

}