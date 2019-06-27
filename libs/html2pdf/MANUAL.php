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
              <td rowspan="3" style="border-right: solid 1px #154360;border-top: solid 3px #154360;border-left: solid 3px #154360;border-bottom: solid 3px #154360;"><!--<img src="../../img/ito1.png" style="display:block;margin:auto;width:60px;height:auto;padding: 5px 15px;">--></td>
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
        <h1 style="font-family:times;color:#1B4F72;text-align:center;font-size:28pt;margin-top:30px;">INSTITUTO TECNOLOGICO DE ORIZABA</h1>
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
 // include "../../pages/model/conexion.php";
  //$con=new conexion();
  try{
    //$con->conectar();
  //$query="select a.campo1, a.campo2, a.campo3, a.campo4, a.campo5, b.opcion1, b.opcion2, b.opcion3, b.opcion4, b.opcion5, c.opcion1, c.opcion2, c.opcion3, d.opcion1, d.opcion2, d.opcion3, d.opcion4, d.opcion5, d.opcion6, d.opcion7, d.opcion8, d.opcion9, d.opcion10, d.opcion11, d.opcion12, e.opcion1, e.opcion2, e.opcion3, e.opcion4, e.opcion5, e.opcion6, e.opcion7, e.opcion8, e.opcion9, e.opcion10, e.opcion11, e.opcion12, e.opcion13, e.opcion14, e.opcion15, e.opcion16, e.opcion17, e.opcion18, e.opcion19, e.opcion20, e.opcion21, e.opcion22, f.opcion1, f.opcion2, f.opcion3, f.opcion4, f.opcion5, f.opcion6, f.opcion7, g.opcion1, g.opcion2, g.opcion3 from manual4 a inner join manual_5 b on b.id_usuario = a.id_usuario inner join manual_6 c on c.id_usuario = b.id_usuario inner join manual_7 d on d.id_usuario = c.id_usuario inner join manual_8 e on e.id_usuario = d.id_usuario inner join manual_9 f on f.id_usuario = e.id_usuario inner join manual_10 g on g.id_usuario = f.id_usuario inner join usuario_datos_basicos h on h.id_usuario = g.id_usuario and h.id_usuario=3";
  //$datos=$con->ejecutarConsulta($query);
   ?>
    <bookmark title="4. CONTEXTO DE LA ORGANIZACIÓN" level="0" ></bookmark><h1>4. CONTEXTO DE LA ORGANIZACIÓN</h1>
        <div class="niveau">
            <bookmark title="4.1 Comprensión de la organizacion y de su contexto." level="1" ></bookmark><h2>4.1 Comprensión de la organizacion y de su contexto.</h2>
            <div class="niveau"><?php echo $datos[0][2];?></div>
            <bookmark title="4.2 Comprensión de las necesedades y expectativasde las partes interesadas." level="1" ></bookmark><h2>4.2 Comprensión de las necesedades y expectativasde las partes interesadas.</h2>
            <bookmark title="4.3 Determinacion del alcance del sistema de gestiónde la calidad." level="1" ></bookmark><h2>4.3 Determinacion del alcance del sistema de gestiónde la calidad.</h2>
            <bookmark title="4.4 Sistema de gestión de calidad y sus procesos." level="1" ></bookmark><h2>4.4 Sistema de gestión de calidad y sus procesos.</h2>
            <div class="niveau">
                <bookmark title="4.4.1 La organización debe establecer, implementar, mantener y mejorar continuamente un Sistema de gestion de calidad, incluidos los procesos necesarios y sus interacciones, de acuerdo con los requisitos de esta Norma internacional." level="2" ></bookmark><h3>4.4.1 La organización debe establecer, implementar, mantener y mejorar continuamente un Sistema de gestion de calidad, incluidos los procesos necesarios y sus interacciones, de acuerdo con los requisitos de esta Norma internacional.</h3>
                <bookmark title="4.4.2 En medida que sea necesario, la organizacion debe." level="2" ></bookmark><h3>4.4.2 En medida que sea necesario, la organizacion debe.</h3>
            </div>
        </div>
<!-- ++++++++++++++++++++  Punto datos del punto num. 5  ++++++++++++++++++++++++++++++++++++++++ -->
    <bookmark title="5. Liderazgo" level="0" ></bookmark><h1>5. Liderazgo</h1>
        <div class="niveau">
            <bookmark title="5.1 Liderazgo y compromiso." level="1" ></bookmark><h2>5.1 Liderazgo y compromiso.</h2>
                <div class="niveau">
                <bookmark title="5.1.1 Generalidades." level="2"></bookmark><h3>5.1.1 Generalidades.</h3>
                <bookmark title="5.1.2 Enfoque al cliente." level="2"></bookmark><h3>5.1.2 Enfoque al cliente.</h3>
            </div>
            <bookmark title="5.2 Politica." level="1" ></bookmark><h2>5.2 Politica.</h2>
                <div class="niveau">
                    <bookmark title="5.2.1 Establecimiento de la política de la calidad." level="2"></bookmark><h3>5.2.1 Establecimiento de la política de la calidad.</h3>
                    <bookmark title="5.2.2 Comunicación de la política de la calidad." level="2"></bookmark><h3>5.2.2 Comunicación de la política de la calidad.</h3>
                </div>
            <bookmark title="5.3 Roles, responsabilidades y autoridades en la organización." level="1" ></bookmark><h2>5.3 Roles, responsabilidades y autoridades en la organización.</h2>
        </div>
<!-- ++++++++++++++++++++  Punto datos del punto num. 6  ++++++++++++++++++++++++++++++++++++++++ -->
    <bookmark title="6. Planificación" level="0" ></bookmark><h1>6. Planificación</h1>
        <div class="niveau">
            <bookmark title="6.1 Acciones para abordar riesgos y oportunidades." level="1" ></bookmark><h2>6.1 Acciones para abordar riesgos y oportunidades.</h2>
            <bookmark title="6.2 Objetivos de la calidad y planificación para lograrlos." level="1" ></bookmark><h2>6.2 Objetivos de la calidad y planificación para lograrlos.</h2>
            <bookmark title="6.3 Planificación de los cambios." level="1"></bookmark><h3>6.3 Planificación de los cambios.</h3>
        </div>
<!-- ++++++++++++++++++++  Punto datos del punto num. 7  ++++++++++++++++++++++++++++++++++++++++ -->
    <bookmark title="7. APOYO" level="0"></bookmark><h1>7. APOYO</h1>
        <div class="niveau">
          <bookmark title="7.1 Recursos." level="1"></bookmark><h2>7.1 Recursos.</h2>
              <div class="niveau">
                   <bookmark title="7.1.1 Generalidades." level="2"></bookmark><h3>7.1.1 Generalidades.</h3>
                   <bookmark title="7.1.2 Personas." level="2"></bookmark><h3>7.1.2 Personas.</h3>
                   <bookmark title="7.1.3 Infrestructura." level="2"></bookmark><h3>7.1.3 Infrestructura.</h3>
                   <bookmark title="7.1.4 Ambiente para la operación de los procesos." level="2"></bookmark><h3>7.1.4 Ambiente para la operación de los procesos.</h3>
                   <bookmark title="7.1.5 Recursos de seguimiento y medición." level="2"></bookmark><h3>7.1.5 Recursos de seguimiento y medición.</h3>
                   <bookmark title="7.1.6 Conocimientos de la organización." level="2"></bookmark><h3>7.1.6 Conocimientos de la organización.</h3>
              </div>
          <bookmark title="7.2 Competencia." level="1"></bookmark><h2>7.2 Competencia.</h2>
          <bookmark title="7.3 Toma de conciencia." level="1"></bookmark><h2>7.3 Toma de conciencia.</h2>
          <bookmark title="7.4 Comunicación." level="1"></bookmark><h2>7.4 Comunicación.</h2><bookmark title="7.5 Informacion documentada." level="1"></bookmark><h2>7.5 Informacion documentada.</h2>
              <div class="niveau">
                   <bookmark title="7.5.1 Generalidades." level="2"></bookmark><h3>7.5.1 Generalidades.</h3>
                   <bookmark title="7.5.2 Creación y actualización." level="2"></bookmark><h3>7.5.2 Creación y actualización.</h3>
                   <bookmark title="7.5.3 Control de la información documentada." level="2"></bookmark><h3>7.5.3 Control de la información documentada.</h3>
              </div>
        </div>
<!-- ++++++++++++++++++++  Punto datos del punto num. 8  ++++++++++++++++++++++++++++++++++++++++ -->
     <bookmark title="8. OPERACIÓN" level="0"></bookmark><h1>8. Operación.</h1>
        <div class="niveau">
            <bookmark title="8.1 Planificación y control operacional." level="1"></bookmark><h2>8.1 Planificación y control operacional.</h2>
            <bookmark title="8.2 Requisitos para los productos y servicios." level="1"></bookmark><h2>8.2 Requisitos para los productos y servicios.</h2>
              <div class="niveau">
                  <bookmark title="8.2.1 Comunicación con el cliente." level="2"></bookmark><h3>8.2.1 Comunicación con el cliente.</h3>
                  <bookmark title="8.2.2 Determinación de los requisitos para los productos y servicios." level="2"></bookmark><h3>8.2.2 Determinación de los requisitos para los productos y servicios.</h3>
                  <bookmark title="8.2.3 Revisión de los requisitos para los productos y servicios." level="2"></bookmark><h3>8.2.3 Revisión de los requisitos para los productos y servicios.</h3>
                  <bookmark title="8.2.4 Cambios en los requisitos para los productos y servicios." level="2"></bookmark><h3>8.2.4 Cambios en los requisitos para los productos y servicios.</h3>
              </div>
            <bookmark title="8.3 Diseño y desarrollo de los productos y servicios." level="1"></bookmark><h2>8.3 Diseño y desarrollo de los productos y servicios.</h2>
                <div class="niveau">
                     <bookmark title="8.3.1 Generalidades." level="2"></bookmark><h3>8.3.1 Generalidades.</h3>
                     <bookmark title="8.3.2 Planificación del diseño y desarrollo." level="2"></bookmark><h3>8.3.2 Planificación del diseño y desarrollo.</h3>
                     <bookmark title="8.3.3 Entradas para el deseño y desarrollo." level="2"></bookmark><h3>8.3.3 Entradas para el deseño y desarrollo.</h3>
                     <bookmark title="8.3.4 Controles del diseño y desarrollo." level="2"></bookmark><h3>8.3.4 Controles del diseño y desarrollo.</h3>
                     <bookmark title="8.3.5 Salidas del deseño y desarrollo." level="2"></bookmark><h3>8.3.5 Salidas del deseño y desarrollo.</h3>
                     <bookmark title="8.3.6 Cambios del diseño y desarrollo." level="2"></bookmark><h3>8.3.6 Cambios del diseño y desarrollo.</h3>
                </div>
            <bookmark title="8.4 Control de los procesos, productos y servicios suministrados externamente." level="1"></bookmark><h2>8.4 Control de los procesos, productos y servicios suministrados externamente.</h2>
                <div class="niveau">
                    <bookmark title="8.4.1 Generalidades." level="2"></bookmark><h3>8.4.1 Generalidades.</h3>
                    <bookmark title="8.4.2 Tipo y alcance del control." level="2"></bookmark><h3>8.4.2 Tipo y alcance del control.</h3>
                    <bookmark title="8.4.3 Información para los proveedores externos." level="2"></bookmark><h3>8.4.3 Información para los proveedores externos.</h3>
                </div>
            <bookmark title="8.5 Producción y provisión del servicio." level="1"></bookmark><h2>8.5 Producción y provisión del servicio.</h2>
                <div class="niveau">
                     <bookmark title="8.5.1 Control de la procucción y de la provisión del servicio." level="2"></bookmark><h3>8.5.1 Control de la procucción y de la provisión del servicio.</h3>
                     <bookmark title="8.5.2 Identificación y trazabilidad." level="2"></bookmark><h3>8.5.2 Identificación y trazabilidad.</h3>
                     <bookmark title="8.5.3 Propiedad perteneciente a los clientes o proveedores externos." level="2"></bookmark><h3>8.5.3 Propiedad perteneciente a los clientes o proveedores externos.</h3>
                     <bookmark title="8.5.4 Preservación." level="2"></bookmark><h3>8.5.4 Preservación.</h3>
                     <bookmark title="8.5.5 Actividades posteriores a la entrega." level="2"></bookmark><h3>8.5.5 Actividades posteriores a la entrega.</h3>

                     <bookmark title="8.5.6 Control de los cambios." level="2"></bookmark><h3>8.5.6 Control de los cambios.</h3>
                </div>
            <bookmark title="8.6 Liberación de los productos y servicios." level="1"></bookmark><h2>8.6 Liberación de los productos y servicios.</h2>
            <bookmark title="8.7 Control de las salidas no conformes." level="1"></bookmark><h2>8.7 Control de las salidas no conformes.</h2>
        </div>
</page>
<!-- ++++++++++++++++++++  Punto datos del punto num. 9  ++++++++++++++++++++++++++++++++++++++++ -->
<page pageset="old">
     <bookmark title="9. EVALUACIÓN DEL DESEMPEÑO" level="0" ></bookmark><h1>9. Evaluación del desempeño</h1>
        <div class="niveau">
            <bookmark title="9.1 seguimiento, medición, análisis y evaluación." level="1"></bookmark><h2>9.1 seguimiento, medición, análisis y evaluación.</h2>
                <div class="niveau">
                    <bookmark title="9.1.1 Generalidades." level="2"></bookmark><h3>9.1.1 Generalidades.</h3>
                    <bookmark title="9.1.2 Satisfacción del cliente." level="2"></bookmark><h3>9.1.2 Satisfacción del cliente.</h3>
                    <bookmark title="9.1.3 Análisis y evaliación." level="2"></bookmark><h3>9.1.3 Análisis y evaliación.</h3>
                </div>
            <bookmark title="9.2 Auditoría interna." level="1"></bookmark><h2>9.2 Auditoría interna.</h2>
            <bookmark title="9.3 Revisión por la dirección" level="1"></bookmark><h2>9.3 Revisión por la dirección</h2>
                <div class="niveau">
                    <bookmark title="9.3.1 Generalidades." level="2"></bookmark><h3>9.3.1 Generalidades.</h3>
                    <bookmark title="9.3.2 Entradas de la revisión por la dirección." level="2"></bookmark><h3>9.3.2 Entradas de la revisión por la dirección.</h3>
                    <bookmark title="9.3.3 Salidas de la revisión por la dirección." level="2"></bookmark><h3>9.3.3 Salidas de la revisión por la dirección.</h3>
                </div>
        </div>
<!-- ++++++++++++++++++++  Punto datos del punto num. 9  ++++++++++++++++++++++++++++++++++++++++ -->
     <bookmark title="10. MEJORA" level="0"></bookmark><h1>10. Mejora</h1>
         <div class="niveau">
             <bookmark title="10.1 Generalidades." level="1"></bookmark><h2>10.1 Generalidades.</h2>
             <bookmark title="10.2 No conformidad y acción correctiva." level="1"></bookmark><h2>10.2 No conformidad y acción correctiva.</h2>
             <bookmark title="10.3 Mejora continua." level="1"></bookmark><h2>10.3 Mejora continua.</h2>
         </div>
    <?php
  }catch(Exception $e){
        error_reporting($e);
  }
  ?>
</page>
