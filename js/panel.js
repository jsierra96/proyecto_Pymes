$(document).ready(function(){
    $("#accion").hide("slow");
    $("#accion2").hide("slow");
    var accion = true;
    var accion2 = true;
    var elementos = $("#panel ul li a");
    elementos.mouseenter(function(){
        $(this).css('color','#0984e3');
    });
    elementos.mouseout(function(){
        $(this).css('color','white');
    });
    $("#evento").click(function(){
        if(accion){
            $("#accion").show(1000);
            accion = false
        }else{
            $("#accion").hide("slow");
            accion = true;
        }
    });
    $("#evento2").click(function(){
        if(accion2){
            $("#accion2").show(1000);
            accion2 = false
        }else{
            $("#accion2").hide("slow");
            accion2 = true;
        }
    });
    $('#foto1').change(function(e) {
        foto = 1;
        $('#imagen').val('si');
        addImage(e, foto);
    });
    $('#foto2').change(function(e) {
        foto = 2;
        addImage(e, foto);
    });
});
var foto;
function addImage(e , img){
    foto = img;
    var file = e.target.files[0],
    imageType = /image.*/;
    var reader = new FileReader();
    reader.onload = fileOnload;

    reader.readAsDataURL(file);
}

function fileOnload(e) {
    var result=e.target.result;
    console.log(e.target.result)
    if(foto == 2)
        $('#img2').attr("src",result);
    if(foto == 1)
        $('#img1').attr("src",result);
}