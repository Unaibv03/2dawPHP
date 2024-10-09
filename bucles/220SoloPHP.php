<?php

echo "<ul>";
for($valor=0;$valor<=50;$valor+=2){
    echo "<li> $valor </li>";
}
echo "</ul>";

echo "Ahora vamos a hacer pasándolo por parámetro";
$inicio=$_GET['inicio'];
$fin=$_GET['fin'];

echo "<ul>";
for($valor=$inicio;$valor<=$fin;$valor+=2){
    echo "<li> $valor </li>";
}
echo "</ul>";



//Para introducir etiquetas html dentro del php se usa la etiqueta 'echo'.
?>
