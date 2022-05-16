<?php
function teste($array){
    $contador = 0;
    $proximo_indice = 1;
    $desordem = 0;
    //Se desordem for maoir que 1, não há mais necessidade de continuar percorrendo o array.
    while($contador < count($array)-1 && $desordem < 2){
        if($array[$contador] >= $array[$proximo_indice]){
            $desordem += 1;
        }
        $contador++;
        $proximo_indice++;
    }

    if($desordem > 1){
        return false;
    }else{
        return true;
    }
}

$array = [2,3,4,5,1];
$sequencia = teste($array);
print($sequencia == true ? "Verdadeiro" : "Falso");
?>
