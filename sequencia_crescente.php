<?php
function sequencia_crescente($array){
    $contador_externo = 0;
    $contador_interno = 0;
    $repeticao = 0;
    $novo = array();
    $result = true;
    while($contador_externo < count($array)){
        while($contador_interno < count($array) ){
            if($array[$contador_externo] == $array[$contador_interno]){
                $repeticao = $repeticao + 1;
            }
            $contador_interno++;
        }
        if($repeticao > 1){
            $reseult = false;
        }
        $contador_externo++;
        $contador_interno = 0;
        $repeticao = 0;
    }

    return $result;
}
    $array_sequencial = [8,7,5,4,3];
    $result = sequencia_crescente($array_sequencial);
    var_dump($result);
    $ordem = false;
	for ($i = 0; $i < count($array_sequencial); $i++){
        if($array_sequencial[$i] <= $array_sequencial[$i++]){
			$ordem = true;
		}else{
			$ordem = false;
		}
	}
    var_dump($ordem);

    if($result == true && $ordem == true){
        $result = 'falso';
    }else{
        $result = 'verdadeiro';
    }

    $exibir = "[";
    foreach($array_sequencial as $sequencial){
        $exibir .= $sequencial ." ";
    }
    print_r("$exibir] = $result \n");
?>