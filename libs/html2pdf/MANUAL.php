<?php 
    session_start();
    $pyme = $_SESSION['pyme'];
    $user = $_SESSION['user'];
?>
<style type="text/css">
table{
  height: 60px;
  border-collapse: collapse;
}
h1, h2, h3{
  text-align: justify;
}
h1{
  color: #1A5276;
  font-size: 14pt;
}
h2, h3{
  color: #2E86C1;
  font-size: 12pt;
}
td{
  text-align: center;
  padding: 5px;
  font-weight: bold;
  box-sizing: border-box;
}
#cuadro{
  margin-top: 110px;
  border-collapse: collapse;
  margin: auto;
}
#cuadro td, #cuadro th{
  width:140px;
  height: 80px;
  text-align: center;
  border:solid 1px #154360;
  padding:8px;
  box-sizing:border-box;
}
</style>
<page backtop="30mm" backbottom="10mm" backleft="15mm" backright="15mm" style="font-size: 12pt">
    <page_header>
        <table style="margin:auto;">
            <tr>
              <td rowspan="3" style="border-right: solid 1px #154360;border-top: solid 3px #154360;border-left: solid 3px #154360;border-bottom: solid 3px #154360;"><img src="../../<?php echo $pyme['logo'];?>" style="display:block;margin:auto;width:60px;height:auto;padding: 5px 15px;"></td>
              <td rowspan="2" style="font-size:16px;border-top:solid 3px #154360;border-bottom: solid 1px #154360;border-right: solid 1px #154360;">Manual de calidad</td>
              <td style="text-align:left;border-top: solid 3px #154360;border-right: solid 3px #154360;border-bottom: solid 1px #154360;width: 120px;">Código: HR-MC</td>
            </tr>
            <tr>
              <td style="text-align:left;border-right: solid 3px #154360;border-top: solid 1px #154360;border-bottom: solid 1px #154360;width: 120px;">Revisión: 0</td>
            </tr>
            <tr>
              <td style="font-size:12px;background:#AED6F1;border-bottom: solid 3px #154360;border-right: solid 1px #154360;">Referencia a la Norma ISO 9001:2015</td>
              <td style="text-align:left;border-bottom: solid 3px #154360;border-right: solid 3px #154360;width: 120px;">Página [[page_cu]] de [[page_nb]]</td>
            </tr>

          </table>
    </page_header>
    <page_footer>
        <table class="page_footer">
            <tr>
                <td style="width: 100%; text-align: right">
                    [[page_cu]]
                </td>
            </tr>
        </table>
    </page_footer>
    <div style="width:600px;margin:auto;padding-top:50px;">
        <h1 style="font-family:times;color:#154360;text-align:center;font-size:42pt">MANUAL DE CALIDAD</h1>
        <br><br><br><br><br><br>
        <h1 style="font-family:times;color:#1B4F72;text-align:center;font-size:28pt;margin-top:30px;"><?php echo $pyme['nombre'];?></h1>
        <table id="cuadro">
            <tr>
                <th style="height:3px">ELABORÓ</th>
                <th style="height:3px;">REVISÓ</th>
                <th style="height:3px;">APROBÓ</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th style="height:50px">FIRMA</th>
                <th style="height:50px">FIRMA</th>
                <th style="height:50px">FIRMA</th>
            </tr>
        </table>
    </div><br>
 <!-- <img src="../../img/pie.png" style="display:block;margin:auto;width:650px;"><br>-->
