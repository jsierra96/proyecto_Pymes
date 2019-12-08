<nav id="panel">
    <figure>
        <img src="<?php echo SERVERURL.$user['foto'];?>" alt="">
    </figure>
    <h4><?php echo $user['nombre']. " ".$user['paterno'];?></h4>

    <?php
        if($user['tipo'] === 'admin'){
    ?>
        <h4><?php echo " Clave de la empresa: ".$user['eClave'];?></h4>
    <?php
        }
    ?>
    <ul>
        <li><a href="inicio">Inicio</a></li>
        <li><a href="riesgos">Gestion de riesgos</a></li>
        <?php
            if($user['tipo'] === 'empleado') {
                ?>
        <li><a id="evento">Captura de datos</a>
            <ul id="accion">
                <li><a href="cd4">4. Contexto de la organizacion.</a></li>
                <li><a href="cd5">5. Liderazgo.</a></li>
                <li><a href="cd6">6. Planificacion.</a></li>
                <li><a href="cd7">7. Apoyo.</a></li>
                <li><a href="cd8">8. Operacion.</a></li>
                <li><a href="cd9">9. Evalucacion del desempeño.</a></li>
                <li><a href="cd10">10. Mejora.</a></li>
            </ul>
        </li>
                <?php
            }

           /* if($user['tipo'] === 'admin'){
                ?>
            <li><a href="Au">Alta de usuarios</a></li>
                <?php
            }*/
        ?>
        <li><a href="gm">Generación de manual</a></li>
        <!--<li><a href="ds">Evidencias</a></li>-->
        <li><a id="evento2">Modificacion de informacíon</a>
            <ul id="accion2">
                <li><a href="dp">Datos personales</a></li>
                <?php
                    if($user['tipo'] === 'admin'){
                        ?>
                        <li><a href="de">Datos de la empresa</a></li>
                        <?php
                    }
                ?>
                <li><a href="cc">Datos de acceso</a></li>
            </ul>
        </li>
        
        <li><a href="<?php echo SERVERURL.'control/salir.php';?>">Salir</a></li>
    </ul>
</nav>