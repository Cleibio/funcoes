<?php
    Function primos($inicial,$final){
        $primos = array();
        while($inicial < $final){
            $quant_divisores = 0;
            for($contador = 2; $contador <= $inicial;$contador++){
                if($inicial % $contador == 0){
                    $quant_divisores++;
                }
            }
            if($quant_divisores < 2){
                array_push($primos,$inicial);
            }
            $inicial++;
        }
        return $primos;
    } 
    print('Array: ['. implode(' ',$array_primos = primos(10,29)).']');
?>