<br>
</page>
<page pageset="old"></page>
<page pageset="old"></page>
<!-- ++++++++++++++++++++  Punto datos del punto num. 4  ++++++++++++++++++++++++++++++++++++++++ -->
<page pageset="old">
  <?php
 include "../../model/conexion.php";
  $con=new conexion();
  try{
    $con->conecta();
    $id = $user['eClave'];
  $query="SELECT * FROM Apartado4 INNER JOIN Apartado5 ON Apartado4.id_manual=Apartado5.id_manual INNER JOIN Apartado6 ON Apartado5.id_manual=Apartado6.id_manual INNER JOIN Apartado7 ON Apartado6.id_manual=Apartado7.id_manual INNER JOIN Apartado8  ON Apartado7.id_manual=Apartado8.id_manual INNER JOIN Apartado9 ON Apartado8.id_manual=Apartado9.id_manual INNER JOIN Apartado10 a ON Apartado9.id_manual=a.id_manual AND a.id_manual=$id;";
  $datos=$con->ejecutaConsulta($query);
   ?>
    <bookmark title="4. CONTEXTO DE LA ORGANIZACIÓN" level="0" ></bookmark><h1>4. CONTEXTO DE LA ORGANIZACIÓN</h1>
        <div class="niveau">
            <bookmark title="4.1 Comprensión de la organizacion y de su contexto." level="1" ></bookmark><h2>4.1 Comprensión de la organizacion y de su contexto.</h2>
            <div class="niveau"><?php echo $datos[0][1];?></div>
            <bookmark title="4.2 Comprensión de las necesedades y expectativasde las partes interesadas." level="1" ></bookmark>
                <h2>4.2 Comprensión de las necesedades y expectativasde las partes interesadas.</h2>
                <?php echo $datos[0][2];?>
            <bookmark title="4.3 Determinacion del alcance del sistema de gestiónde la calidad." level="1" ></bookmark>
                <h2>4.3 Determinacion del alcance del sistema de gestiónde la calidad.</h2>
                <?php echo $datos[0][3];?>
            <bookmark title="4.4 Sistema de gestión de calidad y sus procesos." level="1" ></bookmark><h2>4.4 Sistema de gestión de calidad y sus procesos.</h2>
            <div class="niveau">
                <bookmark title="4.4.1 La organización debe establecer, implementar, mantener y mejorar continuamente un Sistema de gestion de calidad, incluidos los procesos necesarios y sus interacciones, de acuerdo con los requisitos de esta Norma internacional." level="2" ></bookmark><h3>4.4.1 La organización debe establecer, implementar, mantener y mejorar continuamente un Sistema de gestion de calidad, incluidos los procesos necesarios y sus interacciones, de acuerdo con los requisitos de esta Norma internacional.</h3>
                <?php echo $datos[0][4];?>
                <bookmark title="4.4.2 En medida que sea necesario, la organizacion debe." level="2" ></bookmark><h3>4.4.2 En medida que sea necesario, la organizacion debe.</h3>
                <?php echo $datos[0][5];?>
            </div>
        </div>
<!-- ++++++++++++++++++++  Punto datos del punto num. 5  ++++++++++++++++++++++++++++++++++++++++ -->
    <bookmark title="5. Liderazgo" level="0" ></bookmark><h1>5. Liderazgo</h1>
        <div class="niveau">
            <bookmark title="5.1 Liderazgo y compromiso." level="1" ></bookmark><h2>5.1 Liderazgo y compromiso.</h2>
                <div class="niveau">
                <bookmark title="5.1.1 Generalidades." level="2"></bookmark><h3>5.1.1 Generalidades.</h3>
                <?php echo $datos[0][8];?>
                <bookmark title="5.1.2 Enfoque al cliente." level="2"></bookmark><h3>5.1.2 Enfoque al cliente.</h3>
                <?php echo $datos[0][9];?>
            </div>
            <bookmark title="5.2 Politica." level="1" ></bookmark><h2>5.2 Politica.</h2>
                <div class="niveau">
                    <bookmark title="5.2.1 Establecimiento de la política de la calidad." level="2"></bookmark><h3>5.2.1 Establecimiento de la política de la calidad.</h3>
                    <?php echo $datos[0][10];?>
                    <bookmark title="5.2.2 Comunicación de la política de la calidad." level="2"></bookmark><h3>5.2.2 Comunicación de la política de la calidad.</h3>
                    <?php echo $datos[0][11];?>
                </div>
            <bookmark title="5.3 Roles, responsabilidades y autoridades en la organización." level="1" ></bookmark><h2>5.3 Roles, responsabilidades y autoridades en la organización.</h2>
            <?php echo $datos[0][12];?>
        </div>
<!-- ++++++++++++++++++++  Punto datos del punto num. 6  ++++++++++++++++++++++++++++++++++++++++ -->
    <bookmark title="6. Planificación" level="0" ></bookmark><h1>6. Planificación</h1>
        <div class="niveau">
            <bookmark title="6.1 Acciones para abordar riesgos y oportunidades." level="1" ></bookmark><h2>6.1 Acciones para abordar riesgos y oportunidades.</h2>
            <?php echo $datos[0][14];?>
            <bookmark title="6.2 Objetivos de la calidad y planificación para lograrlos." level="1" ></bookmark><h2>6.2 Objetivos de la calidad y planificación para lograrlos.</h2>
            <?php echo $datos[0][15];?>
            <bookmark title="6.3 Planificación de los cambios." level="1"></bookmark><h3>6.3 Planificación de los cambios.</h3>
            <?php echo $datos[0][16];?>
        </div>
<!-- ++++++++++++++++++++  Punto datos del punto num. 7  ++++++++++++++++++++++++++++++++++++++++ -->
    <bookmark title="7. APOYO" level="0"></bookmark><h1>7. APOYO</h1>
        <div class="niveau">
          <bookmark title="7.1 Recursos." level="1"></bookmark><h2>7.1 Recursos.</h2>
              <div class="niveau">
                   <bookmark title="7.1.1 Generalidades." level="2"></bookmark><h3>7.1.1 Generalidades.</h3>
                   <?php echo $datos[0][18];?>
                   <bookmark title="7.1.2 Personas." level="2"></bookmark><h3>7.1.2 Personas.</h3>
                   <?php echo $datos[0][19];?>
                   <bookmark title="7.1.3 Infrestructura." level="2"></bookmark><h3>7.1.3 Infrestructura.</h3>
                   <?php echo $datos[0][20];?>
                   <bookmark title="7.1.4 Ambiente para la operación de los procesos." level="2"></bookmark><h3>7.1.4 Ambiente para la operación de los procesos.</h3>
                   <?php echo $datos[0][21];?>
                   <bookmark title="7.1.5 Recursos de seguimiento y medición." level="2"></bookmark><h3>7.1.5 Recursos de seguimiento y medición.</h3>
                   <?php echo $datos[0][22];?>
                   <bookmark title="7.1.6 Conocimientos de la organización." level="2"></bookmark><h3>7.1.6 Conocimientos de la organización.</h3>
                   <?php echo $datos[0][23];?>
              </div>
          <bookmark title="7.2 Competencia." level="1"></bookmark><h2>7.2 Competencia.</h2>
          <?php echo $datos[0][24];?>
          <bookmark title="7.3 Toma de conciencia." level="1"></bookmark><h2>7.3 Toma de conciencia.</h2>
          <?php echo $datos[0][25];?>
          <bookmark title="7.4 Comunicación." level="1"></bookmark><h2>7.4 Comunicación.</h2><bookmark title="7.5 Informacion documentada." level="1"></bookmark><h2>7.5 Informacion documentada.</h2>
          <?php echo $datos[0][26];?>
              <div class="niveau">
                   <bookmark title="7.5.1 Generalidades." level="2"></bookmark><h3>7.5.1 Generalidades.</h3>
                   <?php echo $datos[0][27];?>
                   <bookmark title="7.5.2 Creación y actualización." level="2"></bookmark><h3>7.5.2 Creación y actualización.</h3>
                   <?php echo $datos[0][28];?>
                   <bookmark title="7.5.3 Control de la información documentada." level="2"></bookmark><h3>7.5.3 Control de la información documentada.</h3>
                   <?php echo $datos[0][29];?>
              </div>
        </div>
<!-- ++++++++++++++++++++  Punto datos del punto num. 8  ++++++++++++++++++++++++++++++++++++++++ -->
     <bookmark title="8. OPERACIÓN" level="0"></bookmark><h1>8. Operación.</h1>
        <div class="niveau">
            <bookmark title="8.1 Planificación y control operacional." level="1"></bookmark><h2>8.1 Planificación y control operacional.</h2>
            <?php echo $datos[0][31];?>
            <bookmark title="8.2 Requisitos para los productos y servicios." level="1"></bookmark><h2>8.2 Requisitos para los productos y servicios.</h2>
              <div class="niveau">
                  <bookmark title="8.2.1 Comunicación con el cliente." level="2"></bookmark><h3>8.2.1 Comunicación con el cliente.</h3>
                  <?php echo $datos[0][32];?>
                  <bookmark title="8.2.2 Determinación de los requisitos para los productos y servicios." level="2"></bookmark><h3>8.2.2 Determinación de los requisitos para los productos y servicios.</h3>
                  <?php echo $datos[0][33];?>
                  <bookmark title="8.2.3 Revisión de los requisitos para los productos y servicios." level="2"></bookmark><h3>8.2.3 Revisión de los requisitos para los productos y servicios.</h3>
                  <?php echo $datos[0][34];?>
                  <bookmark title="8.2.4 Cambios en los requisitos para los productos y servicios." level="2"></bookmark><h3>8.2.4 Cambios en los requisitos para los productos y servicios.</h3>
                  <?php echo $datos[0][35];?>
              </div>
            <bookmark title="8.3 Diseño y desarrollo de los productos y servicios." level="1"></bookmark><h2>8.3 Diseño y desarrollo de los productos y servicios.</h2>
                <div class="niveau">
                     <bookmark title="8.3.1 Generalidades." level="2"></bookmark><h3>8.3.1 Generalidades.</h3>
                     <?php echo $datos[0][36];?>
                     <bookmark title="8.3.2 Planificación del diseño y desarrollo." level="2"></bookmark><h3>8.3.2 Planificación del diseño y desarrollo.</h3>
                     <?php echo $datos[0][37];?>
                     <bookmark title="8.3.3 Entradas para el deseño y desarrollo." level="2"></bookmark><h3>8.3.3 Entradas para el deseño y desarrollo.</h3>
                     <?php echo $datos[0][38];?>
                     <bookmark title="8.3.4 Controles del diseño y desarrollo." level="2"></bookmark><h3>8.3.4 Controles del diseño y desarrollo.</h3>
                     <?php echo $datos[0][39];?>
                     <bookmark title="8.3.5 Salidas del deseño y desarrollo." level="2"></bookmark><h3>8.3.5 Salidas del deseño y desarrollo.</h3>
                     <?php echo $datos[0][40];?>
                     <bookmark title="8.3.6 Cambios del diseño y desarrollo." level="2"></bookmark><h3>8.3.6 Cambios del diseño y desarrollo.</h3>
                     <?php echo $datos[0][41];?>
                </div>
            <bookmark title="8.4 Control de los procesos, productos y servicios suministrados externamente." level="1"></bookmark><h2>8.4 Control de los procesos, productos y servicios suministrados externamente.</h2>
                <div class="niveau">
                    <bookmark title="8.4.1 Generalidades." level="2"></bookmark><h3>8.4.1 Generalidades.</h3>
                    <?php echo $datos[0][42];?>
                    <bookmark title="8.4.2 Tipo y alcance del control." level="2"></bookmark><h3>8.4.2 Tipo y alcance del control.</h3>
                    <?php echo $datos[0][43];?>
                    <bookmark title="8.4.3 Información para los proveedores externos." level="2"></bookmark><h3>8.4.3 Información para los proveedores externos.</h3>
                    <?php echo $datos[0][44];?>
                </div>
            <bookmark title="8.5 Producción y provisión del servicio." level="1"></bookmark><h2>8.5 Producción y provisión del servicio.</h2>
                <div class="niveau">
                     <bookmark title="8.5.1 Control de la procucción y de la provisión del servicio." level="2"></bookmark><h3>8.5.1 Control de la procucción y de la provisión del servicio.</h3>
                     <?php echo $datos[0][45];?>
                     <bookmark title="8.5.2 Identificación y trazabilidad." level="2"></bookmark><h3>8.5.2 Identificación y trazabilidad.</h3>
                     <?php echo $datos[0][46];?>
                     <bookmark title="8.5.3 Propiedad perteneciente a los clientes o proveedores externos." level="2"></bookmark><h3>8.5.3 Propiedad perteneciente a los clientes o proveedores externos.</h3>
                     <?php echo $datos[0][47];?>
                     <bookmark title="8.5.4 Preservación." level="2"></bookmark><h3>8.5.4 Preservación.</h3>
                     <?php echo $datos[0][48];?>
                     <bookmark title="8.5.5 Actividades posteriores a la entrega." level="2"></bookmark><h3>8.5.5 Actividades posteriores a la entrega.</h3>
                     <?php echo $datos[0][49];?>
                     <bookmark title="8.5.6 Control de los cambios." level="2"></bookmark><h3>8.5.6 Control de los cambios.</h3>
                     <?php echo $datos[0][50];?>
                </div>
            <bookmark title="8.6 Liberación de los productos y servicios." level="1"></bookmark><h2>8.6 Liberación de los productos y servicios.</h2>
            <?php echo $datos[0][51];?>
            <bookmark title="8.7 Control de las salidas no conformes." level="1"></bookmark><h2>8.7 Control de las salidas no conformes.</h2>
            <?php echo $datos[0][52];?>
        </div>
</page>
<!-- ++++++++++++++++++++  Punto datos del punto num. 9  ++++++++++++++++++++++++++++++++++++++++ -->
<page pageset="old">
     <bookmark title="9. EVALUACIÓN DEL DESEMPEÑO" level="0" ></bookmark><h1>9. Evaluación del desempeño</h1>
        <div class="niveau">
            <bookmark title="9.1 seguimiento, medición, análisis y evaluación." level="1"></bookmark><h2>9.1 seguimiento, medición, análisis y evaluación.</h2>
                <div class="niveau">
                    <bookmark title="9.1.1 Generalidades." level="2"></bookmark><h3>9.1.1 Generalidades.</h3>
                    <?php echo $datos[0][54];?>
                    <bookmark title="9.1.2 Satisfacción del cliente." level="2"></bookmark><h3>9.1.2 Satisfacción del cliente.</h3>
                    <?php echo $datos[0][55];?>
                    <bookmark title="9.1.3 Análisis y evaliación." level="2"></bookmark><h3>9.1.3 Análisis y evaliación.</h3>
                    <?php echo $datos[0][56];?>
                </div>
            <bookmark title="9.2 Auditoría interna." level="1"></bookmark><h2>9.2 Auditoría interna.</h2>
            <?php echo $datos[0][57];?>
            <bookmark title="9.3 Revisión por la dirección" level="1"></bookmark><h2>9.3 Revisión por la dirección</h2>
                <div class="niveau">
                    <bookmark title="9.3.1 Generalidades." level="2"></bookmark><h3>9.3.1 Generalidades.</h3>
                    <?php echo $datos[0][58];?>
                    <bookmark title="9.3.2 Entradas de la revisión por la dirección." level="2"></bookmark><h3>9.3.2 Entradas de la revisión por la dirección.</h3>
                    <?php echo $datos[0][59];?>
                    <bookmark title="9.3.3 Salidas de la revisión por la dirección." level="2"></bookmark><h3>9.3.3 Salidas de la revisión por la dirección.</h3>
                    <?php echo $datos[0][60];?>
                </div>
        </div>
<!-- ++++++++++++++++++++  Punto datos del punto num. 9  ++++++++++++++++++++++++++++++++++++++++ -->
     <bookmark title="10. MEJORA" level="0"></bookmark><h1>10. Mejora</h1>
         <div class="niveau">
             <bookmark title="10.1 Generalidades." level="1"></bookmark><h2>10.1 Generalidades.</h2>
             <?php echo $datos[0][62];?>
             <bookmark title="10.2 No conformidad y acción correctiva." level="1"></bookmark><h2>10.2 No conformidad y acción correctiva.</h2>
             <?php echo $datos[0][63];?>
             <bookmark title="10.3 Mejora continua." level="1"></bookmark><h2>10.3 Mejora continua.</h2>
             <?php echo $datos[0][64];?>
         </div>
    <?php
  }catch(Exception $e){
        error_reporting($e);
  }
  ?>
</page>
