<title>Pymes -:- Recuperaciòn de contraseña</title>
<?php include 'view/header.php'; ?>
<script src="js/login.js"></script>
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
                <h4>Recuperaciòn de contraseña</h4>
                <form class="row" id="guardar">
                    <div class="col-md-12 ">
                         <figure id="rUser">
                            <img src="<?php echo SERVERURL;?>/images/user.png" alt="Imagen para identificar usuario">
                        </figure>
                        <br>
                        <div id="recuperar">
                            <div class="form-group row">
                            <label for="sClave" class="col-sm-6 col-form-label">Cuenta de correo:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="sClave" name="email" >
                            </div>
                        </div>
                        </div>
                        <br>
                    </div>
                    <button class="btn btn-success centrar" id="crear">Recuperar acceso</button>
                </form>

                <div id="dialogoR" title="Recuperación de acceso">
                    <h3 id="mensaje">No Existe una empresa con esa clave</h3>
                </div>

            </article>

        </section>
    <script src="js/recupera.js"></script>
    </section>
