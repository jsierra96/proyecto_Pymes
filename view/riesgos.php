<?php
    include 'model/listariesgos.php';
?>

<h2>Captura y edición de plantilla AMEF</h2>
<br>
<button class="btn btn-primary mb-4" onclick="btnNuevoRiesgo()"><i class="fas fa-plus"></i> Agregar Nuevo
    Riesgo</button>
<table class="table table-bordered table-hover table-responsive">
    <thead class="thead-dark">
        <tr>
            <th style="width: 50px;" scope="col" class="text-center">Id</th>
            <th style="min-width: 300px;" scope="col" class="text-center">Actividad</th>
            <th style="min-width: 300px;" scope="col" class="text-center">Modo de fallo</th>
            <th style="min-width: 250px" class="text-center" scope="col">Efecto de fallo</th>
            <th class="text-center" scope="col">Severidad</th>
            <th style="min-width: 250px" class="text-center" scope="col">Causa de Fallo</th>
            <th class="text-center" scope="col">Ocurrencia</th>
            <th style="min-width: 200px;" class="text-center" scope="col">Control</th>
            <th class="text-center" scope="col">Detectabilidad</th>
            <th style="min-width: 240px" class="text-center" scope="col">Num Prioritario de Riesgo</th>
            <th style="min-width: 350px" class="text-center" scope="col">Acciones recomendadas</th>
            <th style="min-width: 350px" class="text-center" scope="col">Responsable </th>
            <th style="min-width: 350px" class="text-center" scope="col">Fecha</th>
            <th style="min-width: 350px" class="text-center" scope="col">Acciones Tomadas</th>
            <th class="text-center" scope="col">Severidad</th>
            <th class="text-center" scope="col">Ocurrencia</th>
            <th class="text-center" scope="col">Detectabilidad</th>
            <th style="min-width: 350px" class="text-center" scope="col">Num Prioritario de riesgos</th>
            <th class="text-center" scope="col">Modificar</th>
            <th class="text-center" scope="col">Borrar</th>
        </tr>
    </thead>
    <tbody>

        <?php
            $eId = $id['eClave'];
            $object = new ListaRiesgos($eId);
            $object->listaRiesgos($eId);
        ?>
    </tbody>
</table>


