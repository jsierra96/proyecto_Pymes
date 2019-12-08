<?php
    require_once 'conexion.php';
    class Direcciones{
        protected $sIdDir = " ";
        protected $sCalle = " ";
        protected $sColonia = " ";
        protected $sCiudad = " ";
        protected $sMunicipio = " ";
        protected $sEstado = " ";

        public function setIdDir($val){
            $this->sIdDir = $val;
        }
        public function setCalle($val){
            $this->sCalle = $val;
        }
        public function setColonia($val){
            $this->sColonia = $val;
        }
        public function setCiudad($val){
            $this->sCiudad = $val;
        }
        public function setMunicipio($val){
            $this->sMunicipio = $val;
        }
        public function setEstado($val){
            $this->sEstado = $val;
        }
//+++++++++++++++++++++++++++++++++++ Gets +++++++++++++++++++++++++++++++++++++//
        public function getIdDir(){
            return $this->sIdDir;
        }
        public function getCalle(){
            return $this->sCalle;
        }
        public function getColonia(){
            return $this->sColonia;
        }
        public function getCiudad(){
            return $this->sCiudad;
        }
        public function getMunicipio(){
            return $this->sMunicipio;
        }
        public function getEstado(){
            return $this->sEstado;
        }
        public function getDireccion(){
            if($this->sMunicipio == $this->sCiudad)
                return $this->sCalle." ".$this->sColonia." ".$this->sMunicipio." ".$this->sEstado;
            else
                return $this->sCalle." ".$this->sColonia." ".$this->sCiudad." ".$this->sMunicipio." ".$this->sEstado;
        }
//+++++++++++++++++++++++++++++++ Modificar Direccion +++++++++++++++++++++++++++//
        public function mDireccion(){
            $oConexion = new conexion();
            $oRes = -1;
            $sQuery = "UPDATE Direcciones SET calle='".$this->sCalle."',colonia='".$this->sColonia."',
            ciudad='".$this->sCiudad."',municipio='".$this->sMunicipio."',estado='".$this->sEstado."'
             WHERE id_dir='".$this->sIdDir."'";
            if($oConexion->conecta()){
                $oRes = $oConexion->ejecutarComando($sQuery);
                if($oRes >= 0){
                    $oRes = 3;
                }else{
                    $oRes = -2;
                }
            }else{
                $oRes = -5; //-5 utilizar para saber que no hubo conexion con la base
            }
            return $oRes;
        }
//++++++++++++++++++++++++++  Insertar Direccion  +++++++++++++++++++++++++++++++++++++++
        public function insertarDir(){
            $oConexion = new conexion();
            $oRes = -1;
            $sQuery = "INSERT INTO Direcciones(id_dir, calle, colonia, ciudad, municipio, estado)
                     VALUES ('".$this->sIdDir."','".$this->sCalle."','".$this->sColonia."','".$this->sCiudad."','".$this->sMunicipio."','".$this->sEstado."')";
            if($oConexion->conecta()){
                $oRes = $oConexion->ejecutarComando($sQuery);
                if($oRes >= 0){
                    $oRes = 3;
                }else{
                    $oRes = -2;
                }
            }else{
                $oRes = -5; //-5 utilizar para saber que no hubo conexion con la base
            }
            return $oRes;
        }
    }
?>