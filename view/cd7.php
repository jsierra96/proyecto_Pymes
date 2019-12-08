<h2>Apoyo</h2><br><br>

<form id="oManual" enctype="multipart/form-data" method="post" action="../control/guardaOp.php">
<input type="hidden" name="apartado" value='7' id="opcion">
<h3>7.1 Recursos.</h3>
<h3>7.1.1 Generalidades.</h3>
    <textarea name="campo1"><?php echo $campo[1]; ?></textarea>
<h3>7.1.2 Personas.</h3>
    <textarea name="campo2"><?php echo $campo[2]; ?></textarea>
<h3>7.1.3 Infrestructura.</h3>
    <textarea name="campo3"><?php echo $campo[3]; ?></textarea>
<h3>7.1.4 Ambiente para la operación de los procesos.</h3>
    <textarea name="campo4"><?php echo $campo[4]; ?></textarea>
<h3>7.1.5 Recursos de seguimiento y medición.</h3>
    <textarea name="campo5"><?php echo $campo[5]; ?></textarea>
<h3>7.1.6 Conocimientos de la organización.</h3>
    <textarea name="campo6"><?php echo $campo[6]; ?></textarea>
<h3>7.2 Competencia.</h3>
    <textarea name="campo7"><?php echo $campo[7]; ?></textarea>
<h3>7.3 Toma de conciencia.</h3>
    <textarea name="campo8"><?php echo $campo[8]; ?></textarea>
<h3>7.4 Comunicación.</h3>
    <textarea name="campo9"><?php echo $campo[9]; ?></textarea>
<h3>7.5 Informacion documentada.</h3>
<h3>7.5.1 Generalidades.</h3>
    <textarea name="campo10"><?php echo $campo[10]; ?></textarea>
<h3>7.5.2 Creación y actualización.</h3>
    <textarea name="campo11"><?php echo $campo[11]; ?></textarea>
<h3>7.5.3 Control de la información documentada.</h3>
    <textarea name="campo12"><?php echo $campo[12]; ?></textarea>
    <br>

    <input type="submit" id="enviar" value="Guardar" >

</form>
