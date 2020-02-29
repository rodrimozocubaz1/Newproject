function cerrarsession() {
    $(document).ready(function () {
        $.ajax({
            url: rutaWS + 'cerrarsesion.php',
            method: 'GET', //en este caso
            dataType: 'html',
            asycn: false,
            success: function () {
                window.location.href = "./login";
            },
        });
    });
}