<?php
    include 'conexion.php';
    include 'Direcciones.php';
    class Empresa extends Direcciones{
        private $idEmpresa = " ";
        private $sEmpresa = " ";
        private $sVision = " ";
        private $sMision = " ";
        private $sLogo = " ";
//------------------------- Set's -------------------------------
        public function setId($val){
            $this->idEmpresa = $val;
        }
        public function setEmpresa($val){
            $this->sEmpresa = $val;
        }
        public function setVision($val){
            $this->sVision = $val;
        }
        public function setMision($val){
            $this->sMision = $val;
        }
        public function setLogo($val){
            $this->sLogo = $val;
        }
//------------------------- Get's --------------------------------
        public function getId(){
            return $this->idEmpresa;
        }
        public function getEmpresa(){
            return $this->sEmpresa;
        }
        public function getVision(){
            return $this->sVision;
        }
        public function getMision(){
            return $this->sMision;
        }
        public function getLogo(){
            return $this->sLogo;
        }
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        public function ObtenerEmpresa($uClave){
            $oConexion = new conexion();
            $sDatos = null;
            $Sql = "SELECT e.empresa, e.vision, e.mision, e.logo, d.calle, d.ciudad, d.colonia, d.estado, d.municipio FROM Usuarios u INNER JOIN Empresas e on e.id_empresa=u.id_empresa INNER JOIN Direcciones d on d.id_dir=e.id_dir AND u.id_user='".$uClave."'";
            if($oConexion->conecta()){
                $sDatos = $oConexion->ejecutaConsulta($Sql);
                $this->setEmpresa($sDatos[0][0]);
                $this->setVision($sDatos[0][1]);
                $this->setMision($sDatos[0][2]);
                $this->setLogo($sDatos[0][3]);
                $this->setCalle($sDatos[0][4]);
                $this->setCiudad($sDatos[0][5]); 
                $this->setColonia($sDatos[0][6]);
                $this->setEstado($sDatos[0][7]);
                $this->setMunicipio($sDatos[0][8]);
                $oConexion->desconecta();
            }
        }
//--------------------------------------------------------------------------------
public function modificar($ac){
    $oConexion = new conexion();
    $oRes = -1;
    $sQuery ='';
    if($ac == 'si'){
    $sQuery = "UPDATE Empresas SET empresa='".$this->sEmpresa."', vision='".$this->sVision."',
        mision='".$this->sMision."',logo='".$this->sLogo."' WHERE id_empresa='".$this->idEmpresa."'";
    }else{
        $sQuery = "UPDATE Empresas SET empresa='".$this->sEmpresa."', vision='".$this->sVision."',
        mision='".$this->sMision."' WHERE id_empresa='".$this->idEmpresa."'";
    } 
    if($oConexion->conecta()){
        $oRes = $oConexion->ejecutarComando($sQuery);
        if($oRes >= 0){
            $oRes = $this->mDireccion();
            if($oRes >=0 ){
                $oRes = 200;
            }else{
                $oRes = -5;
            }
        }else{
            $oRes = -2;
        }
    }else{
        $oRes = -5;
    }
    return $oRes;
}
    }
?>