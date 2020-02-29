function closeMSG() {
    document.getElementById("alertMSG").innerHTML = "";
}
$('#btnlogin').click(function () {
    var data = {user: $('#user').val(), pass: $('#pass').val()};
    $.ajax({
        url: rutaWS + 'login.php',
        data: data,
        method: 'POST', //en este caso
        dataType: 'json',
        success: function (res) {
            //codigo de exito
//                                                            var newmsg = "";

            if (res['status'] == 'Error') {
                alert(res["msg"]);
                window.location.href = "./login";
                //newmsg = '<div class="error_alert" id="alertMSG"><button type="button" class="close" data-dismiss="modal" onclick="closeMSG();">&times;</button>' + res["msg"] + '</div>';
                //$("#container_alert").html(newmsg);
            } else {

                window.location.href = "./dashboard";
            }
        },
        error: function (error) {
            //codigo error
        }
    });
});
