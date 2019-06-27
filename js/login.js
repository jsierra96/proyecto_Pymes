    $(document).ready(function(){
        $("#error").css('display','none');
        $("#ingresa").click(function(){
            var pw = $("#sPassword").val(),
                user = $("#sNombre").val();
            var vUser = user.match(/^\S+@[a-zA-Z0-9.]+$/);
            if(pw=="" && user==""){
                $("#sNombre").css('border','solid 1px #C0392B');
                $("#sPassword").css('border','solid 1px #C0392B');
            }
            if(user!="" && vUser){
                $("#sNombre").css('border','1px solid #3498DB');
                if(pw!=""){
                    $("#sPassword").css('border','1px solid #3498DB');
                    $.ajax({
                        url: 'control/login.php',
                        data: {
                            usuario: user,
                            password: pw
                        },
                        type : 'POST',
                        dataType : 'json',
                        success : function(oDatos){
                            if(oDatos.success){
                                window.location="panel/inicio";
                            }else{
                                $("#error").css('display','block');
                                $("#error").text(oDatos.respuesta);
                            }
                        }
                    });
                }else{
                    $("#sPassword").css('border','solid 1px #C0392B');
                }
            }else{
                $("#error").css('display','block');
                $("#error").text('Usuario vacio o sin formato de correo');
                $("#sNombre").css('border','solid 1px #C0392B');
            }
        });
    });