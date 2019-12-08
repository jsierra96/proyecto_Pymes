function btnNuevoRiesgo() {
    limpiarEstilosModalRegistro();
    $("#ModalNuevoRiesgo").modal();
}

function btnEditarRiesgo(data) {
    limpiarEstilosModalEdicion();
    $("#ModalEditarRiesgo").modal();
    json = {
        id: data
    }
    $.ajax({
        data: json,
        url: '../control/riesgos.php?option=idRiesgo&id='+data,
        type: 'post',
        dataType: 'json'
    }).then(function (data) {
        $('#txtIdE').val(data[0][0]);
        $('#txtActividadE').val(data[0][1]);
        $('#txtModoFalloE').val(data[0][2]);
        $('#txtEfectoE').val(data[0][3]);
        $('#txtSeveridadE').val(data[0][4]);
        $('#txtCausaE').val(data[0][5]);
        $('#txtOcurrenciaE').val(data[0][6]);
        $('#txtControlE').val(data[0][7]);
        $('#txtDetectaE').val(data[0][8]);
        $('#txtPrioritarioE').val(data[0][9]);
        $('#txtAccionesE').val(data[0][10]);
        $('#txtResponsableE').val(data[0][11]);
        $('#txtFechaE').val(data[0][12]);
        $('#txtAccionesTE').val(data[0][13]);
        $('#txtSeveridad1E').val(data[0][14]);
        $('#txtOcurrencia1E').val(data[0][15]);
        $('#txtDetectabE').val(data[0][16]);
        $('#txtPrioritario1E').val(data[0][17]);
        $('#txtIdEmpresaE').val(data[0][18]);
    });
}


