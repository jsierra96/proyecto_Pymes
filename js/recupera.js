$(document).ready(function(){
    $("#dialogoR").dialog({
        autoOpen: false,
        width: 400,
        modal: true
    });
    $("#crear").click(function (e) {
        e.preventDefault();
        var formData = new FormData($("#guardar")[0]);
        $.ajax({
            url: 'libs/PHPmailer/email.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (datos) {
                if (datos.success) {
                    $("#mensaje").text(datos.respuesta);
                    $("#dialogoR").dialog({
                        buttons: {
                            'Continuar': function () {
                                window.location = "login";
                            }
                        }
                    });
                    $("#dialogoR").dialog('open');
                } else {
                    $("#mensaje").text(datos.respuesta);
                    $("#dialogoR").dialog('open');
                }
            }
        });
    });
});