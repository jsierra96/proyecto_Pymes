<?php
    require_once 'model/Empresa.php';
    $pyme = new Empresa();
    $pyme->setId($user['eClave']);
    $pyme->setIdDir($user['dClave']);
    $pyme->ObtenerEmpresa($user['uClave']);
?>
<div class="row">

    <h5>Datos del usuario</h5>
    <div class="columns">
        <div class="column1">
        </div>
        <div class="column2">
            <div class="container">
                <h4>Nombre:</h4>
                <input type="text" name="" id="" disabled="true" value="<?php echo $user['nombre'];?>">
            </div>
            <div class="container">
                <h4>Apellido Paterno:</h4>
                <input type="text" name="" id="" disabled="true" value="<?php echo $user['paterno'];?>">
            </div>
            <div class="container">
                <h4>Apellido Materno:</h4>
                <input type="text" name="" id="" disabled="true" value="<?php echo $user['materno'];?>">
            </div>
            <div class="container">
                <h4>Puesto que ocupa:</h4>
                <input type="text" name="" id="" disabled="true" value="<?php echo $user['puesto'];?>">
            </div>
            <div class="container">
                <h4>Telefono:</h4>
                <input type="text" name="" id="" disabled="true" value="<?php echo $user['telefono'];?>">
            </div>
            <div class="container">
                <h4>Correo electronico:</h4>
                <input type="text" name="" id="" disabled="true" value="<?php echo $user['email'];?>">
            </div>
        </div>
    </div>
</div>
<hr><br>
<div class="row">
    <h5>Datos de la empresa</h5>
    <div class="columns">
        <div class="column1">
            <figure>
                <img src="<?php echo SERVERURL.$pyme->getLogo();?>" alt="" class="foto">
            </figure>
        </div>
        <div class="column2">
            <div class="container">
                <h4>Nombre de la empresa:</h4>
                <input disabled="true" type="text" name="" id="" value="<?php echo $pyme->getEmpresa();?>">
            </div>
            <div class="container">
                <h4>Dirección:</h4>
                <input disabled="true" type="text" name="" id="" value="<?php echo $pyme->getDireccion();?>">
            </div>
            <div class="container">
                <h4>vision:</h4>
                <textarea disabled="true" name="" id=""><?php echo $pyme->getVision();?></textarea>
            </div>
            <div class="container">
                <h4>Mision:</h4>
                <textarea disabled="true" name="" id=""><?php echo $pyme->getMision();?></textarea>
            </div>
        </div>
    </div>
</div>
<?php
    include 'footer.php';
    ?>