<h2>Planificación</h2><br><br>

<form id="oManual" enctype="multipart/form-data" method="post" action="../control/guardaOp.php">
<input type="hidden" name="apartado" value='6' id="opcion">
<h3>6.1 Acciones para abordar riesgos y oportunidades.</h3>
    <textarea name="campo1"><?php echo $campo[1]; ?></textarea>
<h3>6.2 Objetivos de la calidad y planificación para lograrlos.</h3>
    <textarea name="campo2"><?php echo $campo[2]; ?></textarea>
<h3>6.3 Planificación de los cambios.</h3>
    <textarea name="campo3"><?php echo $campo[3]; ?></textarea>
    <br>

    <input type="submit" id="enviar" value="Guardar" >

</form>

