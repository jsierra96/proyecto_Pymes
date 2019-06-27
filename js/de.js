$(document).ready(function(){
    $("#dialogo").dialog({
		autoOpen: false ,
		show: {
			effect: "puff", // probar fold, puff, scale, shake, slide
				duration: 1000
		},
		hide: {
			effect: "explode", //probar scale, bounce, clip, drop, explode
			duration: 1000
		},
		modal: true ,
		resizable: false
	});
    $('#enviar').click(function(){
        var formData = new FormData($("#guardar")[0]);
        var ruta = "../control/de.php";
        $.ajax({
            url: ruta,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(datos){
                if(datos.success){
                    window.location="inicio";
                }
            }
        });
    });
});