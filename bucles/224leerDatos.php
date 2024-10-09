<?php

if(isset($_GET['cantidad'])&&!empty($_GET['cantidad'])){

    $cantidad=$_GET['cantidad'];
    $contador=0;

    for($i=0;$i<$cantidad;$i++){

        echo "<input type=text>";
        $contador++;

    }

    echo "Hay $contador cajas";

}

?>