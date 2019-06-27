<?php
    session_start();
    require_once '../model/Usuario.php';
    require 'generaId.php';
    $sUsuario = new Usuario();
    $iUser = 0;
    $iEmpre = 0;
    $error = 0;
    $Json = "";
    if($sUsuario->buscarEmail($_REQUEST['sCorreo'])){
        $Json = '{
            "success": false,
            "respuesta": "La cuenta de correo ya existe"
        }';
    }else{
        $pass1 = $_REQUEST['sPass1'];
        $pass2 = $_REQUEST['sPass2'];
        if( $pass1 == $pass2){
            $iUser = contador();
            $tipo = $_REQUEST['sTipo'];
            $fecha = explode('/', $_REQUEST['sFecha']);
            $cadena = $fecha[2]."-".$fecha[0]."-".$fecha[1];
            
            $sUsuario->setIdUser($iUser);
            $sUsuario->setIdDir($iUser);
            $sUsuario->setNombre($_REQUEST['sNombre']);
            $sUsuario->setApp($_REQUEST['sPaterno']);
            $sUsuario->setApm($_REQUEST['sMaterno']);
            $sUsuario->setTelefono(" ");
            $sUsuario->setPassword($_REQUEST['sPass1']);
            $sUsuario->setPuesto(" ");
            $sUsuario->setNacimiento($cadena);
            $sUsuario->setUser($_REQUEST['sCorreo']);
            $sUsuario->setImagen('images/user.png');
            $oRes = -1;
            if($tipo == 'admin'){
                $iEmpre = contador();
                $oRes = $sUsuario->cuentaAdmin($iEmpre);
            }else{
                $id = $_REQUEST['sClave'];
                if($sUsuario->ClaveE($id)){
                    $oRes = $sUsuario->CuentaEmple($id);
                }else{
                    $oRes = -2;
                }
            }

            $user = array("uClave"=>$iUser,"eClave"=>$iEmpre,"dClave"=>$iEmpre,"dir"=>$iUser,"tipo"=>$tipo,
            "nombre"=>$sUsuario->getNombre(),"paterno"=>$sUsuario->getApp(),"materno"=>$sUsuario->getApm(),"puesto"=>'Jefe de empresa',
            "telefono"=>" ","fecha"=>$sUsuario->getNacimiento(),"foto"=>$sUsuario->getImagen(),"calle"=>" ","colonia"=>" ",
            "ciudad"=>" ","municipio"=>" ","estado"=>" ","email"=>$sUsuario->getUser());
            $_SESSION['user']=$user;
            if($oRes == -2){
                $Json = '{
                    "success": false,
                    "respuesta": "No existe una empresa con esa clave"
                }';
            }else if($oRes > 0){
                $Json = '{
                    "success": true,
                    "tipo": "'.$tipo.'",
                    "respuesta": "Cuenta creada con exito"
                }';
            }else{
                $Json = '{
                    "success": false,
                    "respuesta": "Fallo en las consultas"
                }';
            }
        }else{
            $Json = '{
                "success": false,
                "respuesta": "Las contraseñas no coinciden"
            }';
        }

    }
    header('Content-type: application/json');
    echo $Json;
?>
