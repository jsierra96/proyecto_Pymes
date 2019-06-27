$(document).ready(function(){
    $("#enviar").click(function(){
        var m = $("#opcion").val(),
            dataString = '';
        if(m == 4){
            dataString = 'campo1=' + $("#campo1").val() + '&campo2=' + $("#campo2").val() + '&campo3=' + $("#campo3").val() + '&campo4=' + $("#campo4").val() + '&campo5=' + $("#campo5").val();
        }
        $.ajax({
            url: '../control/guardaOp.php',
            type: 'POST',
            data: dataString,
            success: function (datos) {
            }
        });
    });
});