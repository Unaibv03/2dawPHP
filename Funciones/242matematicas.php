<?php

declare(strict_types=1);

$cantidad = 5545235;

function digitos(int $a) : int {

    $numeroDigitos=0;

    while($a > 0){//mientras sea mayor de uno lo sigues dividiendo

        $a=intdiv($a, 10); //insdiv es una función para dividir y que el resultado sea un entero
        $numeroDigitos++;

    }

    return $numeroDigitos;

}

$digitos=digitos($cantidad);

echo "El numero de digitos es: $digitos <br>";

//Devuelve el digito que ocupa la posición pos empezando por la izquierda

$num = 4230;
$num2= 348203;
$num3=953934823;  //Para el 3 

function digitoN(int $num, int $pos){

    //Vamos a ir dividiendo entre 10 y vamos a ir aumentando una variable, si la suma de la variable y de pos es igual a todos los dígitos que tiene el numero, deja de dividir
    
    $contador=0;

    $numAux=$num;
    $digitoFinal=0;

    if($contador+$pos=digitos($num)){
        $digitoFinal = $num%10;
    }

    while($contador+$pos<digitos($num)){ 

        $numAux=intdiv($num,10);//Va a ir dividiendo entre 10 hasta llegar a que la suma de contador y posición sea el total de digitos.
        $contador++;
        

        if($contador+$pos==digitos($num)){
            $digitoFinal=$numAux%10;
        }

    }

        echo "El digito que hemos conseguido es el: $digitoFinal <br>";
    return $digitoFinal;

}
echo " El numero de digitos es:" . digitos(58273) . "<br>";
echo "Vamos a pedir el cuarto dígito de 58273 <br>";
$posicion=4;
$digito=0;
$digito=digitoN(58273,$posicion);
echo "$digito es el que está en la posicion $posicion";

function quitaPorDetras(int $num, int $cant){

    //Vamos a quitar dígitos por detrás

    $numero=$num;
    $digitos = $cant;

    //El numero de dígitos será las veces que multiplicamos 10 entre sí

    $division=0;

    for($i=0;$i<$cant;$i++){



    }

    //echo "$division esta es la división";

}


quitaPorDetras(10,4);

?>