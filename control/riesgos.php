<?php   
    session_start();
    require_once '../model/riesgos.php';

    class  RiegosController{

        public function RegistraRiesgos(){
            $object = new riesgos();
            if(isset($_SESSION['user']))
                $user = $_SESSION['user'];
            $option = $_GET['option'];
            switch ($option) {
                case 'insert':
                    $object->setActividad($_POST['valor1']);
                    $object->setModoFallo($_POST['valor2']);
                    $object->setEfecto($_POST['valor3']);
                    $object->setSeveridad($_POST['valor4']);
                    $object->setCausa($_POST['valor5']);
                    $object->setOcurrencia($_POST['valor6']);
                    $object->setControl($_POST['valor7']);
                    $object->setDetecta($_POST['valor8']);
                    $object->setPrioritario($_POST['valor9']);
                    $object->setAcciones($_POST['valor10']);
                    $object->setResponsable($_POST['valor11']);
                    $object->setFecha($_POST['valor12']);
                    $object->setAccionesT($_POST['valor13']);
                    $object->setSeveridad1($_POST['valor14']);
                    $object->setOcurrencia2($_POST['valor15']);
                    $object->setDetectab($_POST['valor16']);
                    $object->setPrioritario1($_POST['valor17']);
                    $object->setidempresa($user['eClave']);
                    $object->CreateRiesgos();
                    break;
                case 'update':
                    # code...
                    $object->setIdRiesgo($_POST['idriesgo']);
                    $object->setActividad($_POST['valor1']);
                    $object->setModoFallo($_POST['valor2']);
                    $object->setEfecto($_POST['valor3']);
                    $object->setSeveridad($_POST['valor4']);
                    $object->setCausa($_POST['valor5']);
                    $object->setOcurrencia($_POST['valor6']);
                    $object->setControl($_POST['valor7']);
                    $object->setDetecta($_POST['valor8']);
                    $object->setPrioritario($_POST['valor9']);
                    $object->setAcciones($_POST['valor10']);
                    $object->setResponsable($_POST['valor11']);
                    $object->setFecha($_POST['valor12']);
                    $object->setAccionesT($_POST['valor13']);
                    $object->setSeveridad1($_POST['valor14']);
                    $object->setOcurrencia2($_POST['valor15']);
                    $object->setDetectab($_POST['valor16']);
                    $object->setPrioritario1($_POST['valor17']);
                    $object->updateRiesgos();
                    break;
                case 'delete':
                    # code...
                    $id = $_POST['id'];
                    $object->DeleteRiesgos($id);
                    break;
                case 'idRiesgo':
                    $id = $_POST['id'];
                    $object->readIdRiesgo($id);
                break;
            }
        }
        
    }
    

    $object = new RiegosController();
    $object->RegistraRiesgos();



?>