<!---------------------------Modal para añadir riesgos------------------------------>
<div class="modal fade" id="ModalNuevoRiesgo" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 700px;">

            <div class="modal-header" style="background-color:#AED6F1; color:white">
                <h5 class="modal-title">Nuevo Riesgo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:white">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <label>Actividad:</label>
                        <input type="text" name="txtActividad" id="txtActividad" class="form-control" placeholder="Actividad que se realizara">
                        <span class="validar-form" id="validarActividad" hidden>Ingrese la Actividad</span>
                    </div>
                    <div class="col">
                        <label>Modo de Fallo:</label>
                        <input type="text" name="txtModoFallo" id="txtModoFallo" class="form-control" placeholder="Descripción del riesgo(Breve)">
                        <span class="validar-form" id="validarModoFallo" hidden>Ingrese el modo de fallo</span>
                    </div>

                    <div class="col">
                        <label>Efecto de Fallo:</label>
                        <input type="text" name="txtEfecto" id="txtEfecto" class="form-control" placeholder="Efecto causado por el riesgo">
                        <span class="validar-form" id="validarEfectoFallo" hidden>Ingrese el efecto de fallo</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label>Severidad: <i><small>(Numerico)</small></i> </label>
                        <input type="text" name="txtSeveridad" id="txtSeveridad" class="form-control" onKeyPress="return soloNumeros(event)"  placeholder="Escala en la tabla de Ponderacion">
                        <span class="validar-form" id="validarSeveridad" hidden>Ingrese la severidad</span>
                    </div>
                    <div class="col">
                        <label>Causa de Fallo:</label>
                        <input type="text" name="txtCausa" id="txtCausa" class="form-control" placeholder="Qué sucede al no prevenir el riesgo">
                        <span class="validar-form" id="validarCausa" hidden>Ingrese causa de fallo</span>
                    </div>

                    <div class="col">
                        <label>Ocurrencia: <i><small>(Numerico)</small></i> </label>
                        <input type="text" name="txtOcurrencia" id="txtOcurrencia" class="form-control" onKeyPress="return soloNumeros(event)"  placeholder="Escala en la tabla de Ponderacion">
                        <span class="validar-form" id="validarOcurrencia" hidden>Ingrese la Ocurrencia</span>
                    </div>
                </div>


                <div class="row">
                    <div class="col">
                        <label>Control:</label>
                        <input type="text" name="txtControl" id="txtControl" class="form-control" placeholder="preventivo o correctivo">
                        <span class="validar-form" id="validarControl" hidden>Ingrese el control</span>
                    </div>
                    <div class="col">
                        <label>Detectabilidad: <i><small>(Numerico)</small></i> </label>
                        <input type="text" name="txtDetecta" id="txtDetecta" class="form-control" onKeyPress="return soloNumeros(event)" placeholder="Escala en la tabla de Ponderacion">
                        <span class="validar-form" id="validarDetecta" hidden>Ingrese la detectabilidad</span>
                    </div>

                    <div class="col">
                        <label>Num Prioritario de Riesgo:</label>
                        <input type="text" name="txtPrioritario" id="txtPrioritario" class="form-control" onKeyPress="return soloNumeros(event)" placeholder="">
                        <span class="validar-form" id="validarPrioritario" hidden>Ingrese el num prioritario de riesgo</span>
                    </div>
                </div>


                <div class="row">
                    <div class="col">
                        <label>Acciones recomendadas:</label>
                        <input type="text" name="txtAcciones" id="txtAcciones" class="form-control" placeholder="Ideas para la precención">
                        <span class="validar-form" id="validarAcciones" hidden>Ingrese las acciones recomendadas</span>
                    </div>
                    <div class="col">
                        <label>Responsable:</label>
                        <input type="text" name="txtResponsable" id="txtResponsable" class="form-control" placeholder="">
                        <span class="validar-form" id="validarResponsable" hidden>Ingrese al responsable</span>
                    </div>

                    <div class="col">
                        <label>Fecha:</label>
                        <input type="text" name="txtFecha" id="txtFecha" class="form-control" readonly placeholder="click aqui">
                        <span class="validar-form" id="validarFecha" hidden>Ingrese una fecha</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label>Acciones Tomadas:</label>
                        <input type="text" name="txtAccionesT" id="txtAccionesT" class="form-control" placeholder="">
                        <span class="validar-form" id="validarAccionesT" hidden>Ingrese las acciones tomadas</span>
                    </div>
                    <div class="col">
                        <label>Severidad:</label><!-- aqui -->
                        <select class="custom-select" name="txtSeveridad1" id="txtSeveridad1">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>

                    <div class="col">
                        <label>Ocurrencia:</label>
                        <select class="custom-select" name="txtOcurrencia1" id="txtOcurrencia1">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>


                <div class="row">
                    <div class="col">
                        <label>Detectabilidad:</label>
                        <select class="custom-select" name="txtDetectab" id="txtDetectab">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="col">
                        <label>Num Prioritario de riesgos:</label>
                        <input type="text" name="txtPrioritario1" id="txtPrioritario1" class="form-control" onKeyPress="return soloNumeros(event)" placeholder="Actividad que se realizara">
                        <span class="validar-form" id="validarPrioritario1" hidden>Ingrese el num prioritario de riesgos</span>
                    </div>

                    <div class="col">
                        <input type="hidden" name="txtIdEmpresa" id="txtIdEmpresa" class="form-control">
                    </div>
                </div>

            </div>

            <div class="modal-footer dark" style="background-color:#AED6F1">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success" id="btnGuardarRiesgo">Aceptar</button>
            </div>
        </div>
    </div>
</div>

<!------------------------Fin Modal para añadir riesgos----------------------------->


