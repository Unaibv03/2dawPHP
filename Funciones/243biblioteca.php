<?php
declare(strict_types=1);
function suma(...$entrada): float|int {//variadic
    $resultado=0;
    foreach($entrada as $valor){
        $resultado+=$valor;
        
    }
    return $resultado;
}

function restar($num1=0, $num2 = 0): float|int{
    return $num1 - $num2;
}

function dividir($num1, $num2=0){
    return $num1/$num2;
}

function multiplicar($num1, $num2){
    return $num1*$num2;
}

?>