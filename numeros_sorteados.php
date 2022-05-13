<?php
    function quant_numeros(){
        $array_numeros_sorteados = array();
        while(count($array_numeros_sorteados) < 20){
            $num_sorteado = rand(1,10);
            array_push($array_numeros_sorteados,$num_sorteado); 
        }
        return $array_numeros_sorteados;
    }
    $array_numeros = quant_numeros();
    $contador_externo = 0;
    $contador_interno = 0;
    $repeticao = 0;
    $novo_array = array();
    while($contador_externo < count($array_numeros)){
        while($contador_interno < count($array_numeros) ){
            if($array_numeros[$contador_externo] == $array_numeros[$contador_interno]){
                $repeticao = $repeticao + 1;
            }
            $contador_interno++;
        }
        if($repeticao == 1){
            array_push($novo_array,$array_numeros[$contador_externo]);
        }
        $contador_externo++;
        $contador_interno = 0;
        $repeticao = 0;
    }
 print('Array sorteado = ['.implode(' ',$array_numeros)."]\n".'Array com número(s) não repetido(s) = ['.implode(' ',$novo_array).']');   
?>
