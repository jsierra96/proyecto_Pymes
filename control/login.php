<?php 
    session_start();
    include '../model/Usuario.php';
    $sUsuario = new Usuario();
    $sUsuario->setUser($_REQUEST['usuario']);
    $sUsuario->setPassword($_REQUEST['password']);
    $Json = '';
    $res = $sUsuario->buscarUser();
    if($res){
        $id = $res[0][2];
        $user = array("uClave"=>$res[0][0],"eClave"=>$res[0][2],"dClave"=>$res[0][3],"dir"=>$res[0][11],
            "tipo"=>$res[0][1],"nombre"=>$res[0][4],"paterno"=>$res[0][5],"materno"=>$res[0][6],"puesto"=>$res[0][7],
            "telefono"=>$res[0][8],"fecha"=>$res[0][9],"foto"=>$res[0][10],"calle"=>$res[0][12],"colonia"=>$res[0][13],
            "ciudad"=>$res[0][14],"municipio"=>$res[0][15],"estado"=>$res[0][16],"email"=>$res[0][17]);
        $_SESSION['user']=$user;

        $res = $sUsuario->dEmpresa($id);
        $empresa = array("logo"=>$res[0][1], "nombre"=>$res[0][0]);
        $_SESSION['pyme']=$empresa;
        $Json = '{
            "success": true,
            "respuesta": "exitoso"
        }';
    }else{
        $Json = '{
            "success": false,
            "respuesta": "El usuario invalido"
        }';
    }
    header('Content-type: application/json');
    echo $Json;
?>