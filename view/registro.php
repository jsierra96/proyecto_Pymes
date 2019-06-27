<title>Pymes -:- Crear cuenta</title>
<?php include 'view/header.php'; ?>
<script src="js/login.js"></script>
<script src="js/registro.js"></script>
    <section class="main-login">
        <section class="login">
            <form>
                <label for="sNombre">Usuario:</label>
                <input type="text" id="sNombre">

                <label for="sPassword">Contase&ntilde;a:</label>
                <input type="password" id="sPassword">
                <h4 id="error"></h4>
                <input type="button" value="Ingresar" id="ingresa">
            </form>

            <h5>¿No tiene una cuenta? <a href="registro">Crear aquí</a></h5>
            <a style="text-decoration:none;" href="recupera"><h5>Olvide mi contraseña</h5></a>
        </section>

        <section id="notification">

            <article class="notification">
                <h4 >Crear una cuenta</h4>
                <form class="row" id="guardar">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="sNombre" class="col-sm-6 col-form-label">Nombre:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="sNombre" value="" name="sNombre" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sMaterno" class="col-sm-6 col-form-label">Apellido Materno:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="sMaterno" name="sMaterno" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sFecha" class="col-sm-6 col-form-label">Fecha de nacimiento:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="sFecha" name="sFecha" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sTipo" class="col-sm-6 col-form-label">Tipo de cuenta:</label>
                            <div class="col-sm-6">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="sAdmin" name="sTipo" value="admin" checked>
                                    <label class="custom-control-label" for="sAdmin">Dueño</label>
                                </div> 
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="sEmple" name="sTipo" value="empleado">
                                    <label class="custom-control-label" for="sEmple">Empleado</label>
                                </div> 
                            </div>
                        </div>
                        <div class="form-group row" id="clave">
                            <label for="sClave" class="col-sm-6 col-form-label">Clave:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="sClave" name="sClave" >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="sPaterno" class="col-sm-6 col-form-label">Apellido Paterno:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="sPaterno" name="sPaterno" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sCorreo" class="col-sm-6 col-form-label">Correo electronico:</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="sCorreo" name="sCorreo" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sPass1" class="col-sm-6 col-form-label">Contraseña:</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="sPass1" name="sPass1" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sPass2" class="col-sm-6 col-form-label">Repita contraseña:</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="sPass2" name="sPass2" required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success centrar" id="crear">+ Crear</button>
                </form>

                <div id="dialogo" title="Creación de cuentas">
                    <h3 id="mensaje">No Existe una empresa con esa clave</h3>
                </div>

            </article>

        </section>
    </section>
