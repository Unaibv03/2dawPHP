<?php

if(isset($_GET['ladoA'])&&isset($_GET['ladoB'])&&isset($_GET['ladoC'])&&!empty($_GET['ladoA'])&&!empty($_GET['ladoB'])&&!empty($_GET['ladoC'])){

    $ladoA=$_GET['ladoA'];
    $ladoB=$_GET['ladoB'];
    $ladoC=$_GET['ladoC'];

    $validado=0;

    //En el caso de que el triángulo sea equilátero
    if(($ladoA*$ladoA)==(($ladoB*$ladoB)+($ladoC*$ladoC))||($ladoA**2 + $ladoB**2 == $ladoC**2)|| ($ladoB**2 == $ladoA**2 + $ladoC**2)){
        echo 'Es un triángulo rectángulo';
        $validado++;
    }
    if($ladoA==$ladoB&&$ladoB==$ladoC){
        echo 'Es un triangulo equilatero';
        $validado++;
    }else{
       
        if($ladoA==$ladoB||$ladoA==$ladoC||$ladoB==$ladoC){
            echo 'Es un triangulo isosceles';
            $validado++;
        }
    }

    if($validado==0){
        echo 'Es un triangulo escaleno';
    }

}else{
    echo "Los datos no son correctos";
}

?>