<!---------------------------Modal para editar datos------------------------------>
<div class="modal fade" id="ModalEditarRiesgo" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 700px;">

            <div class="modal-header" style="background-color:#AED6F1; color:white">
                <h5 class="modal-title">Editar Datos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:white">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <input type="hidden" class="form-control" name="txtid">
                <div class="row">
                    <div class="col">
                        <label>Actividad:</label>
                        <input type="text" name="txtActividadE" id="txtActividadE" class="form-control" placeholder="Actividad que se realizara">
                        <span class="validar-form" id="validarActividadE" hidden>Ingrese la Actividad</span>
                    </div>
                    <div class="col">
                        <label>Modo de Fallo:</label>
                        <input type="text" name="txtModoFalloE" id="txtModoFalloE" class="form-control" placeholder="Descripción del riesgo(Breve)">
                        <span class="validar-form" id="validarModoFalloE" hidden>Ingrese el modo de fallo</span>
                    </div>

                    <div class="col">
                        <label>Efecto de Fallo:</label>
                        <input type="text" name="txtEfectoE" id="txtEfectoE" class="form-control" placeholder="Efecto causado por el riesgo">
                        <span class="validar-form" id="validarEfectoFalloE" hidden>Ingrese el efecto de fallo</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label>Severidad: <i><small>(Numerico)</small></i> </label>
                        <input type="text" name="txtSeveridadE" id="txtSeveridadE" class="form-control" onKeyPress="return soloNumeros(event)" placeholder="Escala en la tabla de Ponderacion">
                        <span class="validar-form" id="validarSeveridadE" hidden>Ingrese la severidad</span>
                    </div>
                    <div class="col">
                        <label>Causa de Fallo:</label>
                        <input type="text" name="txtCausaE" id="txtCausaE" class="form-control" placeholder="Qué sucede al no prevenir el riesgo">
                        <span class="validar-form" id="validarCausaE" hidden>Ingrese causa de fallo</span>
                    </div>

                    <div class="col">
                        <label>Ocurrencia: <i><small>(Numerico)</small></i> </label>
                        <input type="text" name="txtOcurrenciaE" id="txtOcurrenciaE" class="form-control" onKeyPress="return soloNumeros(event)" placeholder="Escala en la tabla de Ponderacion">
                        <span class="validar-form" id="validarOcurrenciaE" hidden>Ingrese la Ocurrencia</span>
                    </div>
                </div>


                <div class="row">
                    <div class="col">
                        <label>Control:</label>
                        <input type="text" name="txtControlE" id="txtControlE" class="form-control" placeholder="preventivo o correctivo">
                        <span class="validar-form" id="validarControlE" hidden>Ingrese el control</span>
                    </div>
                    <div class="col">
                        <label>Detectabilidad: <i><small>(Numerico)</small></i> </label>
                        <input type="text" name="txtDetectaE" id="txtDetectaE" class="form-control" onKeyPress="return soloNumeros(event)" placeholder="Escala en la tabla de Ponderacion">
                        <span class="validar-form" id="validarDetectaE" hidden>Ingrese la detectabilidad</span>
                    </div>

                    <div class="col">
                        <label>Num Prioritario de Riesgo:</label>
                        <input type="text" name="txtPrioritarioE" id="txtPrioritarioE" class="form-control" onKeyPress="return soloNumeros(event)" placeholder="">
                        <span class="validar-form" id="validarPrioritarioE" hidden>Ingrese el num prioritario de riesgo</span>
                    </div>
                </div>


                <div class="row">
                    <div class="col">
                        <label>Acciones recomendadas:</label>
                        <input type="text" name="txtAccionesE" id="txtAccionesE" class="form-control" placeholder="Ideas para la precención">
                        <span class="validar-form" id="validarAccionesE" hidden>Ingrese las acciones recomendadas</span>
                    </div>
                    <div class="col">
                        <label>Responsable:</label>
                        <input type="text" name="txtResponsableE" id="txtResponsableE" class="form-control" placeholder="">
                        <span class="validar-form" id="validarResponsableE" hidden>Ingrese al responsable</span>
                    </div>

                    <div class="col">
                        <label>Fecha:</label>
                        <input type="text" name="txtFechaE" id="txtFechaE" class="form-control" readonly placeholder="click aqui">
                        <span class="validar-form" id="validarFechaE" hidden>Ingrese una fecha</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label>Acciones Tomadas:</label>
                        <input type="text" name="txtAccionesTE" id="txtAccionesTE" class="form-control" placeholder="">
                        <span class="validar-form" id="validarAccionesTE" hidden>Ingrese las acciones tomadas</span>
                    </div>
                    <div class="col">
                        <label>Severidad:</label><!-- aqui -->
                        <select class="custom-select" name="txtSeveridad1E" id="txtSeveridad1E">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>

                    <div class="col">
                        <label>Ocurrencia:</label>
                        <select class="custom-select" name="txtOcurrencia1E" id="txtOcurrencia1E">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>


                <div class="row">
                    <div class="col">
                        <label>Detectabilidad:</label>
                        <select class="custom-select" name="txtDetectabE" id="txtDetectabE">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="col">
                        <label>Num Prioritario de riesgos:</label>
                        <input type="text" name="txtPrioritario1E" id="txtPrioritario1E" class="form-control" onKeyPress="return soloNumeros(event)" placeholder="Actividad que se realizara">
                        <span class="validar-form" id="validarPrioritario1E" hidden>Ingrese el num prioritario de riesgos</span>
                    </div>

                    <div class="col">
                        <input type="hidden" name="txtIdEmpresaE" id="txtIdEmpresaE" class="form-control">
                        <input type="hidden" name="txtIdEmpresaE" id="txtIdE" class="form-control">
                    </div>
                </div>

            </div>

            <div class="modal-footer dark" style="background-color:#AED6F1">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success" id="btnEditarDatos">Aceptar</button>
            </div>
        </div>
    </div>
</div>

<!------------------------Fin Modal para editar datos----------------------------->

<script src="<?php echo SERVERURL.'js/riesgos.js';?>"></script>