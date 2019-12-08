<?php
    session_start();
    require_once('../model/conexion.php');

    $oConexion = new conexion();
    $oJson = '';
    $aData = null;

    if($oConexion->conecta()){
        $user = $_SESSION['user'];
        $id = $user['uClave'];
        $sQuery = "SELECT * FROM Usuarios WHERE id_user=$id";
        $aData = $oConexion->ejecutaConsulta($sQuery);

        $contrasena = $aData[0][2];
        if($contrasena === $_REQUEST['passA']){
            if($_REQUEST['passN'] === $_REQUEST['passR']){
                $c = $_REQUEST['email'];
                $p = $_REQUEST['passN'];
                $e = -1;
                $sQuery = "UPDATE Usuarios SET email='".$c."', password='".$p."' WHERE id_user=$id;";
                $e = $oConexion->ejecutarComando($sQuery);
                if( $e > -1){
                    $oJson = '{
                    "success": true,
                    "respuesta": "Datos modificados con exito."
                }';
                }else{
                    $oJson = '{
                    "success": false,
                    "respuesta": "Ocurrio un error al ingresar la nueva informacion en la base de datos."
                }';
                }
            }else{
                $oJson = '{
                    "success": false,
                    "respuesta": "Las nuevas contraseñas no son iguales."
                }';
            }
        }else{
            $oJson = '{
                "success": false,
                "respuesta": "La actual no coincide con la cuenta."
            }';
        }
    }else{
        $oJson = '{
            "success": false,
            "respuesta": "No se pudo conectar con la base de datos."
        }';
    }

    header('Content-Type:application/json');
    echo $oJson;

?>