$(document).ready(function () {
    $('#select-empleados-g').typeahead({
        source: function (query, result) {
            $.ajax({
                url: rutaWS + "buscar-empleado.php",
                data: 'cmd=buscar-empleado&query=' + query,
                dataType: "json",
                type: "POST",
                success: function (data) {
                    result($.map(data, function (item) {
                        return item;
                    }));
                }
            });
        }
    });
});
