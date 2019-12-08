<?php

    include 'conexion.php';
    class  ListaRiesgos{

        function listaRiesgos( $val ){
            $consult = new conexion();         
            if($consult->conecta()){
                $sDatos = null;
                $sql ="SELECT `id_riesgo`, `Actividad`, `ModoFallo`, `Efecto`, `Severidad`, `Causa`, `Ocurrencia`, `Control`, `Detecta`, `Prioritario`, `Acciones`, `Responsable`, `Fecha`, `AccionesT`, `Severidad1`, `Ocurrencia2`, `Detectab`, `Prioritario1`, `id_empresa` FROM `Riesgos` WHERE id_empresa=$val;";
                $sDatos = $consult->ejecutaConsulta($sql);

                if( $sDatos ){
                    for($i = 0; $i<count($sDatos); $i++){
                echo '<tr>
                <td class="text-center" id="ids">'.$sDatos[$i][0].'</td>
                <td class="text-center">'.$sDatos[$i][1].'</td>
                <td class="text-center">'.$sDatos[$i][2].'</td>
                <td class="text-center">'.$sDatos[$i][3].'</td>
                <td class="text-center">'.$sDatos[$i][4].'</td>
                <td class="text-center">'.$sDatos[$i][5].'</td>
                <td class="text-center">'.$sDatos[$i][6].'</td>
                <td class="text-center">'.$sDatos[$i][7].'</td>
                <td class="text-center">'.$sDatos[$i][8].'</td>
                <td class="text-center">'.$sDatos[$i][9].'</td>
                <td class="text-center">'.$sDatos[$i][10].'</td>
                <td class="text-center">'.$sDatos[$i][11].'</td>
                <td class="text-center">'.$sDatos[$i][12].'</td>
                <td class="text-center">'.$sDatos[$i][13].'</td>
                <td class="text-center">'.$sDatos[$i][14].'</td>
                <td class="text-center">'.$sDatos[$i][15].'</td>
                <td class="text-center">'.$sDatos[$i][16].'</td>
                <td class="text-center">'.$sDatos[$i][17].'</td>
                <td class="text-center"><button class="btn btn-success" onclick="btnEditarRiesgo('.$sDatos[$i][0].')"><i
                            class="fas fa-edit"></i></button></td>
                <td class="text-center"><button class="btn btn-danger" onclick="eliminar('.$sDatos[$i][0].')"><i class="fas fa-window-close"></i></button></td>
    
            </tr>';
                }
                } 
            }
        }
    } 
?>