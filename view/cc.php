
<h5 id="ccT">Modificaciòn de acceso</h5>
<div class="row">

<div class="columns">
    

    <div class="column2" id="cc">
    

    <div class="container">
        <h4>Correo electronico:</h4>
        <input type="text" id="email" value="<?php echo $user['email'];?>">
    </div>

     <div class="container">
        <h4>Contraseña anterior:</h4>
        <input type="password" id="pass1" placeholder="Contraseña actual">
    </div>

    <div class="container">
        <h4>Nueva contraseña:</h4>
        <input type="password" id="pass2" placeholder="Nueva contraseña">
    </div>

    <div class="container">
        <h4>Confirme contraseña:</h4>
        <input type="password" id="pass3" placeholder="Repetir contraseña">
    </div>

   


    </div>

    
</div>

</div>
<br>
<input type="button" id="enviar" value="Actualizar datos">

<div id="dialogo" title="Creación de cuentas">
    <h3 id="mensaje">No Existe una empresa con esa clave</h3>
</div>

<script src="../js/cc.js"></script>