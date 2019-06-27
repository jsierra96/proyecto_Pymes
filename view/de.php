<?php
    require_once 'model/Empresa.php';
    $pyme = new Empresa();
    $pyme->ObtenerEmpresa($user['uClave']);
?>
<form id="guardar" enctype="multipart/form-data" method="post" class="row">
<h5>Datos de la empresa</h5>
    <div class="columns">
        <div class="column1">
            <figure>
                <img src="<?php echo SERVERURL.$pyme->getLogo();?>" alt="" class="foto" id="img1">
            </figure>
        </div>
        <div class="column2">
            <input type="hidden" name="op0" value= "no" id="imagen">
            <div class="container">
                <h4>Cambiar imagen:</h4>
                <input type="file" name="file" id="foto1">
            </div>
            <div class="container">
                <h4>Nombre de la empresa:</h4>
                <input type="text" name="op1" value="<?php echo $pyme->getEmpresa();?>">
            </div>
            <div class="container">
                <h4>Calle:</h4>
                <input type="text" name="op2" value="<?php echo $pyme->getCalle();?>">
            </div>
            <div class="container">
                <h4>Colonia:</h4>
                <input type="text" name="op3" value="<?php echo $pyme->getColonia();?>">
            </div>
            <div class="container">
                <h4>Ciudad:</h4>
                <input type="text" name="op4" value="<?php echo $pyme->getCiudad();?>">
            </div><div class="container">
                <h4>Municipio:</h4>
                <input type="text" name="op5" value="<?php echo $pyme->getMunicipio();?>">
            </div>
            <div class="container">
                <h4>Estado:</h4>
                <input type="text" name="op6" value="<?php echo $pyme->getEstado();?>">
            </div>
            <div class="container2">
                <h4>vision:</h4>
                <textarea name="op7" id=""><?php echo $pyme->getVision();?></textarea>
            </div>
            <div class="container2">
                <h4>Mision:</h4>
                <textarea name="op8" id=""><?php echo $pyme->getMision();?></textarea>
            </div>
        </div>
    </div>
    <br>
    <input type="button" value="Guardar" id="enviar">
</form>
<div id="dialogo"></div>
<script src="<?php echo SERVERURL.'js/de.js';?>"></script>
<?php
    include 'footer.php';
?>