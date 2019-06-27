<?php
include 'conexion.php';
require_once 'Direcciones.php';
class Usuario extends Direcciones{
    private $idUser;
    private $sPassword;
    private $sUser;
    private $sTipo;
    private $sNombre;
    private $sApp;
    private $sApm;
    private $sPuesto;
    private $sTelefono;
    private $sNacimiento;
    private $sFoto;
//+++++++++++++++++++++++++++ Asignacion de valores a las variables++++++++++++++++++++++++++++++
    function setUser($valor){
        $this->sUser = $valor;
    }
    function setPassword($valor){
        $this->sPassword = $valor;
    }
    function setNombre($valor){
        $this->sNombre = $valor;
    }
    function setApp($valor){
        $this->sApp = $valor;
    }
    function setApm($valor){
        $this->sApm = $valor;
    }
    function setTelefono($valor){
        $this->sTelefono = $valor;
    }
    function setIdUser($valor){
        $this->idUser = $valor;
    }
    function setPuesto($valor){
        $this->sPuesto = $valor;
    }
    function setNacimiento($valor){
        $this->sNacimiento = $valor;
    }
    function setImagen($valor){
        $this->sFoto = $valor;
    }
//+++++++++++++++++++++++++++++++ Retorno de variables +++++++++++++++++++++++++++++++++++++++++
    function getUser(){
        return $this->sUser;
    }
    function getIdUser(){
        return $this->idUser;
    }
    function getPassword(){
        return $this->sPassword;
    }
    function getNombre(){
        return $this->sNombre;
    }
    function getApp(){
        return $this->sApp;
    }
    function getApm(){
        return $this->sApm;
    }
    function getTelefono(){
        return $this->sTelefono;
    }
    function getDireccion(){
        return $this->sDir;
    }
    function getNacimiento(){
        return $this->sNacimiento;
    }
    function getImagen(){
        return $this->sFoto;
    }
    function getPuesto(){
        return $this->sPuesto;
    }
//+++++++++++++++++++++ Funcion para verificar si el correo ya esta registrado +++++++++++++++++++++++
    function buscarEmail($correo){
        $b = false;
        $oConexion = new conexion();
        if($oConexion->conecta()){
            $sQuery = "SELECT * FROM Usuarios WHERE email='".$correo."'";
            $oDatos = $oConexion->ejecutaConsulta($sQuery);
            if($oDatos)
                $b = true;
        }
        $oConexion->desconecta();
        return $b;
    }
//++++++++++++++++++++++++++++  Verificacion del usuario ++++++++++++++++++++++++++++++++++++++++++    
    function buscarUser(){
        $oConexion = new conexion();
        $Data = null;
        if($oConexion->conecta()){
            $sQuery = "SELECT * FROM Usuarios WHERE email='".$this->sUser."' AND password='".$this->sPassword."'";
            $oDatos = $oConexion->ejecutaConsulta($sQuery);
            if($oDatos){
                $id = $oDatos[0][0];
                $sQuery = "SELECT a.id_user,a.tipo,a.id_empresa,b.id_datos,b.nombre,b.ape_pa,b.ape_ma,b.puesto,b.telefono,b.nacido,b.foto,b.id_dir,c.calle,c.colonia,c.ciudad,c.municipio,c.estado,a.email FROM Usuarios a inner JOIN DatosUsuario b on a.id_user=b.id_user INNER JOIN Direcciones c on c.id_dir=b.id_dir";
                $oDatos = $oConexion->ejecutaConsulta($sQuery);
                if($oDatos)
                    $Data = $oDatos;
                else
                    $Data = "error";
            }else{
                $Data = null;
            }
            $oConexion->desconecta();
        }else{
            $Data = null;
        }

        return $Data;
    }
//+++++++++++++++++++++++++++  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
public function ObtenerUsuario($uClave){
    $oConexion = new conexion();
    $sDatos = null;
    $Sql = "SELECT d.nombre, d.ape_pa, d.ape_ma, d.puesto, d.telefono, d.nacido, d.foto, a.calle, a.colonia, a.ciudad, a.municipio, a.estado FROM DatosUsuario d INNER JOIN Direcciones a on a.id_dir=d.id_dir AND d.id_user='".$uClave."'";
    if($oConexion->conecta()){
        $sDatos = $oConexion->ejecutaConsulta($Sql);
        $this->setNombre($sDatos[0][0]);
        $this->setApp($sDatos[0][1]);
        $this->setApm($sDatos[0][2]);
        $this->setPuesto($sDatos[0][3]);
        $this->setTelefono($sDatos[0][4]);
        $this->setNacimiento($sDatos[0][5]); 
        $this->setImagen($sDatos[0][6]);
        $this->setCalle($sDatos[0][7]);
        $this->setCiudad($sDatos[0][9]); 
        $this->setColonia($sDatos[0][8]);
        $this->setEstado($sDatos[0][11]);
        $this->setMunicipio($sDatos[0][10]);
        $oConexion->desconecta();
    }
}
//+++++++++++++++++++++++++++++++++++++++++++++++++
        public function modificar($ac){
            $oConexion = new conexion();
            $oRes = -1;
            $sQuery ='';
            if($ac == 'si'){
            $sQuery = "UPDATE DatosUsuario SET nombre='".$this->sNombre."',ape_pa='".$this->sApp."', 
            ape_ma='".$this->sApm."', puesto='".$this->sPuesto."',telefono='".$this->sTelefono."', 
            nacido='".$this->sNacimiento."',foto='".$this->sFoto."' WHERE id_user='".$this->idUser."'";
            }else{
                $sQuery = "UPDATE DatosUsuario SET nombre='".$this->sNombre."',ape_pa='".$this->sApp."', 
                ape_ma='".$this->sApm."', puesto='".$this->sPuesto."',telefono='".$this->sTelefono."', 
                nacido='".$this->sNacimiento."' WHERE id_user='".$this->idUser."'";
            }
            if($oConexion->conecta()){
                $oRes = $oConexion->ejecutarComando($sQuery);
                if($oRes > 0){
                    $oRes = $this->mDireccion();
                    if($oRes >0 ){
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
//++++++++++++++++++++++++++++++++++++++++++++++ Registrar nueva cuenta +++++++++++++++++++++++++++++++
        public function cuentaAdmin($empresa){
            $oConexion = new conexion();
            $oRes = -1;

            ///      Sentencia SQL para agregar direccion de la empresa
            $sQuery = "INSERT INTO Direcciones(id_dir) VALUES ('".$empresa."');
                       INSERT INTO Direcciones(id_dir) VALUES ('".$this->sIdDir."');
                       INSERT INTO Empresas(id_empresa, id_dir) VALUES('".$empresa."', '".$empresa."');
                       INSERT INTO Usuarios(id_user, email, password, tipo, id_empresa) VALUES ('".$this->idUser."','".$this->sUser."','".$this->sPassword."','admin','".$empresa."');
                       INSERT INTO Manual(id_manual, id_empresa) VALUES ('".$empresa."','".$empresa."');
                       INSERT INTO Apartado4(id_manual) VALUES ('".$empresa."');
                       INSERT INTO Apartado5(id_manual) VALUES ('".$empresa."');
                       INSERT INTO Apartado6(id_manual) VALUES ('".$empresa."');
                       INSERT INTO Apartado7(id_manual) VALUES ('".$empresa."');
                       INSERT INTO Apartado8(id_manual) VALUES ('".$empresa."');
                       INSERT INTO Apartado9(id_manual) VALUES ('".$empresa."');
                       INSERT INTO Apartado10(id_manual) VALUES ('".$empresa."');";

            if($oConexion->conecta()){
                    $oRes = $oConexion->ejecutarComando($sQuery);
                    if($oRes > -1){
                        $sQuery = "INSERT INTO DatosUsuario(nombre, ape_pa, ape_ma, nacido, foto, id_user, id_dir)
                                     VALUES ('".$this->sNombre."','".$this->sApp."','".$this->sApm."',
                                    '".$this->sNacimiento."','images/user.png','".$this->idUser."','".$this->getIdDir()."')";
                        $oRes = $oConexion->ejecutarComando($sQuery);
                    }
                    $oConexion->desconecta();
                }
            
            return $oRes;
        }
//++++++++++++++++++++++++++++++++++++++  Verificar si existe empresa ++++++++++++++++++++++++++++++

        public function ClaveE($id){
            $oConexion = new conexion();
            $b = false;
            $sQuery ="SELECT * FROM Empresas WHERE id_empresa='".$id."'";
            if($oConexion->conecta()){
                $oDatos = $oConexion->ejecutaConsulta($sQuery);
                if($oDatos)
                    $b = true;
            }
            $oConexion->desconecta();
            return $b;
        }

//+++++++++++++++++++++++++++++++++++++ Crear cuenta empleado +++++++++++++++++++++++++++++++++++++
        
        public function CuentaEmple($clave){
            $oConexion = new conexion();
            $oRes = -1;
            $sQuery = "INSERT INTO Direcciones(id_dir) VALUES ('".$this->sIdDir."');
                       INSERT INTO Usuarios(id_user, email, password, tipo, id_empresa) VALUES ('".$this->idUser."','".$this->sUser."','".$this->sPassword."','empleado','".$clave."');
                       INSERT INTO DatosUsuario(nombre, ape_pa, ape_ma, nacido, foto, id_user, id_dir)
                                     VALUES ('".$this->sNombre."','".$this->sApp."','".$this->sApm."',
                                    '".$this->sNacimiento."','images/user.png','".$this->idUser."','".$this->getIdDir()."')";
            if($oConexion->conecta()){
                $oRes = $oConexion->ejecutarComando($sQuery);
            }
            $oConexion->desconecta();
            return $oRes;
        }

}
?>