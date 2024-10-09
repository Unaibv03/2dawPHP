<?php

if(isset($_GET['base'])&&isset($_GET['exponente'])&&!empty($_GET['base'])&&!empty($_GET['exponente'])){ //El isset es para comprobar si existen las variables que le digamos, no que tengan valor
    $base=$_GET['base'];//5
    $exponente=$_GET['exponente'];
    $base2=$base;//5
    //Si el exponente es positivo
    if($exponente>=1){
        $contador=1;
        while($contador<$exponente){
            $base=$base*$base2;
            $contador++;
        }

        printf('El resultado es: ' . $base);

    }
    //Exponente es 0
    if($exponente==0){

        printf('El resultado es 1');

    }

    //El exponente es negativo, el resultado es 1/potencia con el exponente positivo

    if($exponente<0){

        printf('El exponente es negativo');
        //pendiente

    }

}else{
    printf('No se han dado correctamente los valores');
}

?>