function validarRiesgo() {

    if ($("#txtPrioritario1").val().length > 0) {
        $("#validarPrioritario1").attr("hidden", true);
        $("#txtPrioritario1").removeClass("is-invalid").addClass("is-valid");
    }

    if ($("#txtActividad").val().length == 0) {
        $("#validarActividad").removeAttr("hidden");
        $("#txtActividad").addClass("is-invalid");
        return false;
    } else {
        $("#validarActividad").attr("hidden", true);
        $("#txtActividad").removeClass("is-invalid").addClass("is-valid");
        if ($("#txtModoFallo").val().length == 0) {
            $("#validarModoFallo").removeAttr("hidden");
            $("#txtModoFallo").addClass("is-invalid");
            return false;
        } else {
            $("#validarModoFallo").attr("hidden", true);
            $("#txtModoFallo").removeClass("is-invalid").addClass("is-valid");
            if ($("#txtEfecto").val().length == 0) {
                $("#validarEfecto").removeAttr("hidden");
                $("#txtEfecto").addClass("is-invalid");
                return false;
            } else {
                $("#validarEfecto").attr("hidden", true);
                $("#txtEfecto").removeClass("is-invalid").addClass("is-valid");
                if ($("#txtSeveridad").val().length == 0) {
                    $("#validarSeveridad").removeAttr("hidden");
                    $("#txtSeveridad").addClass("is-invalid");
                    return false;
                } else {
                    $("#validarSeveridad").attr("hidden", true);
                    $("#txtSeveridad").removeClass("is-invalid").addClass("is-valid");
                    if ($("#txtCausa").val().length == 0) {
                        $("#validarCausa").removeAttr("hidden");
                        $("#txtCausa").addClass("is-invalid");
                        return false;
                    } else {
                        $("#validarCausa").attr("hidden", true);
                        $("#txtCausa").removeClass("is-invalid").addClass("is-valid");
                        if ($("#txtOcurrencia").val().length == 0) {
                            $("#validarOcurrencia").removeAttr("hidden");
                            $("#txtOcurrencia").addClass("is-invalid");
                            return false;
                        } else {
                            $("#validarOcurrencia").attr("hidden", true);
                            $("#txtOcurrencia").removeClass("is-invalid").addClass("is-valid");
                            if ($("#txtControl").val().length == 0) {
                                $("#validarControl").removeAttr("hidden");
                                $("#txtControl").addClass("is-invalid");
                                return false;
                            } else {
                                $("#validarControl").attr("hidden", true);
                                $("#txtControl").removeClass("is-invalid").addClass("is-valid");
                                if ($("#txtDetecta").val().length == 0) {
                                    $("#validarDetecta").removeAttr("hidden");
                                    $("#txtDetecta").addClass("is-invalid");
                                    return false;
                                } else {
                                    $("#validarDetecta").attr("hidden", true);
                                    $("#txtDetecta").removeClass("is-invalid").addClass("is-valid");
                                    if ($("#txtPrioritario").val().length == 0) {
                                        $("#validarPrioritario").removeAttr("hidden");
                                        $("#txtPrioritario").addClass("is-invalid");
                                        return false;
                                    } else {
                                        $("#validarPrioritario").attr("hidden", true);
                                        $("#txtPrioritario").removeClass("is-invalid").addClass("is-valid");
                                        if ($("#txtAcciones").val().length == 0) {
                                            $("#validarAcciones").removeAttr("hidden");
                                            $("#txtAcciones").addClass("is-invalid");
                                            return false;
                                        } else {
                                            $("#validarAcciones").attr("hidden", true);
                                            $("#txtAcciones").removeClass("is-invalid").addClass("is-valid");
                                            if ($("#txtResponsable").val().length == 0) {
                                                $("#validarResponsable").removeAttr("hidden");
                                                $("#txtResponsable").addClass("is-invalid");
                                                return false;
                                            } else {
                                                $("#validarResponsable").attr("hidden", true);
                                                $("#txtResponsable").removeClass("is-invalid").addClass("is-valid");
                                                if ($("#txtFecha").val().length == 0) {
                                                    $("#validarFecha").removeAttr("hidden");
                                                    $("#txtFecha").addClass("is-invalid");
                                                    return false;
                                                } else {
                                                    $("#validarFecha").attr("hidden", true);
                                                    $("#txtFecha").removeClass("is-invalid").addClass("is-valid");
                                                    if ($("#txtAccionesT").val().length == 0) {
                                                        $("#validarAccionesT").removeAttr("hidden");
                                                        $("#txtAccionesT").addClass("is-invalid");
                                                        return false;
                                                    } else {
                                                        $("#validarAccionesT").attr("hidden", true);
                                                        $("#txtAccionesT").removeClass("is-invalid").addClass("is-valid");
                                                        if ($("#txtPrioritario1").val().length == 0) {
                                                            $("#validarPrioritario1").removeAttr("hidden");
                                                            $("#txtPrioritario1").addClass("is-invalid");
                                                            return false;
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }

                }
            }
        }
    }
}

function validarEdicionRiesgo() {

    if ($("#txtPrioritario1E").val().length > 0) {
        $("#validarPrioritario1E").attr("hidden", true);
        $("#txtPrioritario1E").removeClass("is-invalid").addClass("is-valid");
    }

    if ($("#txtActividadE").val().length == 0) {
        $("#validarActividadE").removeAttr("hidden");
        $("#txtActividadE").addClass("is-invalid");
        return false;
    } else {
        $("#validarActividadE").attr("hidden", true);
        $("#txtActividadE").removeClass("is-invalid").addClass("is-valid");
        if ($("#txtModoFalloE").val().length == 0) {
            $("#validarModoFalloE").removeAttr("hidden");
            $("#txtModoFalloE").addClass("is-invalid");
            return false;
        } else {
            $("#validarModoFalloE").attr("hidden", true);
            $("#txtModoFalloE").removeClass("is-invalid").addClass("is-valid");
            if ($("#txtEfectoE").val().length == 0) {
                $("#validarEfectoE").removeAttr("hidden");
                $("#txtEfectoE").addClass("is-invalid");
                return false;
            } else {
                $("#validarEfectoE").attr("hidden", true);
                $("#txtEfectoE").removeClass("is-invalid").addClass("is-valid");
                if ($("#txtSeveridadE").val().length == 0) {
                    $("#validarSeveridadE").removeAttr("hidden");
                    $("#txtSeveridadE").addClass("is-invalid");
                    return false;
                } else {
                    $("#validarSeveridadE").attr("hidden", true);
                    $("#txtSeveridadE").removeClass("is-invalid").addClass("is-valid");
                    if ($("#txtCausaE").val().length == 0) {
                        $("#validarCausaE").removeAttr("hidden");
                        $("#txtCausaE").addClass("is-invalid");
                        return false;
                    } else {
                        $("#validarCausaE").attr("hidden", true);
                        $("#txtCausaE").removeClass("is-invalid").addClass("is-valid");
                        if ($("#txtOcurrenciaE").val().length == 0) {
                            $("#validarOcurrenciaE").removeAttr("hidden");
                            $("#txtOcurrenciaE").addClass("is-invalid");
                            return false;
                        } else {
                            $("#validarOcurrenciaE").attr("hidden", true);
                            $("#txtOcurrenciaE").removeClass("is-invalid").addClass("is-valid");
                            if ($("#txtControlE").val().length == 0) {
                                $("#validarControlE").removeAttr("hidden");
                                $("#txtControlE").addClass("is-invalid");
                                return false;
                            } else {
                                $("#validarControlE").attr("hidden", true);
                                $("#txtControlE").removeClass("is-invalid").addClass("is-valid");
                                if ($("#txtDetectaE").val().length == 0) {
                                    $("#validarDetectaE").removeAttr("hidden");
                                    $("#txtDetectaE").addClass("is-invalid");
                                    return false;
                                } else {
                                    $("#validarDetectaE").attr("hidden", true);
                                    $("#txtDetectaE").removeClass("is-invalid").addClass("is-valid");
                                    if ($("#txtPrioritarioE").val().length == 0) {
                                        $("#validarPrioritarioE").removeAttr("hidden");
                                        $("#txtPrioritarioE").addClass("is-invalid");
                                        return false;
                                    } else {
                                        $("#validarPrioritarioE").attr("hidden", true);
                                        $("#txtPrioritarioE").removeClass("is-invalid").addClass("is-valid");
                                        if ($("#txtAccionesE").val().length == 0) {
                                            $("#validarAccionesE").removeAttr("hidden");
                                            $("#txtAccionesE").addClass("is-invalid");
                                            return false;
                                        } else {
                                            $("#validarAccionesE").attr("hidden", true);
                                            $("#txtAccionesE").removeClass("is-invalid").addClass("is-valid");
                                            if ($("#txtResponsableE").val().length == 0) {
                                                $("#validarResponsableE").removeAttr("hidden");
                                                $("#txtResponsableE").addClass("is-invalid");
                                                return false;
                                            } else {
                                                $("#validarResponsableE").attr("hidden", true);
                                                $("#txtResponsableE").removeClass("is-invalid").addClass("is-valid");
                                                if ($("#txtFechaE").val().length == 0) {
                                                    $("#validarFechaE").removeAttr("hidden");
                                                    $("#txtFechaE").addClass("is-invalid");
                                                    return false;
                                                } else {
                                                    $("#validarFechaE").attr("hidden", true);
                                                    $("#txtFechaE").removeClass("is-invalid").addClass("is-valid");
                                                    if ($("#txtAccionesTE").val().length == 0) {
                                                        $("#validarAccionesTE").removeAttr("hidden");
                                                        $("#txtAccionesTE").addClass("is-invalid");
                                                        return false;
                                                    } else {
                                                        $("#validarAccionesTE").attr("hidden", true);
                                                        $("#txtAccionesTE").removeClass("is-invalid").addClass("is-valid");
                                                        if ($("#txtPrioritario1E").val().length == 0) {
                                                            $("#validarPrioritario1E").removeAttr("hidden");
                                                            $("#txtPrioritario1E").addClass("is-invalid");
                                                            return false;
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }

                }
            }
        }
    }
}



$('#btnGuardarRiesgo').click(function () {
    if (validarRiesgo() != false) {
        var valor1 = document.getElementById('txtActividad').value;
        var valor2 = document.getElementById('txtModoFallo').value;
        var valor3 = document.getElementById('txtEfecto').value;
        var valor4 = document.getElementById('txtSeveridad').value;
        var valor5 = document.getElementById('txtCausa').value;
        var valor6 = document.getElementById('txtOcurrencia').value;
        var valor7 = document.getElementById('txtControl').value;
        var valor8 = document.getElementById('txtDetecta').value;
        var valor9 = document.getElementById('txtPrioritario').value;
        var valor10 = document.getElementById('txtAcciones').value;
        var valor11 = document.getElementById('txtResponsable').value;
        var valor12 = document.getElementById('txtFecha').value;
        var valor13 = document.getElementById('txtAccionesT').value;
        var valor14 = document.getElementById('txtSeveridad1').value;
        var valor15 = document.getElementById('txtOcurrencia1').value;
        var valor16 = document.getElementById('txtDetectab').value;
        var valor17 = document.getElementById('txtPrioritario1').value;



        json = {
            "valor1": valor1,
            "valor2": valor2,
            "valor3": valor3,
            "valor4": valor4,
            "valor5": valor5,
            "valor6": valor6,
            "valor7": valor7,
            "valor8": valor8,
            "valor9": valor9,
            "valor10": valor10,
            "valor11": valor11,
            "valor12": valor12,
            "valor13": valor13,
            "valor14": valor14,
            "valor15": valor15,
            "valor16": valor16,
            "valor17": valor17
        }
        $.ajax({
            data: json,
            url: '../control/riesgos.php?option=insert',
            type: 'post',
            dataType: 'json'
        }).then(function (data) {
            if (data.accion == "valido") {
                window.location = "riesgos";
            }
        });
    }
});


$('#btnEditarDatos').click(function () {
    if (validarEdicionRiesgo() != false) {
        var idriesgo = document.getElementById('txtIdE').value;
        var valor1 = document.getElementById('txtActividadE').value;
        var valor2 = document.getElementById('txtModoFalloE').value;
        var valor3 = document.getElementById('txtEfectoE').value;
        var valor4 = document.getElementById('txtSeveridadE').value;
        var valor5 = document.getElementById('txtCausaE').value;
        var valor6 = document.getElementById('txtOcurrenciaE').value;
        var valor7 = document.getElementById('txtControlE').value;
        var valor8 = document.getElementById('txtDetectaE').value;
        var valor9 = document.getElementById('txtPrioritarioE').value;
        var valor10 = document.getElementById('txtAccionesE').value;
        var valor11 = document.getElementById('txtResponsableE').value;
        var valor12 = document.getElementById('txtFechaE').value;
        var valor13 = document.getElementById('txtAccionesTE').value;
        var valor14 = document.getElementById('txtSeveridad1E').value;
        var valor15 = document.getElementById('txtOcurrencia1E').value;
        var valor16 = document.getElementById('txtDetectabE').value;
        var valor17 = document.getElementById('txtPrioritario1E').value;

        json = {
            "idriesgo": idriesgo,
            "valor1": valor1,
            "valor2": valor2,
            "valor3": valor3,
            "valor4": valor4,
            "valor5": valor5,
            "valor6": valor6,
            "valor7": valor7,
            "valor8": valor8,
            "valor9": valor9,
            "valor10": valor10,
            "valor11": valor11,
            "valor12": valor12,
            "valor13": valor13,
            "valor14": valor14,
            "valor15": valor15,
            "valor16": valor16,
            "valor17": valor17
        }
        $.ajax({
            data: json,
            url: '../control/riesgos.php?option=update',
            type: 'post',
            dataType: 'json'
        }).then(function (data) {
            if (data.accion == "valido") {
                window.location = "riesgos";
            }
        });
    }

});


function eliminar(data) {
    json = {
        id: data
    }
    $.ajax({
        data: json,
        url: '../control/riesgos.php?option=delete',
        type: 'post',
        success: function (response) {
            window.location = "riesgos";
        }
    });
}


// datepicker para el modal de registro de riesgos
$('#txtFecha').datepicker({
    format: "dd-mm-yyyy",
    language: "es",
    orientation: "bottom auto",
    autoclose: true
});

// datepicker para el modal de edicion de riesgos
$('#txtFechaE').datepicker({
    format: "dd-mm-yyyy",
    language: "es",
    orientation: "bottom auto",
    autoclose: true
});


//funcion para teclar solo numeros
function soloNumeros(e) {
    var key = window.Event ? e.which : e.keyCode;
    return ((key >= 48 && key <= 57) || (key == 46)); //8
}

function limpiarEstilosModalEdicion() {
    $("#validarActividadE").attr("hidden", true);
    $("#txtActividadE").removeClass("is-invalid is-valid");
    $("#validarModoFalloE").attr("hidden", true);
    $("#txtModoFalloE").removeClass("is-invalid is-valid");
    $("#validarEfectoE").attr("hidden", true);
    $("#txtEfectoE").removeClass("is-invalid is-valid");
    $("#validarSeveridadE").attr("hidden", true);
    $("#txtSeveridadE").removeClass("is-invalid is-valid");
    $("#validarCausaE").attr("hidden", true);
    $("#txtCausaE").removeClass("is-invalid is-valid");
    $("#validarOcurrenciaE").attr("hidden", true);
    $("#txtOcurrenciaE").removeClass("is-invalid is-valid");
    $("#validarControlE").attr("hidden", true);
    $("#txtControlE").removeClass("is-invalid is-valid");
    $("#validarDetectaE").attr("hidden", true);
    $("#txtDetectaE").removeClass("is-invalid is-valid");
    $("#validarPrioritarioE").attr("hidden", true);
    $("#txtPrioritarioE").removeClass("is-invalid is-valid");
    $("#validarAccionesE").attr("hidden", true);
    $("#txtAccionesE").removeClass("is-invalid is-valid");
    $("#validarResponsableE").attr("hidden", true);
    $("#txtResponsableE").removeClass("is-invalid is-valid");
    $("#validarFechaE").attr("hidden", true);
    $("#txtFechaE").removeClass("is-invalid is-valid");
    $("#validarAccionesTE").attr("hidden", true);
    $("#txtAccionesTE").removeClass("is-invalid is-valid");
    $("#validarPrioritario1E").attr("hidden", true);
    $("#txtPrioritario1E").removeClass("is-invalid is-valid");
}

function limpiarEstilosModalRegistro() {
    $("#validarActividad").attr("hidden", true);
    $("#txtActividad").removeClass("is-invalid is-valid");
    $("#txtActividad").val("");
    $("#validarModoFallo").attr("hidden", true);
    $("#txtModoFallo").removeClass("is-invalid is-valid");
    $("#txtModoFallo").val("");
    $("#validarEfecto").attr("hidden", true);
    $("#txtEfecto").removeClass("is-invalid is-valid");
    $("#txtEfecto").val("");
    $("#validarSeveridad").attr("hidden", true);
    $("#txtSeveridad").removeClass("is-invalid is-valid");
    $("#txtSeveridad").val("");
    $("#validarCausa").attr("hidden", true);
    $("#txtCausa").removeClass("is-invalid is-valid");
    $("#txtCausa").val("");
    $("#validarOcurrencia").attr("hidden", true);
    $("#txtOcurrencia").removeClass("is-invalid is-valid");
    $("#txtOcurrencia").val("");
    $("#validarControl").attr("hidden", true);
    $("#txtControl").removeClass("is-invalid is-valid");
    $("#txtControl").val("");
    $("#validarDetecta").attr("hidden", true);
    $("#txtDetecta").removeClass("is-invalid is-valid");
    $("#txtDetecta").val("");
    $("#validarPrioritario").attr("hidden", true);
    $("#txtPrioritario").removeClass("is-invalid is-valid");
    $("#txtPrioritario").val("");
    $("#validarAcciones").attr("hidden", true);
    $("#txtAcciones").removeClass("is-invalid is-valid");
    $("#txtAcciones").val("");
    $("#validarResponsable").attr("hidden", true);
    $("#txtResponsable").removeClass("is-invalid is-valid");
    $("#txtResponsable").val("");
    $("#validarFecha").attr("hidden", true);
    $("#txtFecha").removeClass("is-invalid is-valid");
    $("#txtFecha").val("");
    $("#validarAccionesT").attr("hidden", true);
    $("#txtAccionesT").removeClass("is-invalid is-valid");
    $("#txtAccionesT").val("");
    $("#validarPrioritario1").attr("hidden", true);
    $("#txtPrioritario1").removeClass("is-invalid is-valid");
    $("#txtPrioritario1").val("");
}