<?php

    $base = 0;
    $exp= 1;
    $resultado=$base;
    $contador=1;
    
    if($base>0&&$exp>0){//Ejemplo en el que los dos valores son positivos y mayores de 1.

        do{
            $resultado = $resultado * $base;
            $contador++;
        }
        while($contador<$exp);
        
    }

    //Ejemplo con la base negativa

    if($base<0){

        do{
            $resultado = $resultado * $base;
            $contador++;
        }
        while($contador<$exp);

    }

    if($base>0&&$exp==0){//Ejemplo con exponente a cero

        $resultado=1;

    }

    //Ejemplo en el que el exponente es negativo

    if($exp<0&&$base>0){

        $AbsExp=abs($exp);
        do{
            $resultado = $resultado * $base;
            $contador++;
        }
        while($contador<$exp);

    }

    //Base a cero
    if($base==0){
        $resultado=0;
    }

    echo "Resultado: $resultado";

?>