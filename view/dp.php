<?php
    require_once 'model/Usuario.php';
    $pyme = new Usuario();
    $pyme->ObtenerUsuario($user['uClave']);
?>
<form id="guardar" enctype="multipart/form-data" method="post" class="row">
    <h5>Editar datos personales</h5>
    <div class="columns">
        <div class="column1">
            <figure>
                <img src="<?php echo SERVERURL.$user['foto'];?>" alt="" class="foto" id="img1">
            </figure>
        </div>
        <div class="column2">
            <input type="hidden" name="op0" value= "no" id="imagen">
            <div class="container">
                <h4>Cambiar imagen:</h4>
                <input type="file" name="file" id="foto1">
            </div>
            <div class="container">
                <h4>Nombre:</h4>
                <input type="text" name="op1" value="<?php echo $user['nombre'];?>">
            </div>
            <div class="container">
                <h4>Apellido Paterno:</h4>
                <input type="text" name="op2" value="<?php echo $user['paterno'];?>">
            </div>
            <div class="container">
                <h4>Apellido Materno:</h4>
                <input type="text" name="op3" value="<?php echo $user['materno'];?>">
            </div>
            <div class="container">
                <h4>Puesto que ocupa:</h4>
                <input type="text" name="op4" value="<?php echo $user['puesto'];?>">
            </div>
            <div class="container">
                <h4>Telefono:</h4>
                <input type="text" maxlength="10" name="op5" value="<?php echo $user['telefono'];?>">
            </div>
            <div class="container">
                <h4>Fecha de nacimiento:</h4>
                <input type="date" name="op6" value="<?php echo $user['fecha'];?>" placeholder="aaaa-mm-dd">
            </div>
            <div class="container">
                <h4>Calle:</h4>
                <input type="text" name="op7" value="<?php echo $pyme->getCalle();?>">
            </div>
            <div class="container">
                <h4>Colonia:</h4>
                <input type="text" name="op9" value="<?php echo $pyme->getColonia();?>">
            </div>
            <div class="container">
                <h4>Ciudad:</h4>
                <input type="text" name="op10" value="<?php echo $pyme->getCiudad();?>">
            </div><div class="container">
                <h4>Municipio:</h4>
                <input type="text" name="op11" value="<?php echo $pyme->getMunicipio();?>">
            </div>
            <div class="container">
                <h4>Estado:</h4>
                <input type="text" name="op12" value="<?php echo $pyme->getEstado();?>">
            </div>
        </div>
    </div>
    <br>
    <input type="button" value="Guardar" id="enviar">
</form>
<div id="dialogo"></div>
<script src="<?php echo SERVERURL.'js/dp.js';?>"></script>
<?php
    include 'footer.php';
    ?>