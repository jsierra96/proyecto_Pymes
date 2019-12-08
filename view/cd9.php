<h2>Evaluación del desempeño</h2><br>

<form id="oManual" enctype="multipart/form-data" method="post" action="../control/guardaOp.php">
<input type="hidden" name="apartado" value='9' id="opcion">
<h3>9.1 seguimiento, medición, análisis y evaluación.</h3>
<h3>9.1.1 Generalidades.</h3>
    <textarea name="campo1"><?php echo $campo[1]; ?></textarea>
<h3>9.1.2 Satisfacción del cliente. </h3>
    <textarea name="campo2"><?php echo $campo[2]; ?></textarea>
<h3>9.1.3 Análisis y evaliación.</h3>
    <textarea name="campo3"><?php echo $campo[3]; ?></textarea>
<h3>9.2 Auditoría interna.</h3>
    <textarea name="campo4"><?php echo $campo[4]; ?></textarea>
<h3>9.3 Revisión por la dirección</h3>
<h3>9.3.1 Generalidades.</h3>
    <textarea name="campo5"><?php echo $campo[5]; ?></textarea>
<h3>9.3.2 Entradas de la revisión por la dirección.</h3>
    <textarea name="campo6"><?php echo $campo[6]; ?></textarea>
<h3>9.3.3 Salidas de la revisión por la dirección.</h3>
    <textarea name="campo7"><?php echo $campo[7]; ?></textarea>
    <br>

   <input type="submit" id="enviar" value="Guardar" >

</form>

