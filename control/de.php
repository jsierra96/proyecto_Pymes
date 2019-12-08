<?php
    session_start();
    require_once '../model/Empresa.php';
    $carpeta='../images/empresas/';
    $oDatos = new Empresa();
    $Json = '';
    $user = $_SESSION['user'];
    $ac = $_REQUEST['op0'];
    $aux = 'images/empresas/';
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

    $oDatos->setId($user['eClave']);
    $oDatos->setIdDir($user['eClave']);
    $oDatos->setEmpresa($_REQUEST['op1']);
    $oDatos->setVision($_REQUEST['op7']);
    $oDatos->setMision($_REQUEST['op8']);
    $oDatos->setLogo($aux2);
    $oDatos->setCalle($_REQUEST['op2']);
    $oDatos->setCiudad($_REQUEST['op4']); 
    $oDatos->setColonia($_REQUEST['op3']);
    $oDatos->setEstado($_REQUEST['op6']);
    $oDatos->setMunicipio($_REQUEST['op5']);

    $oRes = $oDatos->modificar($ac);
    $data = $oDatos->dEmpresa($user['eClave']);
    $empresa = array("logo"=>$data[0][1], "nombre"=>$data[0][0]);
    $_SESSION['pyme']=$empresa;
    
    $Json = '{
        "success": true,
        "respuesta": "'.$oDatos->getIdDir().'"
    }';
    header('Content-type: application/json');
    echo $Json;
?>