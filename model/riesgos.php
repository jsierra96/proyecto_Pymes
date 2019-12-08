<?php

require_once 'conexion.php';
class riesgos
{

    private $idriesgo = "";
    private $Actividad = "";
    private $ModoFallo = "";
    private $Efecto = "";
    private $Severidad = "";
    private $Cusasn = "";
    private $Ocurrencia = "";
    private $Control = "";
    private $Detecta = "";
    private $Prioritario = "";
    private $Acciones = "";
    private $Responsable = "";
    private $Fecha = "";
    private $AccionesT = "";
    private $Severidad1 = "";
    private $Ocurrencia2 = "";
    private $Detectab = "";
    private $Prioritario1 = "";
    private $idempresa = "";

//+++++++++++++++++++++++++++ Asignacion de valores a las variables++++++++++++++++++++++++++++++

    public function setIdRiesgo($valor)
    {
        $this->idriesgo= $valor;
    }
    public function setActividad($valor)
    {
        $this->Actividad = $valor;
    }

    public function setModoFallo($valor)
    {
        $this->ModoFallo = $valor;
    }

    public function setEfecto($valor)
    {
        $this->Efecto = $valor;
    }
    public function setSeveridad($valor)
    {
        $this->Severidad = $valor;
    }
    public function setCausa($valor)
    {
        $this->Cusasn=$valor;
    }
    public function setOcurrencia($valor)
    {
        $this->Ocurrencia = $valor;
    }
    public function setControl($valor)
    {
        $this->Control = $valor;
    }
    public function setDetecta($valor)
    {
        $this->Detecta = $valor;
    }
    public function setPrioritario($valor)
    {
        $this->Prioritario = $valor;
    }
    public function setAcciones($valor)
    {
        $this->Acciones = $valor;
    }
    public function setResponsable($valor)
    {
        $this->Responsable = $valor;
    }
    public function setFecha($valor)
    {
        $this->Fecha = $valor;
    }
    public function setAccionesT($valor)
    {
        $this->AccionesT = $valor;
    }
    public function setSeveridad1($valor)
    {
        $this->Severidad1 = $valor;
    }
    public function setOcurrencia2($valor)
    {
        $this->Ocurrencia2 = $valor;
    }
    public function setDetectab($valor)
    {
        $this->Detectab = $valor;
    }
    public function setPrioritario1($valor)
    {
        $this->Prioritario1 = $valor;
    }
    public function setidempresa($valor)
    {
        $this->idempresa = $valor;
    }

//+++++++++++++++++++++++++++++++ Retorno de variables +++++++++++++++++++++++++++++++++++++++++


    public function getIdRiesgo()
    {
        $this->idriesgo;
    }
    public function getActividad()
    {
        return $this->Actividad;
    }
    public function getModoFallo()
    {
        return $this->ModoFallo;
    }
    public function getEfecto()
    {
        return $this->Efecto;
    }
    public function getSeveridad()
    {
        $this->Severidad;
    }
    public function getCausa()
    {
        return $this->Cusasn;
    }
    public function getOcurrencia()
    {
        return $this->Ocurrencia;
    }
    public function getControl()
    {
        return $this->Control;
    }
    public function getDetecta()
    {
        return $this->Detecta;
    }
    public function getPrioritario()
    {
        return $this->Prioritario;
    }
    public function getAcciones()
    {
        return $this->Acciones;
    }
    public function getResponsable()
    {
        return $this->Responsable;
    }
    public function getFecha()
    {
        return $this->Fecha;
    }
    public function getAccionesT()
    {
        return $this->AccionesT;
    }
    public function getSeveridad1()
    {
        return $this->Severidad1;
    }
    public function getOcurrencia2()
    {
        return $this->Ocurrencia2;
    }
    public function getDetectab()
    {
        return $this->Detectab;
    }
    public function getPrioritario1()
    {
        return $this->Prioritario1;
    }
    public function getidempresa()
    {
        return $this->idempresa;
    }

//+++++++++++++++++++++++++++ Crud de nuesta aplicacion ++++++++++++++++++++++++++++++

