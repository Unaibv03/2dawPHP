<?php

declare(strict_types=1);

function esPar(int $num) : bool {
    return $num%2==0;
}

echo esPar(24)?"Es par":"Es impar";

$tam=10;
$numero1=50;
$numero2=100;
$arrayAleatorio=[];

echo "<br>";

function arrayAleatorio(int $tam, int $min, int $max) : array{

$array=[];

for($i=0;$i<$tam;$i++){

    $numAleatorio = rand($min, $max);

    $array [$i]=$numAleatorio;

}

return $array;

}
$arrayAleatorio=arrayAleatorio(10,$numero1,$numero2);
print_r($arrayAleatorio);

echo "<br>";
echo "Nuevo ejercicio: <br>";

//Una función que reciba un array por referencia y devuelva la cantidad de numeros pares que hay almacenados.

$array = [4,2,7,9,0,5,67,4,24,66,34];
$arrayPar1=[];
function arrayPares(&$arrayReferencia) : array{

    $arrayPar=[];

    for($i=0;$i<count($arrayReferencia);$i++){

        if($arrayReferencia[$i]%2==0){
        
            $arrayPar[$i]=[$arrayReferencia[$i]]; //De esta manera nos quedamos en el nuevo array sólo los numeros pares.
            
        }

    }

    return $arrayPar;

}

$arrayPar1=arrayPares($array);

print_r($arrayPar1);

?>