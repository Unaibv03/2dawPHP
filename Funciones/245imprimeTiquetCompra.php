<?php

//Para pasar de euros a pesetas ya hay una funcion que hemos creado y la vamos a incluir con include o include_one
include_once("244euros.php");

$cantidad = $_GET['productos'];
$precio=0;
$totalEuros=0;
$producto="";

//Necesito pillar el producto y mostrarlo con su precio total

echo "<table>";

for($i=0;$i<$cantidad;$i++){//calculamos el total de euros de la compra

    //tenemos que llamar al nombre de el espacio de texto.
    echo "
    <tr>
    ";
    $producto=$_GET["producto$i"];//Cogemos los productos
    $precio=$_GET["precio$i"];  //Cogemos los precios
    echo "
    <td> Producto: $producto </td> 
    <td> Precio: $precio </td>
    </tr>
    ";

    $totalEuros+=$precio;

}

echo "</table>";

$totalPesetas=euros2pesetas($totalEuros);

echo "Total de euros: $totalEuros <br>";
echo "Total de pesetas: $totalPesetas";

?>