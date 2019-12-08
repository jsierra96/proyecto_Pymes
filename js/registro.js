$(document).ready(function(){
    $("#sFecha").datepicker();
    $("#sAdmin").click(function(){
        $("#clave").css('display', 'none').prop('disabled', true);
    });
    $("#sEmple").click(function(){
        $("#clave").css('display', 'flex').prop('disabled', false);
    });

    $("#dialogo").dialog({
      autoOpen: false,
      width:400,
      modal: true
      });

    $("#crear").click(function(e){
        e.preventDefault();
        var formData = new FormData($("#guardar")[0]);
        $.ajax({
          url: 'control/registrar.php',
          type : 'POST',
          data: formData,
          contentType: false,
          processData: false,
          success: function(datos){
              if(datos.success){
                $("#mensaje").text(datos.respuesta);
                $("#dialogo").dialog({
                  buttons: {
                    'Continuar': function() {
                      window.location="panel/de";
                    }
                  }
                });
                $("#dialogo").dialog('open');
              }else{
                $("#mensaje").text(datos.respuesta);
                $("#dialogo").dialog('open');                
              }
          }
        });
    });
});