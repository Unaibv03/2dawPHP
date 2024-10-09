<?php
declare(strict_types=1);

include_once("243biblioteca.php");//Añadimos las funciones de ese fichero

//echo suma(4,5);


$arrayFunciones= ["sumar", "restar", "multiplicar", "dividir"];

if(isset($_GET['seleccion'])&&isset($_GET['num1'])&&isset($_GET['num2'])){

    $operacion=$_GET['seleccion'];

    $num1=$_GET['num1'];
    $num2=$_GET['num2'];

    echo $operacion($num1,$num2). "<br>";
}


?>