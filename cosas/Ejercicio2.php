<?php

$minutos = 2000; //Tengo que ver como quitarle los decimales
$minutosRestantes= $minutos%60;
$horas= $minutos/60;

echo $minutos . ' minutos son ' . $horas . ' horas y ' . $minutosRestantes . ' minutos restantes';

?>