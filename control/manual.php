<?php
    require_once 'model/conexion.php';
    $con = new conexion();
    $campo = null;
    $oManual = $_SESSION['manual'];
    if($con->conecta()){
        if($oManual == 4){
            $sQuery = "SELECT * FROM Apartado4 WHERE id_manual='".$user['eClave']."'";
            $datos = $con->ejecutaConsulta($sQuery);
            if($datos){
                $campo[1]=$datos[0][1];
                $campo[2]=$datos[0][2];
                $campo[3]=$datos[0][3];
                $campo[4]=$datos[0][4];
                $campo[5]=$datos[0][5];
                
            }
        }else if($oManual == 5){
            $sQuery = "SELECT * FROM Apartado5 WHERE id_manual='".$user['eClave']."'";
            $datos = $con->ejecutaConsulta($sQuery);
            if($datos){
                $campo[1]=$datos[0][1];
                $campo[2]=$datos[0][2];
                $campo[3]=$datos[0][3];
                $campo[4]=$datos[0][4];
                $campo[5]=$datos[0][5];
                
            }
        }else if($oManual == 6){
            $sQuery = "SELECT * FROM Apartado6 WHERE id_manual='".$user['eClave']."'";
            $datos = $con->ejecutaConsulta($sQuery);
            if($datos){
                $campo[1]=$datos[0][1];
                $campo[2]=$datos[0][2];
                $campo[3]=$datos[0][3];
            }
        }else if($oManual == 7){
            $sQuery = "SELECT * FROM Apartado7 WHERE id_manual='".$user['eClave']."'";
            $datos = $con->ejecutaConsulta($sQuery);
            if($datos){
                $campo[1]=$datos[0][1];
                $campo[2]=$datos[0][2];
                $campo[3]=$datos[0][3];
                $campo[4]=$datos[0][4];
                $campo[5]=$datos[0][5];
                $campo[6]=$datos[0][6];
                $campo[7]=$datos[0][7];
                $campo[8]=$datos[0][8];
                $campo[9]=$datos[0][9];
                $campo[10]=$datos[0][10];
                $campo[11]=$datos[0][11];
                $campo[12]=$datos[0][12];
            }
        }else if($oManual == 8){
            $sQuery = "SELECT * FROM Apartado8 WHERE id_manual='".$user['eClave']."'";
            $datos = $con->ejecutaConsulta($sQuery);
            if($datos){
                $campo[1]=$datos[0][1];
                $campo[2]=$datos[0][2];
                $campo[3]=$datos[0][3];
                $campo[4]=$datos[0][4];
                $campo[5]=$datos[0][5];
                $campo[6]=$datos[0][6];
                $campo[7]=$datos[0][7];
                $campo[8]=$datos[0][8];
                $campo[9]=$datos[0][9];
                $campo[10]=$datos[0][10];
                $campo[11]=$datos[0][11];
                $campo[12]=$datos[0][12];
                $campo[13]=$datos[0][13];
                $campo[14]=$datos[0][14];
                $campo[15]=$datos[0][15];
                $campo[16]=$datos[0][16];
                $campo[17]=$datos[0][17];
                $campo[18]=$datos[0][18];
                $campo[19]=$datos[0][19];
                $campo[20]=$datos[0][20];
                $campo[21]=$datos[0][21];
                $campo[22]=$datos[0][22];
            }
        }else if($oManual == 9){
            $sQuery = "SELECT * FROM Apartado9 WHERE id_manual='".$user['eClave']."'";
            $datos = $con->ejecutaConsulta($sQuery);
            if($datos){
                $campo[1]=$datos[0][1];
                $campo[2]=$datos[0][2];
                $campo[3]=$datos[0][3];
                $campo[4]=$datos[0][4];
                $campo[5]=$datos[0][5];
                $campo[6]=$datos[0][6];
                $campo[7]=$datos[0][7];
            }
        }else if($oManual == 10){
            $sQuery = "SELECT * FROM Apartado10 WHERE id_manual='".$user['eClave']."'";
            $datos = $con->ejecutaConsulta($sQuery);
            if($datos){
                $campo[1]=$datos[0][1];
                $campo[2]=$datos[0][2];
                $campo[3]=$datos[0][3];
            }
        }
    }
    $con->desconecta();
?>