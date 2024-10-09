<?php

declare(strict_types=1);

function mayor() : int{

    $mayor=0;

    $array=func_get_args();

    for($i = 0; $i<count($array);$i++){//for para asegurarnos de que tengamos el valor máximo de los valores que han dado
        if($mayor>$array[$i]){
            $mayor = $array[$i];
        }
    }

    for($i=0;$i<count($array);$i++){//for para localizar el valor más alto

        if($mayor<$array[$i]){

            $mayor = $array[$i];

        }
    }

return $mayor;//Valor más alto

}

$mayor1=mayor(-12,-345,-1,-86);//Varios valores que podemos 

echo "El numero mayor es: $mayor1";

echo "Vamos a hacer la funcion que concatena parámetros <br>";

function concatenar(...palabras) : string{
    
    $frase ="";
    $array =[];
    $array = func_get_args();

   foreach($array as $valor){
        $frase = $frase + $valor;
   }

   return $frase;

}

$frase2=concatenar("hola", "buenos", "dias");

?>