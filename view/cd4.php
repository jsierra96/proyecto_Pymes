<h2>Contexto de la organización</h2>

    <form id="oManual" enctype="multipart/form-data" method="post">

        <input type="hidden" value='4' id="opcion">
        <h3>4.1 Comprensión de la organizacion y de su contexto.</h3>
            <textarea id="campo1"><?php echo $campo[1]; ?></textarea>
        <h3>4.2 Comprensión de las necesedades y expectativasde las partes interesadas.</h3>
            <textarea id="campo2"><?php echo $campo[2]; ?></textarea>
        <h3>4.3 Determinacion del alcance del sistema de gestiónde la calidad.</h3>
            <textarea id="campo3"><?php echo $campo[3]; ?></textarea>
        <h3>4.4 Sistema de gestión de calidad y sus procesos.</h3>
        <h3>4.4.1 La organización debe establecer, implementar, mantener y mejorar continuamente un Sistema
          de gestion de calidad, incluidos los procesos necesarios y sus interacciones, de acuerdo con los requisitos
        de esta Norma internacional.</h3>
            <textarea id="campo4"><?php echo $campo[4]; ?></textarea>
        <h3>4.4.2 En medida que sea necesario, la organizacion debe.</h3>
            <textarea id="campo5" id="texto"><?php echo $campo[5]; ?></textarea>
        <br>
        <input type="button" id="enviar" value="Guardar">

    </form>



