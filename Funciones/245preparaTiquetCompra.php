<?php

if(isset($_GET["productos"])){//En base al valor que nos pase el usuario se crearán más o menos casillas

$cantidadProductos=$_GET["productos"];  //Cantidad de productos

echo "Introduce valores: <br>";

echo "<form action='245imprimeTiquetCompra.php' method='get'>";

for($i=0;$i<$cantidadProductos;$i++){ //Se crearán las filas igual a la cantidad de productos que haya

    echo "
    Producto "; echo $i+1; echo ". Nombre del producto: 
    <input type='text' name='producto$i'>
    Precio del producto:
    <input type='type' name='precio$i'> <br>
    <input type='hidden' name='productos' value='$cantidadProductos'>
    ";//Con el valor hidden podemos pasar el parámetro que recibimos a otro programa, que en este caso se lo estamos pasando a imprimetiquet, porque sino se pierde.

}

echo "<input type='submit' value='Enviar'>";

echo "</form>";

}
?>