<?php

$arrayAleatorio = [];

for($i=0;$i<33;$i++){

    $arrayAleatorio[$i]= rand(0,100);

}

$media=0;
$mayor = 0;
$menor = 100;

for($i=0;$i<count($arrayAleatorio);$i++){

    //Comprobando el mayor
    if($arrayAleatorio[$i]>$mayor){
        $mayor=$arrayAleatorio[$i];
    }
    //Comprobando el menor
    if($arrayAleatorio[$i]<$menor){
        $menor=$arrayAleatorio[$i];
    }

    $media=$media + $arrayAleatorio[$i];

}

$media = $media / 33;

print_r($arrayAleatorio); echo "</br>";
echo "El valor más pequeño es $menor </br>";
echo "El valor más alto es $mayor </br>";
echo "La media es $media";

?>