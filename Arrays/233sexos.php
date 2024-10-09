<?php

$arraySexos = ["M","F"];
$arrayResultado = [];

for($i=0;$i<100;$i++){ //Creamos el array de 100 posiciones con sus valores

    $arrayResultado[$i]=$arraySexos[rand(0,1)];

}

//Ahora creamos el array asociativo
$arrayAsociativo = ['M' => 0,
                        'F' => 0];

for($i=0;$i<count($arrayResultado);$i++){

    if($arrayResultado[$i] == 'M'){
        $arrayAsociativo['M']++;
    }else{
        $arrayAsociativo['F']++;
    }

}

print_r($arrayAsociativo);

?>