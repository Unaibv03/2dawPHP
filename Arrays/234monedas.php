<?php


if(isset($_GET['cantidad'])&&!empty($_GET['cantidad'])){

//Cantidad = 2342

$arrayDinero = [500 => 0,
                    200 => 0,
                        100 => 0,
                            50 => 0,
                                20 => 0,
                                    10 => 0,
                                        5 => 0,
                                            2 => 0,
                                                1 => 0];

$cantidad = $_GET['cantidad'];

foreach( $arrayDinero as $clave => $val){

    while($cantidad >= $clave){

        $arrayDinero[$clave]++;
        $cantidad-=$clave;

    }

}


print_r($arrayDinero);

}else{
    echo "No has introducido bien los valores";
}

?>