    public function CreateRiesgos()
    {
        $oConexion = new conexion();
        $query = "INSERT INTO Riesgos (`Actividad`, `ModoFallo`, `Efecto`, `Severidad`, `Causa`, `Ocurrencia`, `Control`,
            `Detecta`, `Prioritario`, `Acciones`, `Responsable`, `Fecha`, `AccionesT`, `Severidad1`, `Ocurrencia2`, `Detectab`,
             `Prioritario1`, `id_empresa`) VALUES
             ('" .$this->Actividad . "','" . $this->ModoFallo . "','" . $this->Efecto . "','" . $this->Severidad . "',
             '".$this->Cusasn."','" . $this->Ocurrencia . "','" . $this->Control . "','" . $this->Detecta . "','" . $this->Prioritario . "',
             '".$this->Acciones ."','" . $this->Responsable . "','" . $this->Fecha . "','" . $this->AccionesT . "','" . $this->Severidad1 . "',
             '".$this->Ocurrencia2 ."','" . $this->Detectab . "','" . $this->Prioritario1 . "','" . $this->idempresa . "')";

        if ($oConexion->conecta()) {
            $oRes = $oConexion->ejecutarComando($query);
            if($oRes >= 0){
                return printf(json_encode(array('accion'=>'valido')));
            }else{
                return printf(json_encode(array('accion'=>'invalido')));
            }
        }
         $oConexion->desconecta();
    }

    public function updateRiesgos()
    {
        # code...
        $oConexion = new conexion();
        $query = "UPDATE Riesgos SET Actividad='".$this->Actividad."',
        ModoFallo='".$this->ModoFallo."',Efecto='".$this->Efecto."',
        Severidad='".$this->Severidad."',
        Causa='".$this->Cusasn."',
        Ocurrencia='".$this->Ocurrencia."',Control='".$this->Control."',
        Detecta='".$this->Detecta."', Prioritario='".$this->Prioritario."',
        Acciones='".$this->Acciones."',
        Responsable='". $this->Responsable."',Fecha='".$this->Fecha."',
        AccionesT='".$this->AccionesT."',Severidad1='".$this->Severidad1."', Ocurrencia2='".$this->Ocurrencia2 ."',
        Detectab='".$this->Detectab."', Prioritario1='".$this->Prioritario1."'  WHERE id_riesgo='".$this->idriesgo."' ";
        if ($oConexion->conecta()) {
            $oRes = $oConexion->ejecutarComando($query);
            if($oRes >= 0){
                return printf(json_encode(array('accion'=>'valido')));
            }else{
                return printf(json_encode(array('accion'=>'invalido')));
            }
        }
         $oConexion->desconecta();
    }

    public function DeleteRiesgos($id)
    {
        # code...
        $oConexion = new conexion();
        $query = "DELETE FROM Riesgos WHERE id_riesgo=" . $id;
        if ($oConexion->conecta()) {
            $oRet = $oConexion->ejecutarComando($query);
            if ($oRet) {
                return printf(json_encode(array('action' => 'success')));
            } else {
                return printf(json_encode(array('action' => 'error')));
            }
            $oConexion->desconecta();
        }
    }

    public function readIdRiesgo($id){
        //printf($id);
        $consult = new conexion();         
            if($consult->conecta()){
                $sql ="SELECT `id_riesgo`, `Actividad`, `ModoFallo`, `Efecto`, `Severidad`, `Causa`, `Ocurrencia`, `Control`, `Detecta`, `Prioritario`, `Acciones`, `Responsable`, `Fecha`, `AccionesT`, `Severidad1`, `Ocurrencia2`, `Detectab`, `Prioritario1`, `id_empresa` FROM `Riesgos` WHERE id_riesgo=".$id." ORDER BY id_riesgo";
                $sDatos = $consult->ejecutaConsulta($sql);
                return printf(json_encode($sDatos));
            }
    }

}
