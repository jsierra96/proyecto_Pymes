<?php
    session_start();
    require_once '../model/Manual.php';
    require_once('../core/confGeneral.php');

    $url = SERVERURL;
    $manual = new manual();
    $oRet = -1;
    $sCadJson = "";
    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
        $manual->setIdM($user['eClave']);
        $manual->setApartado($_REQUEST['apartado']);
        echo $_REQUEST['campo1'];
        $manual->setCampo1($_REQUEST['campo1']);
        $manual->setCampo2($_REQUEST['campo2']);
        $manual->setCampo3($_REQUEST['campo3']);
        if($manual->getApartado() == 4 || $manual->getApartado() == 5){
            $manual->setCampo4($_REQUEST['campo4']);
            $manual->setCampo5($_REQUEST['campo5']);
        }else if($manual->getApartado() == 7){
            $manual->setCampo4($_REQUEST['campo4']);
            $manual->setCampo5($_REQUEST['campo5']);
            $manual->setCampo6($_REQUEST['campo6']);
            $manual->setCampo7($_REQUEST['campo7']);
            $manual->setCampo8($_REQUEST['campo8']);
            $manual->setCampo9($_REQUEST['campo9']);
            $manual->setCampo10($_REQUEST['campo10']);
            $manual->setCampo11($_REQUEST['campo11']);
            $manual->setCampo12($_REQUEST['campo12']);
        }else if($manual->getApartado() == 8){
            $manual->setCampo4($_REQUEST['campo4']);
            $manual->setCampo5($_REQUEST['campo5']);
            $manual->setCampo6($_REQUEST['campo6']);
            $manual->setCampo7($_REQUEST['campo7']);
            $manual->setCampo8($_REQUEST['campo8']);
            $manual->setCampo9($_REQUEST['campo9']);
            $manual->setCampo10($_REQUEST['campo10']);
            $manual->setCampo11($_REQUEST['campo11']);
            $manual->setCampo12($_REQUEST['campo12']);
            $manual->setCampo13($_REQUEST['campo13']);
            $manual->setCampo14($_REQUEST['campo14']);
            $manual->setCampo15($_REQUEST['campo15']);
            $manual->setCampo16($_REQUEST['campo16']);
            $manual->setCampo17($_REQUEST['campo17']);
            $manual->setCampo18($_REQUEST['campo18']);
            $manual->setCampo19($_REQUEST['campo19']);
            $manual->setCampo20($_REQUEST['campo20']);
            $manual->setCampo21($_REQUEST['campo21']);
            $manual->setCampo22($_REQUEST['campo22']);
        }else if($manual->getApartado() == 9){
            $manual->setCampo4($_REQUEST['campo4']);
            $manual->setCampo5($_REQUEST['campo5']);
            $manual->setCampo6($_REQUEST['campo6']);
            $manual->setCampo7($_REQUEST['campo7']);
        }
        
        $oRet = $manual->actualiza();

        if($oRet > -1){
            $sCadJson = '{
                "success":true,
                "error":"Datos actualizados correctamente"
            }';
        }else{
            $sCadJson = '{
                "success":false,
                "error":"Error al ejecutar consulta"
            }';
        }
        header('Location: '.$url.'panel/cd'.$_REQUEST['apartado']);
    }else{
        $sCadJson = '{
            "success":false,
            "error":"sesion no iniciada"
        }';
    }
    header('Content-type: application/json');
    echo $sCadJson;
?>