<?php

function seculo_ano($ano){
    if(substr($ano,-2) == 00){
        return $ano = substr($ano,0,-2);
    }
    return $ano = (substr($ano,0,-2)) + 1;
}

print('Século: '.seculo_ano(2000));

?>