$(document).ready(function() {
    $("#dialogo").dialog({
        autoOpen: false,
        width: 400,
        modal: true
    });

    $("#enviar").click(function(){
        var e = $("#email").val(),
            p1 = $("#pass1").val(),
            p2 = $("#pass2").val(),
            p3 = $("#pass3").val();
            if(p1 == "" && p2=="" && p3==""){
                $("#mensaje").text("Hay un camo vacio.");
                $("#dialogo").dialog({
                    title: "Error"
                });
                $("#dialogo").dialog('open');
            }else{
                $.ajax({
                    url: '../control/cc.php',
                    type: 'POST',
                    data: {
                        email: e,
                        passA: p1,
                        passN: p2,
                        passR: p3
                    },
                    success: function (datos) {
                        if (datos.success) {
                            $("#mensaje").text(datos.respuesta);
                            $("#dialogo").dialog({
                                title: "Operacion Exitosa",
                                buttons: {
                                    'Continuar': function () {
                                        window.location = "inicio";
                                    }
                                }
                            });
                            $("#dialogo").dialog('open');
                        } else {
                            $("#dialogo").dialog({
                                title: "Operacion fallida :("
                            });
                            $("#mensaje").text(datos.respuesta);
                            $("#dialogo").dialog('open');
                        }
                    }
                });
            }
    });
});