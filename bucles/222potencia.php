<?php

if(isset($_GET['base'])&&isset($_GET['exponente'])&&!empty($_GET['base'])&&!empty($_GET['exponente'])){

    $base = $_GET['base'];//2
    $exponente=$_GET['exponente'];
    $resultado=$base;
    $contador=1;
    //Utilizando la instrucción for
    for($contador;$contador<$exponente;$contador++){

        $resultado=$resultado*$base;

    }

    echo "Resultado $resultado con el bucle for </br>";

    //Con el bucle while
    $resultado=$base;
    $contador=1;
    while($contador<$exponente){
        $resultado=$resultado*$base;
        $contador++;
    }

    echo "Resultado con un while $resultado";


    //Resultado con un "do while"

    $resultado=$base;
    $contador=1;

    do{

        $resultado=$resultado*$base;
        $contador++;

    }while($contador<$exponente);
    echo "</br>";

    echo "Ejercicio resuelto con do while $resultado";

}else{
    echo "No has introducido los valores correctamente";
}

?>