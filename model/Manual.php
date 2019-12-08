<?php
    include 'conexion.php';
    class manual{
        private $manual;
        private $apartado;
        private $campo1;
        private $campo2;
        private $campo3;
        private $campo4;
        private $campo5;
        private $campo6;
        private $campo7;
        private $campo8;
        private $campo9;
        private $campo10;
        private $campo11;
        private $campo12;
        private $campo13;
        private $campo14;
        private $campo15;
        private $campo16;
        private $campo17;
        private $campo18;
        private $campo19;
        private $campo20;
        private $campo21;
        private $campo22;
//+++++++++++++++++++++++++++++++++++++++++++  creacion de Set´s +++++++++++++++++++++++++++++++++++++++
        function setIdM($valor){
            $this->manual = $valor;
        }
        function setApartado($valor){
            $this->apartado = $valor;
        }
        function setCampo1($valor){
            $this->campo1 = $valor;
        }
        function setCampo2($valor){
            $this->campo2 = $valor;
        }
        function setCampo3($valor){
            $this->campo3 = $valor;
        }
        function setCampo4($valor){
            $this->campo4 = $valor;
        }
        function setCampo5($valor){
            $this->campo5 = $valor;
        }
        function setCampo6($valor){
            $this->campo6 = $valor;
        }
        function setCampo7($valor){
            $this->campo7 = $valor;
        }
        function setCampo8($valor){
            $this->campo8 = $valor;
        }
        function setCampo9($valor){
            $this->campo9 = $valor;
        }
        function setCampo10($valor){
            $this->campo10 = $valor;
        }
        function setCampo11($valor){
            $this->campo11 = $valor;
        }
        function setCampo12($valor){
            $this->campo12 = $valor;
        }
        function setCampo13($valor){
            $this->campo13 = $valor;
        }
        function setCampo14($valor){
            $this->campo14 = $valor;
        }
        function setCampo15($valor){
            $this->campo15 = $valor;
        }
        function setCampo16($valor){
            $this->campo16 = $valor;
        }
        function setCampo17($valor){
            $this->campo17 = $valor;
        }
        function setCampo18($valor){
            $this->campo18 = $valor;
        }
        function setCampo19($valor){
            $this->campo19 = $valor;
        }
        function setCampo20($valor){
            $this->campo20 = $valor;
        }
        function setCampo21($valor){
            $this->campo21 = $valor;
        }
        function setCampo22($valor){
            $this->campo22 = $valor;
        }
//+++++++++++++++++++++++++++++++++++++++++++ retorno de variables +++++++++++++++++++++++++++++++++++++++++++++
        function getIdM(){
            return $this->manual;
        }
        function getApartado(){
            return $this->apartado;
        }
        function getCampo1(){
            return $this->campo1;
        }
        function getCampo2(){
            return $this->campo2;
        }
        function getCampo3(){
            return $this->campo3;
        }
        function getCampo4(){
            return $this->campo4;
        }
        function getCampo5(){
            return $this->campo5;
        }
        function getCampo6(){
            return $this->campo6;
        }
        function getCampo7(){
            return $this->campo7;
        }
        function getCampo8(){
            return $this->campo8;
        }
        function getCampo9(){
            return $this->campo9;
        }
        function getCampo10(){
            return $this->campo10;
        }
        function getCampo11(){
            return $this->campo11;
        }
        function getCampo12(){
            return $this->campo12;
        }
        function getCampo13(){
            return $this->campo13;
        }
        function getCampo14(){
            return $this->campo14;
        }
        function getCampo15(){
            return $this->campo15;
        }
        function getCampo16(){
            return $this->campo16;
        }
        function getCampo17(){
            return $this->campo17;
        }
        function getCampo18(){
            return $this->campo18;
        }
        function getCampo19(){
            return $this->campo19;
        }
        function getCampo20(){
            return $this->campo20;
        }
        function getCampo21(){
            return $this->campo21;
        }
        function getCampo22(){
            return $this->campo22;
        }
//++++++++++++++++++++++++++++++++++++++++++ update´s en apartados ++++++++++++++++++++++++++++++++++++++++++++
        function actualiza(){
            $oConexion = new conexion();
            $sQuery = "";
            $oRet = -1;
            if($this->apartado == 4){
                $sQuery = "UPDATE Apartado4 SET 4_op1='".$this->campo1."',4_op2='".$this->campo2."',
                    4_op3='".$this->campo3."',4_op4='".$this->campo4."',4_op5='".$this->campo5."' WHERE id_manual='".$this->manual."';";
            }else if($this->apartado == 5){
                $sQuery = "UPDATE Apartado5 SET 5_op1='".$this->campo1."',5_op2='".$this->campo2."',
                    5_op3='".$this->campo3."',5_op4='".$this->campo4."',5_op5='".$this->campo5."' WHERE id_manual='".$this->manual."';";
            }else if($this->apartado == 6){
                $sQuery = "UPDATE Apartado6 SET 6_op1='".$this->campo1."',6_op2='".$this->campo2."',6_op3='".$this->campo3."' WHERE id_manual='".$this->manual."';";
            }else if($this->apartado == 7){
                $sQuery = "UPDATE Apartado7 SET 7_op1='".$this->campo1."',7_op2='".$this->campo2."',7_op3='".$this->campo3."',
                    7_op4='".$this->campo4."',7_op5='".$this->campo5."',7_op6='".$this->campo6."',7_op7='".$this->campo7."',
                    7_op8='".$this->campo8."',7_op9='".$this->campo9."',7_op10='".$this->campo10."',7_op11='".$this->campo11."',
                    7_op12='".$this->campo12."' WHERE id_manual='".$this->manual."';";
            }else if($this->apartado == 8){
                $sQuery = "UPDATE Apartado8 SET 8_op1='".$this->campo1."',8_op2='".$this->campo2."',8_op3='".$this->campo3."',
                    8_op4='".$this->campo4."',8_op5='".$this->campo5."',8_op6='".$this->campo6."',8_op7='".$this->campo7."',
                    8_op8='".$this->campo8."',8_op9='".$this->campo9."',8_op10='".$this->campo10."',8_op11='".$this->campo11."',
                    8_op12='".$this->campo12."', 8_op13='".$this->campo13."', 8_op14='".$this->campo14."', 8_op15='".$this->campo15."',
                    8_op16='".$this->campo16."', 8_op17='".$this->campo17."', 8_op18='".$this->campo18."', 8_op19='".$this->campo19."',
                    8_op20='".$this->campo20."', 8_op21='".$this->campo21."', 8_op22='".$this->campo22."' WHERE id_manual='".$this->manual."';";
            }else if($this->apartado == 9){
                $sQuery = "UPDATE Apartado9 SET 9_op1='".$this->campo1."', 9_op2='".$this->campo2."',9_op3='".$this->campo3."',
                    9_op4='".$this->campo4."',9_op5='".$this->campo5."',9_op6='".$this->campo6."',9_op7='".$this->campo7."'
                    WHERE id_manual='".$this->manual."';";
            }else if($this->apartado == 10){
                $sQuery = "UPDATE Apartado10 SET 10_op1='".$this->campo1."', 10_op2='".$this->campo2."',
                    10_op3='".$this->campo3."' WHERE id_manual='".$this->manual."';";
            }
            //echo $sQuery;
            if($oConexion->conecta()){
                $oRet = $oConexion->ejecutarComando($sQuery);
                $oConexion->desconecta();
            }
            return $oRet;
        }

    }
?>