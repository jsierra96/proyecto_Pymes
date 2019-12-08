$(document).ready(function(){
    $("#dialogo1").dialog({
        autoOpen: false,
        width: 400,
        modal: true
    });
    $("#dialogo2").dialog({
        autoOpen: false,
        width: 400,
        modal: true
    });

    /*$("#oManual").on('submit', function (evt) {
        var formData = new FormData($("#oManual")[0]);
        
        $.ajax({
            url: '../control/guardaOp.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (datos) {
                console.log(dataString);
                if (datos.success) {
                    $("#dialogo1").dialog('open');
                } else {
                    $("#dialogo2").dialog('open');
                }
            }
        });
        evt.preventDefault();
    });*/

    /*$("#enviar").click(function(){
        var m = $("#opcion").val(),
            dataString = 'apartado=' + m + '&campo1=' + $("#campo1").val() + '&campo2=' + $("#campo2").val() + '&campo3=' + $("#campo3").val();
        if(m == 4){
            dataString = dataString + '&campo4=' + $("#campo4").val() + '&campo5=' + $("#campo5").val();
        }else if(m == 5)
            dataString = dataString + '&campo4=' + $("#campo4").val() + '&campo5=' + $("#campo5").val();
        else if (m == 7)
            dataString = dataString + '&campo4=' + $("#campo4").val() + '&campo5=' + $("#campo5").val() + '&campo6=' + $("#campo6").val() + '&campo7=' + $("#campo7").val() + '&campo8=' + $("#campo8").val() + '&campo9=' + $("#campo9").val() + '&campo10=' + $("#campo10").val() + '&campo11=' + $("#campo11").val() + '&campo12=' + $("#campo12").val();
        else if (m == 8)
            dataString = dataString + '&campo4=' + $("#campo4").val() + '&campo5=' + $("#campo5").val() + '&campo6=' + $("#campo6").val() + '&campo7=' + $("#campo7").val() + '&campo8=' + $("#campo8").val() + '&campo9=' + $("#campo9").val() + '&campo10=' + $("#campo10").val() + '&campo11=' + $("#campo11").val() + '&campo12=' + $("#campo12").val() + '&campo13=' + $("#campo13").val() + '&campo14=' + $("#campo14").val() + '&campo15=' + $("#campo15").val() + '&campo16=' + $("#campo16").val() + '&campo17=' + $("#campo17").val() + '&campo18=' + $("#campo18").val() + '&campo19=' + $("#campo19").val() + '&campo20=' + $("#campo20").val() + '&campo21=' + $("#campo21").val() + '&campo22=' + $("#campo22").val();
        else if (m == 9)
            dataString = dataString + '&campo4=' + $("#campo4").val() + '&campo5=' + $("#campo5").val() + '&campo6=' + $("#campo6").val() + '&campo7=' + $("#campo7").val();

        $.get({
            url: '../control/guardaOp.php',
            type: 'GET',
            data: dataString,
            dataType: 'html',
            success: function (datos) {
                console.log(dataString);
                if (datos.success) {
                    $("#dialogo1").dialog('open');
                } else {
                    $("#dialogo2").dialog('open');
                }
            }
        });
    });*/
});