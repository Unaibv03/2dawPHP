<?php

$monedasDe2=5;
$monedasDe1=7;
$centimos50=4;
$centimos20=2;
$centimos10=3;

$eurosTotales=0;
$eurosExtra= 0;

$centimosSuma=($centimos50*50)+($centimos10*10)+($centimos20*20);

$eurosExtra=$centimosSuma/100;
$centimosRestantes=$centimosSuma%100;

$eurosTotales = ($monedasDe2*2)+($monedasDe1)+$eurosExtra;

echo 'Tienes ' . $eurosTotales . ' y ' . $centimosRestantes . ' centimos restantes';

?>