<?php

 
class Vehiculo {
    //clase pricipal
    public function predecir($numPlaca, $fecha, $hora) {
        date_default_timezone_set('America/Guayaquil'); 
        $dia = date("w", strtotime($fecha)); 
        $ultimoDigito = $numPlaca[6]; 
        $q= 1; 
        $w = 2; 
         
         
        $arrayRespuesta['restriccion'] = "No";
    
        if ( strlen($numPlaca) < 7 ) // Bad Request Example
       {
        echo 'The length of the vehicle plate must be 7 characters'; 
        http_response_code(404);
       
        die();

       }
        
        if ($dia ==6 || $dia == 0) // weekend 
        {
            $arrayRespuesta['restriccion'] = "No";
             
        }
        elseif ($ultimoDigito == 0 || $ultimoDigito == 9)
        { 
            if($dia == 5)
            {  
                $arrayRespuesta['restriccion'] = "Si";
                
            }
           echo 'mensaje de prueba';
        }
        else 
        {
         
            for ($i = 1; $i < 5; $i++) {
                
                    if ($ultimoDigito == $q || $ultimoDigito == $w) 
                    {
                         $contador= $i;  
                    }
                
                $q = $q + 2;
                $w = $w + 2;
            }
        }
        if($dia == $contador)  {
             
            if ($hora >= "07:00" && $hora <= "09:30") {
                $arrayRespuesta['restriccion'] = "Si";
                
            } else {
                if ($hora >= "16:00" && $hora <= "19:30") {
                    $arrayRespuesta['restriccion'] = "Si";
                    
                } else {
                    $arrayRespuesta['restriccion'] = "No";
                    
                }
            }
         
        }
        

         
        $arrayRespuesta['numPlaca'] = $numPlaca;
       
        return $arrayRespuesta;
    }
    }

 
