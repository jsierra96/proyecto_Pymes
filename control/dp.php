<?php
    session_start();
    require_once '../model/Usuario.php';
    $carpeta='../images/user/';
    $oDatos = new Usuario();
    $Json = '';
    $user = $_SESSION['user'];
    $ac = $_REQUEST['op0'];
    $aux = 'images/user/';
    $aux2 = '';
    if ($ac == 'si'){
        if(isset($_FILES["file"])){
            $file = $_FILES["file"];
            $nombre = $file["name"];
            $ruta_provisional = $file["tmp_name"];
            $src = $carpeta.$nombre;
            $aux2 = $aux.$nombre;
            if(file_exists($src))
                unlink($src);
            move_uploaded_file($ruta_provisional, $src);
        }
    }

    $oDatos->setIdUser($user['uClave']);
    $oDatos->setIdDir($user['dir']);
    $oDatos->setNombre($_REQUEST['op1']);
    $oDatos->setApp($_REQUEST['op2']);
    $oDatos->setApm($_REQUEST['op3']);
    $oDatos->setPuesto($_REQUEST['op4']);
    $oDatos->setTelefono($_REQUEST['op5']);
    $oDatos->setNacimiento($_REQUEST['op6']); 
    $oDatos->setImagen($aux2);
    $oDatos->setCalle($_REQUEST['op7']);
    $oDatos->setColonia($_REQUEST['op9']);
    $oDatos->setCiudad($_REQUEST['op10']); 
    $oDatos->setMunicipio($_REQUEST['op11']);
    $oDatos->setEstado($_REQUEST['op12']);

    $oRes = $oDatos->modificar($ac);
    if($ac == 'si'){
        $user2 = array("uClave"=>$user['uClave'],"eClave"=>$user['eClave'],"dClave"=>$user['dClave'],
            "dir"=>$user['dir'], "tipo"=>$user['tipo'],"nombre"=>$oDatos->getNombre(),
            "paterno"=>$oDatos->getApp(),"materno"=>$oDatos->getApm(),"puesto"=>$oDatos->getPuesto(),
            "telefono"=>$oDatos->getTelefono(),"fecha"=>$oDatos->getNacimiento(),
            "foto"=>$oDatos->getImagen(),"calle"=>$oDatos->getCalle(),"colonia"=>$oDatos->getColonia(),
            "ciudad"=>$oDatos->getCiudad(),"municipio"=>$oDatos->getMunicipio(),
            "estado"=>$oDatos->getEstado(),"email"=>$user['email']);
        $_SESSION['user']=$user2;
    }else{
        $user2 = array("uClave"=>$user['uClave'],"eClave"=>$user['eClave'],"dClave"=>$user['dClave'],
            "dir"=>$user['dir'], "tipo"=>$user['tipo'],"nombre"=>$oDatos->getNombre(),
            "paterno"=>$oDatos->getApp(),"materno"=>$oDatos->getApm(),"puesto"=>$oDatos->getPuesto(),
            "telefono"=>$oDatos->getTelefono(),"fecha"=>$oDatos->getNacimiento(),
            "foto"=>$user['foto'],"calle"=>$oDatos->getCalle(),"colonia"=>$oDatos->getColonia(),
            "ciudad"=>$oDatos->getCiudad(),"municipio"=>$oDatos->getMunicipio(),
            "estado"=>$oDatos->getEstado(),"email"=>$user['email']);
        $_SESSION['user']=$user2;
    }
    $Json = '{
        "success": true,
        "respuesta": "'.$oDatos->getIdDir().'"
    }';
    header('Content-type: application/json');
    echo $Json;
?>