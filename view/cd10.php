<h2>Mejora</h2><br>

<form id="oManual" enctype="multipart/form-data" method="post" action="../control/guardaOp.php">
<input type="hidden" name="apartado" value='10' id="opcion">
<h3>10.1 Generalidades.</h3>
    <textarea name="campo1"><?php echo $campo[1]; ?></textarea>
<h3>10.2 No conformidad y acción correctiva.</h3>
    <textarea name="campo2"><?php echo $campo[2]; ?></textarea>
<h3>10.3 Mejora continua.</h3>
    <textarea name="campo3"><?php echo $campo[3]; ?></textarea>
    <br>

    <input type="submit" id="enviar" value="Guardar" >

</form>

