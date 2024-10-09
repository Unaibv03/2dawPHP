<?php
//Sigo teniendo que aprender a quitar decimales
$numero = 59;

$unidades=$numero%10;//3
$decimales=intdiv($numero,10);//4 forma para dividir sin quedarse con los decimales

$numeroInvertido = $unidades*10 + $decimales;

echo $numero;
echo ' ';
echo $numeroInvertido;

?>
