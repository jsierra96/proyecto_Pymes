<?php
    
        function contador(){
            $archivo = "contador.txt"; 
            $contador = 0; 

            $fp = fopen($archivo,"r"); 
            $contador = fgets($fp, 26); 
            fclose($fp); 

            ++$contador; 

            $fp = fopen($archivo,"w+"); 
            fwrite($fp, $contador, 26); 
            fclose($fp); 
            return $contador;
        }
?>